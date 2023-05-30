<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ocorrencia extends Eloquent
{

    //collection
    protected $table = 'ocorrencias';
    
    //pegando campos
    public function getFillable()
    {
        return $this->fillable;
    }    

    //pegando campos obrigatorios do romanear
    public function getObrigatorios()
    {
        return $this->obrigatorios;
    }

    //campos
    protected $fillable = [
        "TESTE 1811",

        "TETOOO",
        "TESTE",
        "TESTE2",
        "TESTE3",
        "TTESTEE",
        "VITALITY",
        "ASTRALIS",
        "NAVI",
        "TETOOO",
        "TESTE",
        "TESTE2",
        "TESTE3",
        "TTESTEE",
        "TRANSMED",
        "FHSO",
        "AGILE",
        "CASAALADIM",
        "VAPTVUPT",
        "IZITRANSP",
        "VAPUTVUPT",
        "FENIX",
        "FONSECA",
        "WANDERLEY",
        "AACR",
        "TNORTE",
        "MEDLOG",
        "AACARVALHO",
        "JSP",
        "ALMEIDA",
        "WF",
        "R2B",
        "ITZ",
        "NAZARIA",
        "INFODEC",
        "TOTAL",
        "LOGAKI",
        "SANTACLARA",
        "PONTUAL",
        "MM",
        "PG",
        "JOBSON",
        "PONTUALCARGA",
        "M&M",
        "JOSEAUGUSTO",
        "FM",
        "RC",
        "TRANSLIDER",
        "TRANSSOARES",
        "AR4D",
        "OFFICE",
        "PACOTE",
        "EXPRESSO",
        "TRANSELLO",
        "TEGMA",
        "CEPALAB",
        "TRANSDONATTO",
        "TESTSE",
        "GSFARMA",
        "RODOFAR",
        "AZAPFYESAS",
        "REDEMINEIRA",
        "AMB",
        "FERREIRA",
        "ILS",
        "3GLOG-1",
        "PHLOG",
        "TRANSPAPER",
        "FARMIX",
        "CIMED",
        "CARVALHO",
        "JLSINAI",
        "CABRAL",
        "CMAXX",
        "JM",
        "AQUILA",
        "INFOMINAS",
        "JR",
        "SILVEIRA",
        "MG_MEDICAL",
        "TOPCESTAS",
        "EMIS",
        "JC",
        "3GLOG",
        "DCENTER",
        "AZAPFY",
        "ACRIPEL",
        "GAMA",
        "NCN",
        "ORIENTE",
        "TRANSNIL",
        "DNG",
        "SOMED",
        "ASSUNCAO",
        "PH",
        "jm",
        "Aquila",
        "Infominas",
        "jr",
        "Ferreira",
        "cabral",
        "topcestas",
        "emis",
        "jc",
        "3glog",
        "phlog",
        "azapfy",
        "assuncao",
        "acripel",
        "gama",
        "ncn",
        "ajato",
        "transnil",
        "transpaper",
        "cmaxx",
        "somed",
        'id_evento',        //string   -- id único do evento
        'grupo_emp',        // string -- grupo da empresa -- Erick
        'descricao',        // string -- define uma descrição para o problema -- Erick
        'status',           // string -- define o status que a ocorrencia possui naquele momento -- Erick
        'ocorrencia',       // object {hash ,nome} -- parametro que define a ocorrencia que foi lancada -- Erick
        'data_inicio',      // date -- define a data de incio do evento lancado -- Erick
        'data_fim',         // date -- define a data de conclusao do evento lancado -- Erick
        'prioridade',       // string -- campo que define a prioridade de uma ocrrência -- Henrique
        'remetente',        // array object -- campo que define o nome do remetente associado  {cnpj, nome} -- Henrique
        'destinatario',     // array object  -- campo que define o nome do destinatario {cnpj, nome} -- Henrique
        'aberto',           // object {grupo_usuario, nome, cpf} -- campo que define o usuário que abriu um evento de ocorrência -- Henrique
        'fechado',          // object {grupo_usuario, nome, cpf} -- campo que define o usuário responsáve pela ocorrência -- Henrique
        'coordenadas',      // object {lat, long, data} -- campo que define a localizacao que foi gerado o evento -- Erick
        'placa_veiculo',    // string -- Placa do veiculo cujo evento foi lancado -- Erick
        'tipo',             // string -- tipo de evento lancado (app ou web) -- Erick
        'estimativa',       // string -- tempo estimado para duração do evento -- Erick
        'acoes',            // array object {descricao, responsavel {cpf, nome}, dt_criacao} -- campo que guarda todas as ações tomadas em relação a um evento de ocorrencia -- Erick
        'adicionais'
    ];
    //campos obrigatorios
    protected $obrigatorios = [
        'id_evento',
        'tipo',
        'grupo_emp',
        'ocorrencia',
        'data_inicio',
        'aberto'
    ];

    //campos obrigatorios 
    protected $obrigatoriosApp = [
        
    ];

    protected $obrigatoriosWeb = [
        'status'
    ];

    //campos ocultos em pesquisas
    protected $hidden = ['_id'];

    //chaves unicas
    protected $chaveUnica = [];

    //chaves Compostas
    protected $chaveComposta = [];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = [];

    public $exists = true;

    protected $dateFormat = 'd/m/Y H:i';
}
