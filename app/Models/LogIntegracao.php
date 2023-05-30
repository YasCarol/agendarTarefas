<?php

namespace App\models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class LogIntegracao extends Eloquent
{
    protected $table = 'log_integracoes';
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
        'doc',
        'grupo_emp',
        'hash',
        'status',
        'comparacao',
        'motivo',
        'nome_integracao',
        'request',
        'qtd_vezes',
        'usuario',
        'destrava',
        'erros',
        'funcao',
        'dest',
        'ar'
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $hidden = ['_id'];

    public $exists = true;
}
