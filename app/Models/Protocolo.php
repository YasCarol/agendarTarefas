<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Protocolo extends Eloquent
{
    //collection
    protected $table = 'protocolos';

    //pegando campos obrigatorios
    public function getObrigatorio()
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
        "TESTE 1811",

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
        "numero",       // String -- Número único do protocolo -- Erick
        "chave",        // String -- Chave que define as notas de que vão para o protocolo -- Erick
        "tipo",         // String -- Define de qual plataforma protocolo foi criado (WEB ou SCAN) -- Erick
        "grupo_emp",    // String -- Grupo da empresa -- Erick
        "base",         // String -- Base onde protocolo foi gerardo -- Erick
        "empresa",      // Object -- Nome e cnpj da empresa para fins de impressão -- Erick
        "remete",       // Object -- Nome e cnpj do remetente(Distribuidora) -- Erick
        "embarc",       // Object -- Nome e cnpj do embarcador -- Erick
        "t_notas",      // Int    -- Total de notas do protocolo -- Erick
        "finalizado",   // Bool   -- Define se protocolo esta finalizado -- Erick
        "terceiro",     // Bool   -- Define se protocolo foi feito por um terceiro ou por um funcionário da empresa -- Erick
        "scanner",     // Bool   --  Define se protocolo foi feito na scanner -- Erick
        "protocolador", // Object -- Nome e key de quem fez o protocolo -- Erick
        "created_at",   // Date   -- Data que o protocolo foi criado -- Erick
        'dt_prot',
        "docs",
        "adicionais"
    ];

    //campos ocultos em pesquisas
    protected $hidden = ['_id'];

    //campos obrigatorios
    protected $obrigatorios = [];

    //chaves unicas
    protected $chaveUnica = [];

    //chaves Compostas
    protected $chaveComposta = ['numero','grupo_emp'];

    //moldes
    protected $casts = [];

    protected $dateFormat = 'd/m/Y H:i';

    //datas
    protected $dates = [];

    public $exists = true;
}
