<?php

namespace App\models\azapgeo;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Regiao extends Eloquent
{
    //collection
    protected $table = 'regioes';

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
        "cod",
        "rota",
        "prazo",
        "nome",
        "att_ibge",
    ];

    //campos obrigatorios
    protected $obrigatorios = [
        "cod",
        "nome"
    ];

    //chaves unicas
    protected $chaveUnica = [];

    //chaves Compostas
    protected $chaveComposta = [];

    //campos ocultos em pesquisas
    protected $hidden = [
        "_id",
        "updated_at",
        "created_at"
    ];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = [];

    public $exists = true;
}
