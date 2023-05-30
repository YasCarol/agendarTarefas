<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Grupo_usuario extends Eloquent
{
    //collection
    protected $table = 'grupo_usuarios';



    //pegando campos
    public function getFillable()
    {
        return $this->fillable;
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
        'nome_grupo',       // string  -- nome do grupo de usuarios -- Adix
        'rota',             // Boolean -- informacao se o modulo de Rota pode ser acessada pelo grupo de usuario -- Adix
        'pesquisar',        // Boolean -- informacao se o modulo de Pesquisar pode ser acessada pelo grupo de usuario -- Henrique
        'dashboard',        // Boolean -- informacao se o modulo de Dashboard pode ser acessada pelo grupo de usuario -- Adix
        'cadastro',         // Boolean -- informacao se o modulo de Cadastros pode ser acessada pelo grupo de usuario -- Adix
        'romaneio',         // Boolean -- informacao se o modulo de Romaneios pode ser acessada pelo grupo de usuario -- Adix
        'protocolo',        // Boolean -- informacao se o modulo de Protocolos pode ser acessada pelo grupo de usuario -- Adix
        'aplicativo',       // Boolean -- informacao se o modulo de Aplicativo pode ser acessada pelo grupo de usuario -- Henrique
        'auditoria',        // Boolean -- informacao se o modulo de Auditoria pode ser acessada pelo grupo de usuario -- Henrique
        'prazo',            // Boolean -- informacao se o modulo de Prazo pode ser acessada pelo grupo de usuario -- Filipe
        'ocorrencia',       // Boolean -- informacao se o modulo de Ocorrencias pode ser acessada pelo grupo de usuario -- Erick
        'devolucao',        // Boolean -- informacao se o modulo de Devolucao pode ser acessada pelo grupo de usuario -- Erick
        'romaneio_automatico',   // Boolean -- informacao se o modulo de Rom_automatico pode ser acessada pelo grupo de usuario -- Erick
    ];

    //campos ocultos em pesquisas
    protected $hidden = ['_id', 'updated_at', 'created_at'];

    //datas
    protected $dates = [];

    public $exists = true;
}
