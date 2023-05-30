<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class RelatorioFrete extends Eloquent
{
    protected $table = 'relatorios_frete';

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
        'id',
        'nome',
        'ciclo',
        'dt_abertura',
        'dt_fechamento',
        'metodo_calc',
        'ocorrencias',      
        'timezone',
        "estatistica_rota",
        "estatistica_entreg",
        "acordo"     
    ];
    
    protected $hidden = ['_id','updated_at'];

    protected $dates = [];

    public $exists = true;
}
