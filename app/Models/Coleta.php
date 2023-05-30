<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Coleta extends Eloquent
{
    //collection
    protected $table = 'coletas';

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
        'data_coleta',         // date    -- data da coleta -- elmix
        'cnpj_empresa',        // string  -- cnpj da empreja que o motorista marcou -- elmix
        'grupo_emp',           // string  -- informacao de qual grupo a nota foi coletada - Filipe
        'base_empresa',        // string  -- informacao de qual base a nota foi coletada - elmix
        'numero_coleta',       // string  -- string com o numero da coleta -- elmix
        'notas',               // Array  -- contem as chaves das notas -- elmix
        'cpf_motorista',       // string  -- Cpf do motorista que vai fazer a entrega da mercadoria -- elmix    
        'nome_motorista',      // string  -- nome do motorista -- elmix
        'unidade_romaneio'     // string  -- unidade de romaneio -- Adix
    ];

    //campos ocultos para pesquisas
    protected $hidden = [];

    //campos obrigatorios
    protected $obrigatorios = [
        'ar_nota',
    ];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = [];

    public $exists = true;
}