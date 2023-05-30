<?php

namespace App\models\azapgeo;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Estado extends Eloquent
{
    //collection
    protected $table = 'estados';

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
        "nome",
        "sigla",
        "rota",
        "prazo",
        "regiao",
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
