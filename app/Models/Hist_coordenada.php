<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Hist_coordenada extends Eloquent
{
    //collection
    protected $table = 'hist_coordenadas';

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
        "TESTE 1811",
        "PRIMER",
        "TESTE 1811",
        "HULCK",
        "TESTE 1811",
        "SHARKS",
        "TESTE 1811",
        "TESTECNPJ",
        "TESTE2211",
        "INFOTRANS",
        "BR",
        "TESTE 1811",
        "TESTE 1811",
        "G2",
        "TESTE 1811",
        "LIQUID",
        "TESTE 1811",
        "TESTE 1811",
        "FAZE",
        "FURIA",
        "TESTE1611",
        "NAVI",
        "ASTRALIS",
        "VITALITY",
        "BR",
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
        "SANTACLARA",
        "LOGAKI",
        "PONTUAL",
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
        "MM",
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
        "lat",
        "lng",
        "dt_rastreio",
        "cpf",
        "nome_motorista",
        "rotas",
        "envolvidos",
        "baixas"
    ];

    //campos obrigatorios
    protected $obrigatorios = [
        "lat",
        "lng",
        "dt_rastreio",
        "cpf"
    ];

    //chaves unicas
    protected $chaveUnica = [];

    //chaves Compostas
    protected $chaveComposta = [
        "lat",
        "lng",
        "dt_rastreio",
        "cpf"
    ];

    //campos ocultos em pesquisas
    protected $hidden = [];

    //datas
    protected $dates = [];

    public $exists = true;
}
