<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Destinatario extends Eloquent
{
    //collection
    protected $table = 'destinatarios';

    //pegando campos obrigatorios
    public function getObrigatorio(){
        return $this->obrigatorios;
    }

    //pegando campos
    public function getFillable(){
        return $this->fillable;
    }

    //pegando chaves unicas
    public function getChaveUnica()
    {
        return $this->chaveUnica;
    }

    //pegando chaves compostas unicos
    public function getChaveComposta()
    {
        return $this->chaveComposta;
    }
    
    //campos
    protected $fillable = [
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
        "GS",
        "DALA",
        "TRANSCARGA",
        "OFFICE",
        "PACOTE",
        "EXPRESSO",
        "TRANSELLO",
        "TEGMA",
        "CLAUDIO",
        "TETS",
        "JL",
        "CEPALAB",
        "FRETERAPIDO",
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
        "AJATO",
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
        '_id',                  // object -- id unico do mongo -- Adix
        'end_dest',             // string -- endereco do destinatario -- Adix
        'cidade_dest',          // string -- cidade do destinatario -- Adix
        'numero_dest',          // string -- numero do destinatario -- Adix
        'cod_cidade',           // string -- codigo da cidade -- Adix
        'bairro_dest',          // string -- bairro do destinatario -- Adix
        'uf_dest',              // string -- sigla uf do destinatario -- Adix
        'prazo_entrega',        // string -- prazo de entrega para destinatario -- Adix
        'nome_dest',            // string -- nome do destinatario -- Adix
        'cnpj_dest',            // string -- cnpj do destinatario -- Adix
        'posicao_entrega',      // string -- posicao de entrega do destinatario -- Adix
        'coordenadas',          // objeto  -- contem dados de latitude e logitude do endereco da entrega-- insumo para o app -- elmix
        'cnpj_embarcador',      // string -- cnpj do embarcador -- Adix
        'endereco_completo',    // string -- endereco do destinatario -- Adix
        'cnpj_dist',            // string -- cnpj da distribuidora -- Adix
        'nome_dist',            // string -- nome da distribuidora -- Adix
        'status',               // string -- status do destinatario -- Adix
        'rota',                 //Object -- Tem os dados da rota que o preencheu (chave_aux,tipo,id_rota,posisicao_entrega) -- Erick
        'prazo',                //Object -- Tem os dados do endereco que o preencheu (chave_aux,tipo,prazo_entrega) -- Erick
        'chave_comparacao',
        'adicionais',       //Object -- Para uso do ferramentas -- Erick 
    ];

    //campos obrigatorios
    protected $obrigatorios = [];

    //chaves unicas
    protected $chaveUnica = [
        'chave_comparacao'
    ];
    
    //chaves Compostas
    protected $chaveComposta = [];

    //campos ocultos em pesquisas
    protected $hidden = [];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = ['created_at', 'updated_at'];
    
    public $exists =true;
}

