<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Feriados extends Eloquent
{
  //collection
  protected $table = 'feriados';

  //pegando obrigatorio
  public function getObrigatorioEmpresa()
  {
    return $this->obrigatorios;
  }

  //pegando campos
  public function getFillable()
  {
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
        "TESTE1611",
        "FURIA",
        "FAZE",
        "TESTE 1811",
        "LIQUID",
        "G2",
        "TESTECNPJ",
        "TESTE2211",
        "INFOTRANS",
        "SHARKS",
        "HULCK",

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
    "data",
    "ano",
    "feriados"
  ];



  //chaves unicas
  protected $chaveUnica = [
    'cnpj_empresa',
  ];

  //chaves Compostas
  protected $chaveComposta = [];

  //campos ocultos em presquisas
  protected $hidden = ['_id', 'created_at'];

  //moldes
  protected $casts = [];

  //datas
  protected $dates = [
    'created_at',
    'updated_at'
  ];

  public $exists = true;
}
