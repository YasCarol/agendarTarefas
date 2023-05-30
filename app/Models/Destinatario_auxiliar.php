<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Destinatario_auxiliar extends Eloquent
{
    //collection
    protected $table = 'destinatarios_auxiliares';

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
        "ROCHA",
        "YM",
        "TOTAL",
        "LOGAKI",
        "OESTE",
        "PREPOC",
        "DOCTESTE",
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
        'cod_auxiliar',     // string -- codigo de destinatario auxiliar -- Adix
        'cod_cidade',       // string -- codigo da cidade -- Adix
        'pais',             // string -- pais -- Adix
        'estado',           // string -- estado -- Adix
        'cidade',           // string -- cidade -- Adix
        'bairro',           // string -- bairro -- Adix
        'id_rota',          // string -- id da tora -- Adix
        'cnpj_transp',      // string -- cnpj da transportadora -- Adix
        'cnpj_dist',        // string -- cnpj da distribuidora -- Adix
        'tipo',             // string -- tipo de rota (cidade ou bairro) -- Adix
        'nome_dist',        // string -- nome da distribuidora -- Adix
        'posicao_entrega',  // string -- posicao de entrega da rota -- Adix
        'prazo_entrega',    // int -- tempo que a transportadora leva para entregar na cidade/bairro -- Erick
        'adicionais',       //Object -- Para uso do ferramentas -- Erick 
    ];

    //campos obrigatorios
    protected $obrigatorios = [
        'cod_auxiliar',
        'cod_cidade',
        'cidade',
    ];

    //chaves unicas
    protected $chaveUnica = [
        'cod_auxiliar',
    ];
    
    //chaves Compostas
    protected $chaveComposta = [];

    //campos ocultos em pesquisas
    protected $hidden = [];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = ['created_at', 'updated_at'];

    public $exists = true;
}
