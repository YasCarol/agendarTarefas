<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Rastreamento extends Eloquent
{
    protected $table = 'Rastreamentos';
    
    public function getFillable(){
        return $this->fillable;
    }

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
        "OESTE",
        "PREPOC",
        "CEPALAB",
        "TRANSDONATTO",
        "GSFARMA",
        "RODOFAR",
        "REDEMINEIRA"
    ];
    protected $dates = [
        'created_at',
        'updated_at',  
    ];
    //campos ocultos em pesquisas
    protected $hidden = ['_id'];
    public $exists = true;
    protected $dateFormat = 'd/m/Y H:i:s';
}

