<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Verificada extends Eloquent
{
    protected $table = 'verificadas';
    
    public function getFillable(){
        return $this->fillable;
    }

    protected $fillable = [
        "TESTE 1811",

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
        "ROCHA",
        "YM",
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
        "CEPALAB",
        "TRANSDONATTO",
        "TESTSE",
        "GSFARMA",
        "RODOFAR",
        "AZAPFYESAS",
        "REDEMINEIRA",
        "ar", 
        "numero",
        "grupo_emp",
        "tipo_doc",
        "sit_atual",
        "dt_sit_atual",
        "status",
        "dt_entrega",
        "dt_foto",
        "cam_imagem",
        "protocolo",
        "agrup",
        "remete",
        "embarca",
        "transp",
        "envolvidos",
        "user_scanner",
        "user_editor",
        "match",
        "aprovada",
        "deletado",
        "adicionais"
    ];
    protected $dates = [
        'created_at',
        'updated_at',  
        'dt_sit_atual',
        'dt_foto',
        'dt_entrega'
    ];
    //campos ocultos em pesquisas
    protected $hidden = ['_id'];

    public $exists = true;

    protected $dateFormat = 'd/m/Y H:i:s';

}
