<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Operacoes_ativas extends Eloquent
{
        ###### operacoes conhecidas ######
    /*  
        clonar (sefaz,bd,wbsd)
        baixar (bd,wbsd)
        romanear
    */
    
    //collection
    protected $table = 'Operacoes_ativas';
    
    //pegando campos
    public function getFillable()
    {
        return $this->fillable;
    }    
    
    //campos
    protected $fillable = [
        "TESTE 1811",

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
        'hash',                 // string -- identificador da operação
        'operacao',             //object  -- Objeto que possui os dados da operação
    ];


    //campos ocultos em pesquisas
    protected $hidden = ['_id'];

    //chaves unicas
    protected $chaveUnica = [];

    //chaves Compostas
    protected $chaveComposta = [];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = ['created_at', 'updated_at'];

    public $exists = true;
}
