<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Log_operacoes extends Eloquent {
       //collection
       protected $table = 'log_operacoes';
   
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
           'operacao',      // string -- Qual operação foi logada -- Erick
           'categoria',     // string -- Categoria de resposta: (CRIAR,ALT,ERRO) -- Erick
           'resposta',      // Object -- Objeto de resposta da operação -- Erick
           'extra',         // Objeto -- Informações extras de interesse -- Erick
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
