<?php

namespace App\models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Codigos_volumetria extends Eloquent
{

    protected $table = 'codigos_volumetria';

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
        "CASAALADIM",
        "AGILE",
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
        'codigo',
        'cnpj_empresa',
        'situacao',
        'situacao_hist',
        'cpf_bipador',
        'cpf_veri',
        'subrota_bipada',
        'subrota_veri',
        'rota_bipada',   
        'rota_bip',
        'rota_veri',
        'msg_bipado',
        'msg_veri',
        'data_bip',
        'data_veri',
        'bipado',
        'verificador',
        'erro'
    ];

//campos ocultos para pesquisas
    protected $hidden = [];

//campos obrigatorios
    protected $obrigatorios = [
        'codigo',
        'cnpj_empresa',
        'situacao',
        'cpf_bipador',
        'rota',
        'data_bip',
    ];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public $exists = true;  //

}
