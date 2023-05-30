<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Rota extends Eloquent
{
    //collection
    protected $table = 'rotas';

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
        'id',                   // string -- id da rota (hash = nome+grupo_emp) -- Erick
        'grupo_emp',            // string -- grupo empresa -- Erick
        'tipo_emp',            // string -- tipo empresa -- Erick
        'nome',                 // string -- nome da rota -- Erick
        'base',                 // Object -- Dados da base -- Erick
        'enderecos',            /* Object -- Erick
                                    "dests" -- array de destinatarios
                                    "bairros" -- array de bairros
                                    "cidades" -- array de cidades
                                */
        'embarcadores',         // array object -- Erick
        'excluidos',            // array object -- Erick
        'exclusiva',             // boolean -- Erick
        'dt_criacao',
        "adicionais"         
    ];

    //campos obrigatorios
    protected $obrigatorios = [
        'grupo_emp',
        'base',     
        'nome',
        'id'
    ];

    //chaves unicas
    protected $chaveUnica = [
        'id'
    ];

    //chaves Compostas
    protected $chaveComposta = [];

    //campos ocultos em pesquisas
    protected $hidden = ['_id'];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = [];

    protected $dateFormat = 'd/m/Y H:i';

    public $exists = true;
}
