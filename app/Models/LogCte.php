<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class LogCte extends Model
{
    protected $table = 'log_cte';
    protected $fillable = [
        'chave',
        'xml',
        'job',
        'recibo',
        'cnpj_emitente'
    ];
}
