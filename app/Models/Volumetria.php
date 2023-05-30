<?php

namespace App\models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Volumetria extends Eloquent
{

    protected $table = 'volumetrias';

    //pegando obrigatorios
    public function getObrigatorio()
    {
        return $this->obrigatorios;
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

    // retorna quais campos sao obrigatorios para a rota
    public function getObrigatoriosRota()
    {
        return $this->obrigatoriosRota;
    }

    // retorna quais campos sao obrigatorios para a rota
    public function getObrigatoriosRomaneio()
    {
        return $this->obrigatoriosRomaneio;
    }

    //campos
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
        "ar",                   //String -- Ar único
        "pedido",           //String -- numero do pedido
        "nome_remete",          //String -- nome remetente
        "cnpj_remete",          //String -- cnpj remetente
        "rota",                 //String
        "subrota",              //String
        "status",               //string
        "divergencia",          //bool
        "historico"             //Array
    ];

//campos ocultos para pesquisas
    protected $hidden = [];

//campos obrigatorios
    protected $obrigatoriosRota = [
        "base", 
        "grupo_emp", 
        "rota", 
        "cpf_criador", 
        "cnpj_empresa"
    ];
    protected $obrigatoriosRomaneio = [
        "tomador", 
        "embarcador", 
        "numero_romaneio", 
        "cpf_criador", 
        "cnpj_empresa", 
        "base"
    ];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'data_bip',
        'data_confirma',        
    ];

    public $exists = true;  //

}
