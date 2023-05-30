<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Impostos extends Eloquent
{
    protected $table = 'impostos';
    protected $fillable = [
        'tipo',
        'uf',
        'aliquotas'
    ];
    static $cstIcms = [
        'NORMAL' => '00',
        'REDUCAO' => '20',
        'ISENCAO' => '40',
        'NAO_TRIBUTADO' => '41',
        'DIFERIDO' => '51',
        'SUBSTITUICAO' => '60'
    ];
}
