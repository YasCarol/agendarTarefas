<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use App\Models\Operacao;
use \Exception;
use \Throwable;
use App\Models\Ocorrencia;
use MongoDB\BSON\UTCDateTime;
use Illuminate\Support\Carbon;
use GuzzleHttp\Client;
use DateTimeZone;
use App\Models\Integracao;

class OperacaoController extends Controller
{
    public function operacoes($operacao)
    {
        try {
            if (stristr($operacao, 'baixar')) {
                return $this->enviarRequest('baixar', $operacao);
            } else if (stristr($operacao, 'clonar')) {
                return $this->enviarRequest('clonar', $operacao);
            }
        } catch (Throwable $e) {
            $resultado["status"] = false;
            $resultado["mensagem"] = $e->getMessage();
        }
        return $resultado;
    }
    public function enviarRequest($tipo, $nome_integracao)
    {
        $clientToken = new Client();
        $urlToken = "http://api.azapfy.com.br/api/integracao/$tipo";
        $options = array(
            'headers' => [
                'content-type' => 'application/json'
            ],
            'body' => json_encode([
                'nome_integracao' => $nome_integracao
            ]),
        );
        $response = $clientToken->request('POST', $urlToken, $options);
        $result = (json_decode($response->getBody()->getContents()));
        return (array) $result;
    }
    public function retornaProtocolo()
    {
        try {
            $docs = Doc::on('api')->where('adicionais.liberarNota', 'exists', true)->where('adicionais.liberarNota.corrigir', 'exists', false)->get();
            if (isset($docs[0])) {
                foreach ($docs as $key => $doc) {
                    $chave = $doc->chave;
                    $grupo = $doc->{"adicionais.liberarNota.grupo_emp"};
                    $dtCorrecao = $doc->{'adicionais.liberarNota.date'}->toDateTime()->setTimezone(new DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s');
                    date_default_timezone_set('America/Sao_Paulo');
                    $dtAtual = date("Y-m-d H:i:s");
                    if ($dtAtual >= $dtCorrecao) {
                        foreach ($doc->historico as $key => $v) {
                            if ($v['ocorrencia'] == "MANUTENCAO") {
                                $doc->{"historico.$key.ocorrencia"} = "PROTOCOLADO";
                                $doc->{"$grupo.status"} = "PROTOCOLADO";
                                $doc->{"$grupo.protocolo.finalizado"} = true;
                                $doc->{"adicionais.liberarNota.corrigir"} = false;
                                $doc->save();
                                $result[$chave] = ['status' => true, 'mensagem' => "Doc corrigido"];
                            }
                        }
                    } else {
                        $result[$chave] = ['status' => false, 'mensagem' => "Fora de hora"];
                    }
                }
            } else {
                return ['status' => false, 'mensagem' => "Nao há docs para corrigir"];
            }
            return $result;
        } catch (Exception $e) {
            return  ['status' => false, 'Mensagem' => $e->getMessage()];
        }
    }
    public function baixarOcorrenciaPers()
    {
        $retorno = [];
        $integracao = Integracao::on('api')
            ->where('nome_integracao', 'baixarWbsaGwBaixaOcorrenciaJc')->first();
        if (isset($integracao->nome_integracao)) {
            $docs = Doc::on('api')->where(function ($query) {
                $query->orWhere("integracoes.transp.JC.clonarwbsaJCListarCargas", ['$exists' => true]);
                $query->orWhere("integracoes.transp.JC.clonarwbsaJCListarCargasTransf", ['$exists' => true]);
                return $query;
            })
                ->where("JC.hist_ocorrencias", ['$exists' => true])
                ->get();
            if (isset($docs[0])) {
                foreach ($docs as $doc) {
                    foreach ($doc->{"JC.hist_ocorrencias"} as $posicao => $v) {
                        if (!isset($doc->{"JC.hist_ocorrencias.$posicao.baixada"})) {
                            foreach ($v as $hash => $idEvento) {
                                $ocorrencia = Ocorrencia::on('api')->where('id_evento', $idEvento)
                                    // ->mapear(['id_evento', 'data_inicio', 'descricao', 'ocorrencia'])
                                    ->first();
                                if (isset($ocorrencia->id_evento)) {
                                    switch ($ocorrencia->{"ocorrencia.nome"}) {
                                        case 'MERCADORIA SINISTRADA':
                                            $cod = '013';
                                            break;
                                        case 'QUEBRA DE VEICULO ENTREGA':
                                            $cod = '058';
                                            break;
                                        case 'SOBRA DE MERCADORIA SEM NF':
                                            $cod = '082';
                                            break;
                                        case 'AGENDAMENTO':
                                            $cod = '091';
                                            break;
                                        case 'AGUARDANDO CARTA DE CORRECAO':
                                            $cod = '093';
                                            break;
                                        case 'COLETA REALIZADA':
                                            $cod = '214';
                                            break;
                                        case 'CARRO EXTRA':
                                            $cod = '216';
                                            break;
                                        case 'FALTA DE NF':
                                            $cod = '226';
                                            break;
                                        case 'DIVEREGENCIA VOLUMES':
                                            $cod = '227';
                                            break;
                                        case 'RASTREIO':
                                            $cod = '099';
                                            break;
                                        case 'AVARIA TOTAL':
                                            $cod = '078';
                                            break;
                                        case 'AVARIA PARCIAL':
                                            $cod = '079';
                                            break;
                                        case 'EXTRAVIO TOTAL':
                                            $cod = '080';
                                            break;
                                        case 'EXTRAVIO PARCIAL':
                                            $cod = '081';
                                            break;
                                        default:
                                            $cod = '099';
                                    }
                                    $body = ([
                                        "OCORRENCIA" => $cod,
                                        "DATA_RECEBIMENTO" => $ocorrencia->data_inicio->toDateTime()->setTimezone(new DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
                                        "DATA_OPERACAO" => $ocorrencia->data_inicio->toDateTime()->setTimezone(new DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
                                        "RECEBEDOR" => $ocorrencia->descricao,
                                        "CAMINHO_ANEXO" => "",
                                        "ID_CTE" => $doc->{"param_baixa.JC.id_cte"}
                                    ]);
                                    $result = $this->enviarRequest(
                                        $body,
                                        "http://gwfiscal.gwcloud.com.br/webresources/servicosGW/baixarnotas/",
                                        ["Content-Type" => "application/json", "Authentication" => "J7F35eZd8Nke5"],
                                        "POST"
                                    );
                                    if ($result[0]->status_importacao == "true") {
                                        $doc->{"JC.hist_ocorrencias.$posicao.baixada.baixarWbsaGwBaixaOcorrenciaJc"} = true;
                                        $doc->{"JC.hist_ocorrencias.$posicao.baixada.data"} = new UTCDateTime(now());
                                        $doc->save();
                                        $retorno['baixadas'][$doc->ar][$idEvento]  = ["mensagem" => 'Evento baixado com sucesso'];
                                    } else {
                                        $doc->{"JC.hist_ocorrencias.$posicao.baixada.baixarWbsaGwBaixaOcorrenciaJc"} = false;
                                        $doc->{"JC.hist_ocorrencias.$posicao.baixada.data"} = new UTCDateTime(now());
                                        $doc->save();
                                        $retorno['erros'][$doc->ar][$idEvento] = ["mensagem" => $result[0]->mensagem];
                                    }
                                } else {
                                    $retorno['erros'][$doc->ar][$idEvento]  = ["mensagem" => 'Evento inexistente'];
                                }
                            }
                        }
                    }
                }
            } else {
                $retorno = ['status' => true, 'mensagem' => 'Todas ocorrencias ja foram baixadas'];
            }
        } else {
            $retorno = ['status' => false, 'mensagem' => 'Nao existe integracao com os parametros informado'];
        }
        return $retorno;
    }
    // public function enviarRequest($body, $url, $headers, $metodo)
    // {
    //     $clientToken = new Client();
    //     $url = $url;
    //     $options = array(
    //         'headers' => $headers,
    //         'body' => json_encode($body),
    //     );
    //     $response = $clientToken->request($metodo, $url, $options);
    //     $result = (json_decode($response->getBody()->getContents()));
    //     return $result;
    // }
    private function diaSemana()
    {
        switch (date("D")) {
            case "Mon":
                return "SEG";
                break;
            case "Tue":
                return "TER";
                break;
            case "Wed":
                return "QUA";
                break;
            case "Thu":
                return "QUI";
                break;
            case "Fri":
                return "SEX";
                break;
            case "Sat":
                return "SAB";
                break;
            case "Sun":
                return "DOM";
                break;
            default:
                throw new Exception("Dia da semana retornado não mapeado (" . date("D") . ")");
        }
    }
}
