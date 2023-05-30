<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Nota extends Eloquent
{
    //collection
    protected $table = 'notas';

    //pegando obrigatorios
    public function getObrigatorios()
    {
        return $this->obrigatorios;
    }

    //pegando obrigatorios softlog
    public function getObrigatoriosSoftlogEmis()
    {
        return $this->obrigatoriosSoftlogEmis;
    }
    //pegando obrigatorios
    public function getObrigatorioSeFazXml()
    {
        return $this->obrigatoriosSeFazXml;
    }
    
    //pegando obrigatorios
    public function getObrigatorioBdWbs()
    {
        return $this->obrigatoriosBdWbs;
    }
    
    //pegando obrigatorios
    public function getTiposCampos()
    {
        return $this->tiposCampos;
    }   
    
    //pegando campos
    public function getFillable()
    {
        return $this->fillable;
    }

    //pegando chaves unicas
    public function getChaveUnica()
    {
        return $this->chaveUnica;
    }

    //pegando chaves compostas unicos
    public function getchaveComposta()
    {
        return $this->chaveComposta;
    }

    //campos
    protected $fillable = [
        "TESTE 1811",

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
        '_id',                      // object  -- id unico do mongo -- Adix
        'tipo_doc',                 // string  --  tipo do documento salvo no objeto -- Filipe
        'param_baixa',              // object  -- recebe a id_notas para baixa -- Adix
        //'id_nota',                // string  -- campo  temporario devera ser apagado -- elmix
        'ar_nota',                  // string  -- numero ar da nota -- Adix 
        'chave_nota',               // string  -- chave de acesso da nota -- Adix
        'chave_dest',               // string  -- Chave unica para comparaçao com collection Destinatarios -- Erick
        'numero_nota',              // string  -- numero da nota -- Adix
        'serie_nota',               // string  -- serie da nota -- adix
        'dt_emis_nota',             // date    -- data de emissao da nota -- Adix
        'valor_mercadoria',         // string  -- valor da mercadoria -- Adix
        'qtd_volumes',              // string  -- volume de mercadoria da nota -- Adix
        'nome_destinatario',        // string  -- nome do destinatario -- Adix
        'cnpj_destinatario',        // string  -- cnpj do destinatario -- Adix
        'nome_dist',                // string  -- nome da distribuidora -- Adix
        'cnpj_dist',                // string  -- cnpj da distribuidora -- Adix
        'nome_transp',              // string  -- nome da transportadora -- Adix
        'cnpj_transp',              // string  -- cnpj da transportadora -- Adix
        'nome_redesp',              // string  -- nome da transportadora de redespacho -- Adix
        'cnpj_redesp',              // string  -- cnpj da transportadora de redespacho -- Adix
        'romaneio_dist',            // string  -- numero do romaneio na distribuidora -- Adix
        'romaneio_transp',          // string  -- numero do romaneio na transportadora -- Adix
        'romaneio_redesp',          // string  -- numero do romaneio na transportadora de redespacho -- Adix
        'data_romt',                // date    -- data do romaneio na transportadora -- Adix
        'data_romd',                // date    -- data do romaneio na distribuidora -- Adix 
        'data_romr',                // date    -- data de romaneio na transportadora de redespacho -- Adix
        'status_nota',              // string  -- status atual da nota -- Adix
        'situacao_atual',           // string  -- ocorrencia atual da nota -- Adix
        'dt_entrega',               // date    -- data da entrega -- Adix
        'cte_transp',               // string  -- numero do cte que a nota pode estar vinculada -- Adix 
        'cte_redesp',               // string  -- numero do cte de redespacho que a nota pode estar vinculada -- Adix 
        'dt_recebido_app',          // Date    -- Data do envio da nota para o celular -- elmix    
        'pos_entrega',              // int     -- posicao da entrega da nota no romaneio -- Adix
        'nome_motorista',           // String  -- Nome do motorista que vai fazer a entrega da mercadoria -- Adix
        'cpf_motorista',            // String  -- Cpf do motorista que vai fazer a entrega da mercadoria -- Adix
        'imei',                     // String  -- Codigo fisico do celular que recebeu a nota, Resposavel por bloquear fluxo desnecessario para o mesmo celular -- elmix
        'usa_espelho',              // string  -- Campo responsavel pelo agrupamento de notas no APP Conhecido como manifesto e espelho -- elmix
        'coleta',                   // Boolean -- Campo que determina se a notas é uma coleta ou nao. -- Adix
        'end_dest',                 // String  -- Rua e número do endereço de destino da nota -- Adix
        'cidade_dest',              // String  -- Cidade do endereço de destino da nota -- Adix
        'numero_dest',              // String  -- numero do endereço de destino da nota -- Adix
        'cod_cidade',               // String  -- codigo Cidade do endereço de destino da nota -- Adix
        'bairro_dest',              // String  -- bairro do endereço de destino da nota -- Adix
        'uf_dest',                  // String  -- Sigla do estado do endereço de destino da nota -- Adix
        'setor',                    // String  -- setor (dados para dash) -- Adix     
        'regiao',                   // String  -- regiao (dados para dash) -- Adix
        'valor_frete',              // String  -- Valor do frete que esta na nota -- Adix      
        'historico_nota',           // array   -- Historico de ocorrencia da nota -- [obs_entrega => observações da entrega pelo motorista, ocorrencia_nota* => ocorrencia selecionada pelo motorista no app, cam_imagem (array caminho) => array de strings com os caminhos das fotos da comprovação na amazon, dt_foto => data que a foto foi tirada no celular, dt_criacao* => data de criacao da ocorrencia] -- Lucas
        'auditor_atual',            // string  -- cnpj do ultimo auditor da nota -- Lucas
        'historico_auditoria',      // array   -- historico de auditoria -- [cnpj_auditor => cnpj da empresa que fez a auditoria na nota, dt_auditor => data da auditoria; status => valor da auditoria (rejeitada/validada)] -- Lucas
        'historico_integracao',     // array   -- historico das integracoes -- Filipe
        'dt_sit_atual',             // Date    -- data da mudanca de ocorrencia -- Lucas
        'grupo_emp',                // string  -- referencia do grupo da empresa do motorista, utilizado quando a nota é bipada -- elmix
        'romaneio',                 // string  -- numero do romaneio atual -- Lucas
        'data_romaneio',            // Date    -- data do romaneio atual -- Lucas
        'endereco_cadastrado',      // Boolean -- Define se o endereco da nota ja foi cadastrado -- Erick
        'rota',                     // objeto   -- Caso a nota tenho sido romaneada pelo rotas, recebera os dados da rota -- Erick ## elmix alterou para receber rotas da integracao.
        'intg_sis_ant',             // Boolean -- Define se nota veio do sistema antigo ou nao -- Adix
        'envio_sis_ant',            // Boolean -- Define se nota foi enviada para o sistema antigo -- Adix
        'protocolo',                // object  -- Define o protocolo da nota -- Erick
        'base_empresa',             // string  -- A base_empresa que a nota pertence, caso tenha -- Adix
        'baixa_erp',                // Boolean -- Define se a nota entra na lista de baixa erp -- Adix
        'prot_integracao',          // string  -- protocolo gerado pela integracao realizada pelo web service passivo -- Filipe
        'placa_veiculo',            // string  -- Placa do veiculo de entrega (romaneio) -- Adix
    //    'audi_personalizada',     // Boolean -- Se a empresa utiliza auditoria personalizada ou nao -- Adix
        'prazo_entrega',            // int     -- prazo para entrega em horas -- Adix
        'cnpj_auditor',             // Array   -- cnpj do proximo auditor -- Adix
        'nota_regiao',              // object   -- dados das regioes da nota com base no Ibge -- Erick
        'hash_app',                 // string -- Campo unico para impedir o loop do app e garantir que uma imagem ja está no banco -- elmix
        'coordenadas',              // objeto  -- contem dados de latitude e logitude do endereco da entrega-- insumo para o app -- elmix
        'romaneio_sistema',         // boolean -- mostra se o romaneio foi feito no sistema -- Filipe
        // -- CTE -- //
        'origem_nota',              // string -- monstr de qual integracao veio a nota -- Filipe
        'origem_cte',               // string -- origem dos dados do cte (baixa do SEFAZ ou Emissao) -- Adix
        'baixa_cte',                // boolean -- mostra se o cte já foi baixado ou não -- Filipe
        'comprovacao_cte',          // boolean -- mostra se o cte já foi comprovado ou não -- Filipe
        'adicionais',               // objeto -- contem dados diversos para relacionar com as notas -- elmix 
        'valor_liquido',            // string -- valor da nota sem os impostos -- Filipe
        'modal',                    // string -- tipo de transporte -- Filipe
        'notas',                    // array -- notas pertences ao cte -- Filipe
        'tomador_dist',             // array -- informacoes do tomador da distribuidora -- Filipe
        "embarcador_transp",         // array -- informacoes do embarcador da transportadora -- Filipe
        'id_rota',
        'nome_rota',
        'data_emissao_cte',  // campos para 
        'JM'                 // baixa GW
    ];
    
    //campos ocultos para pesquisas
    protected $hidden = [];

    //campos obrigatorios
    protected $obrigatorios = [
        "numero_nota",
        "dt_emis_nota",
        "nome_destinatario",
        "cnpj_destinatario",
        "nome_dist",
        "cnpj_dist",
        "nome_transp",
        "cnpj_transp",
        "end_dest"
    ];

    //campos obrigatorios
    protected $obrigatoriosSoftlogEmis = [
        "numero_nota",
        "dt_emis_nota",
        "nome_destinatario",
        "cnpj_destinatario",
        "nome_dist",
        "cnpj_dist",
        "end_dest"
    ];

    //campos obrigatorios
    protected $obrigatoriosSeFazXml = [
        "tipo_doc",
        "ar_nota",
        "chave_dest",
        "status_nota",
        "situacao_atual",
        "dt_sit_atual",
        "grupo_emp",
        "numero_nota",
        "serie_nota",
        "dt_emis_nota",
        "nome_destinatario",
        "cnpj_destinatario",
        "nome_dist",
        "cnpj_dist",
        "nome_transp",
        "cnpj_transp",
        "end_dest",
        "cidade_dest",
        "numero_dest",
        "bairro_dest",
        "uf_dest",
        "chave_nota",
        "cod_cidade",
        "valor_mercadoria",
        "qtd_volumes",
        "valor_frete"
    ];

    protected $obrigatoriosBdWbs = [
        "tipo_doc",
        "ar_nota",
        "chave_dest",
        "status_nota",
        "situacao_atual",
        "dt_sit_atual",
        "grupo_emp",
        'endereco_cadastrado',
        "data_romaneio",
        "romaneio",
        "nome_motorista",
        "numero_nota",
        "dt_emis_nota",
        "nome_destinatario",
        "cnpj_destinatario",
        "nome_dist",
        "cnpj_dist",
        "nome_transp",
        "cnpj_transp",
        "end_dest"
    ];

    protected $tiposCampos = [
        'tipo_doc' =>"string",           
        'param_baixa'=> "objeto",               
        'id_nota'=>"string",                   
        'ar_nota'=>"string",                   
        'chave_nota'=>"string",                
        'chave_dest'=>"string",                
        'numero_nota'=>"string",              
        'serie_nota'=>"string",              
        'dt_emis_nota'=> "data",              
        'valor_mercadoria'=>"string",         
        'qtd_volumes'=>"string",              
        'nome_destinatario'=>"string",         
        'cnpj_destinatario'=>"string",        
        'nome_dist'=>"string",               
        'cnpj_dist'=>"string",                
        'nome_transp'=>"string",               
        'cnpj_transp'=>"string",               
        'nome_redesp'=>"string",               
        'cnpj_redesp'=>"string",               
        'romaneio_dist'=>"string",            
        'romaneio_transp'=>"string",           
        'romaneio_redesp'=>"string",          
        'data_romt'=> "data",                 
        'data_romd'=> "data",               
        'data_romr'=> "data",               
        'status_nota'=>"string",             
        'situacao_atual'=>"string",                       
        'cte_transp'=>"string",               
        'cte_redesp'=>"string",               
        'pos_entrega' => "int",             
        'nome_motorista'=>"string",            
        'cpf_motorista'=>"string",             
        'usa_espelho'=>"string",                               
        'end_dest'=>"string",                 
        'cidade_dest'=>"string",              
        'numero_dest'=>"string",              
        'cod_cidade'=>"string",               
        'bairro_dest'=>"string",              
        'uf_dest'=>"string",                                                    
        'valor_frete'=>"string",                   
        'historico_nota'=>"array",             
        'historico_integracao' => "array",     
        'dt_sit_atual'=> "data",            
        'grupo_emp'=>"string",                 
        'romaneio'=>"string",                  
        'data_romaneio'=> "data",            
        'endereco_cadastrado'=> "bool",       
        'base_empresa'=>"string",              
        'baixa_erp'=> "bool",                 
        'prot_integracao'=>"string",           
        'placa_veiculo'=>"string",             
        'prazo_entrega' => "int",                                               
        'romaneio_sistema'=> "bool",        
        'origem_nota'=>"string",             
        'origem_cte'=>"string",              
        'baixa_cte'=> "bool",                 
        'comprovacao_cte'=> "bool",    
        'valor_liquido' => "string",
        'regiao' => "string", 
        'modal' => "string",  
        'notas' => "array",
        'tomador_dist' => "array",
        "embarcador_transp" => "array"
    ];

    //chave unica
    protected $chaveUnica = [
        'ar_nota',
    ];
    
    //chave composta
    protected $chaveComposta = [];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = [
        'created_at', 
        'updated_at',
        'dt_emis_nota', 
        'data_romt', 
        'data_romr', 
        'data_romd', 
        'data_foto', 
        'dt_sit_atual', 
        'data_romaneio',
        'data_emissao_cte', 
        'data_situacao_cte',
        'data_averbacao_emissao', 
        'data_averbacao_cancelamento',
        'data_cancelamento',
        'historico_nota.dt_criacao'
    ];

    public $exists = true;
}