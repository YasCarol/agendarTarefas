<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Relacao_empresa extends Eloquent
{

    protected $table = 'relacao_empresas';


    protected $fillable = [
        'nome_embarcador',
        'cod_embarcador',
        'cnpj_embarcador',
        'nome_entregador',
        'cod_entregador',
        'cnpj_entregador',
        'nome_prestador',
        'cod_prestador',
        'cnpj_prestador',
        'nome_destinatario',
        'cod_destinatario',
        'cnpj_destinatario',
        'espelho',
        'hash',
        'grupo_embarca',
        'grupo_entrega',
        'grupo_prestador',
        'grupo_dest',
        "tipo_relac",
        "adicionais",
        'servico'
    ];
    protected $dates = [];
    protected $hidden = ['_id'];
    public $exists = true;
}
