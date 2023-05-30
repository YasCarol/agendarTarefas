<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class LogAzapfy extends Eloquent
{
    //collection
    protected $table = 'logazapfy';

    //pegando campos obrigatorios
    public function getObrigatorio(){
        return $this->obrigatorios;
    }

    //pegando campos
    public function getFillable(){
        return $this->fillable;
    }

    //pegando chaves unicas
    public function getChaveUnica()
    {
        return $this->chaveUnica;
    }

    //pegando chaves compostas unicos
    public function getChaveComposta()
    {
        return $this->chaveComposta;
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
        "descricao",
        "dt_criacao",
        "modulo",
        "categoria",
        "grupo_emp",
        "id_fonte",
        "chamada"
    ];

    //campos obrigatorios
    protected $obrigatorios = [
        "descricao",
        "dt_criacao",
        "modulo",
        "categoria",
        "grupo_emp",
        "id_fonte"
    ];

    //chaves unicas
    protected $chaveUnica = [];

    //chaves Compostas
    protected $chaveComposta = [
        "descricao",
        "dt_criacao",
        "modulo",
        "categoria",
        "grupo_emp",
        "id_fonte"
    ];

    //campos ocultos em pesquisas
    protected $hidden = [];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = ['created_at', 'updated_at', 'dt_criacao'];

    public $exists = true;
}
