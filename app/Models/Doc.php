<?php

namespace App\models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Doc extends Eloquent
{
    protected $table = 'docs';
    protected $fillable = [
        "ARAZEVEDO",
        "JUALOG",
        "PIQUERI",
        "DAMASIO",
        "COMERCIAL",
        "TRANSLIMA",
        "LOGUI",
        "ALMEIDASI",
        "RRTLOG",
        "YASMIN",
        "VELTEN",
        "VDCLOG",
        "BR",
        "PRIMER",
        "TESTE 1811",
        "TESTE 1811",
        "TESTE1611",
        "FURIA",
        "FAZE",
        "TESTE 1811",
        "LIQUID",
        "G2",
        "TESTECNPJ",
        "TESTE2211",
        "INFOTRANS",
        "SHARKS",
        "HULCK",

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
        "WFT",
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
        "YM",
        "ROCHA",
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
        "CLAUDIO",
        "PREPOC",
        "DOCTESTE",
        "TETS",
        "TESTEZITO JR",
        "TRANSDONATTO",
        "TESTSE",
        "GSFARMA",
        "GS",
        "DALA",
        "MARTINS",
        "ELOG",
        "TRANSCARGA",
        "JPR",
        "SAMEX",
        "ZUUM",
        "MARTINS",
        "ELOG",
        "BIKER",
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
        "AJATO",
        "JL",
        "CABRAL",
        "CMAXX",
        "JM",
        "AQUILA",
        "ESCOLHA",
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
        "FRETERAPIDO",
        "PH",
        'ar',
        'chave',
        'chave_cte',
        'numero',
        'serie',
        'dt_emis',
        'valor',
        'valor_prod',
        'desconto',
        'frete',
        'volumes',
        'xml',
        'acordos_frete',

        'nome_remete',
        'cnpj_remete',
        'cpf_remete',

        'dest',
        'regiao',

        'cnpj_transp',
        'nome_transp',
        'cpf_transp',
        'tipo_doc',
        'sit_atual',
        'historico',
        'integracoes',
        'created_at',
        'prazo',
        'prazo_entrega',

        'dt_sit_atual',
        'status',
        'envolvidos',
        'param_baixa',
        'adicionais',
        'dt_entrega',
        'na_cerca',

        'pedido_ref',
        'dt_pedido',
        'dt_finalizacao',
        'dt_aprovacao',
        'tipo',
        'obs',
        'solicitante',
        'atendente',
        'nfes',
        'romaneio',
        'dt_romaneio',
        "pos_entrega",
        "anexos",
        "nf_devolucao",
        "finalizado",

        "origem",
        "servico",
        "destinatario",
        "grupo_emp",
        "end_comp",

        'docs_associados', // docs associados ao cte
        'cte_azapfy' // ctes emitidos no azapfy o qual o documento esta vinculado
    ];
    protected $dates = [];
    protected static $docs = [
        '10' => 'DEVOLUCAO',
        '11' => 'DNI',    //documento nao identificado -> veio do app motorista
        '12' => 'MINUTA',
        '13' => 'DCI',
        '14' => 'AZP',
        '54' => 'SCAN',  // documentos vindos do scanner sem referencia e com validacao humana.
        '55' => 'NOTA',
        '57' => 'CTE',
        '99' =>  'DUPLICADO',
    ];

    public static function getModeloDoc($tipo_doc)
    {
        $modelo = array_search($tipo_doc, self::$docs);
        if ($modelo === false) {
            $modelo = '55';
        }
        return (string) $modelo;
    }
    public static function getTipoDoc($modelo)
    {
        $tipo_doc =  isset(self::$docs[$modelo]) ? self::$docs[$modelo] : 'NOTA';
        return (string) $tipo_doc;
    }

    public static function getDocs()
    {
        return (array) self::$docs;
    }

    //campos ocultos em pesquisas
    protected $hidden = ['_id'];

    public $exists = true;

    protected $dateFormat = 'd/m/Y H:i:s';

    public static function getAllFillables()
    {
        $result = [];
        $sample = new Doc();
        foreach ($sample->fillable as $field) {
            $result[$field] = 1;
        }
        return $result;
    }
}
