<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Operacao extends Eloquent
{
        ###### operacoes conhecidas ######
    /*  
        clonar (sefaz,bd,wbsd)
        baixar (bd,wbsd)
        romanear
    */
    
    //collection
    protected $table = 'operacoes';
    
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
        "CEPALAB",
        "TRANSDONATTO",
        "TESTSE",
        "GSFARMA",
        "RODOFAR",
        "AZAPFYESAS",
        "REDEMINEIRA",
        "operacao", // String -- Nome da operação ao qual o registro se refere -- Erick
        "24/7",     // Bool   -- Define se a operação será rodada todos os momentos que o operações for chamado -- Erick
        "horas",    // Array  -- Array de horas que a operação será rodada -- Erick
        "dias",     // Array  -- Array dos dias que a operação irá rodar -- Erick
        "ordem",    // int    -- Define a ordem que as operações são ordenadas-- Erick
    ];

    //campos ocultos em pesquisas
    protected $hidden = ['_id'];

    //datas
    protected $dates = [];

    public $exists = true;
}
