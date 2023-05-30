<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scanner_v3 extends Model
{
    protected $table = 'empresas';
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
        "grupo",
        "nome",
        "cnpj"
    ];
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $exists = true;
}
