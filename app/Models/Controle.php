<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Controle extends Eloquent
{

    //collection
    protected $table = 'controles';
    
    //pegando campos
    public function getFillable()
    {
        return $this->fillable;
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
        "hash",         // String -- Identificador unico da operação -- Erick
        "origem",        // Object -- Objeto que representa a origem da chamada -- Erick
    ];

    //campos ocultos em pesquisas
    protected $hidden = ['_id'];

    //datas
    protected $dates = ['created_at', 'updated_at'];

    public $exists = true;
}
