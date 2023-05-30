<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Grupo_empresa extends Eloquent
{
    protected $table = 'grupo_empresas';

    // retorna quais campos sao obrigatorios para o grupo
    public function getObrigatoriosGrupoEmpresa()
    {
        return $this->obrigatoriosGrupoEmpresa;
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
        "grupo_emp",
        "nome_grupo",
        "hash",
        "tipo_emp",
        "bases",
        "cnpjs",
        "razao_social",
        "docs",                  // Array -- Define os tipos de documento usados pela empresa
        'usa_cerca',             // Boolean -- informacao se o uso de cerca é acessada pelo grupo de empresas -- Adix
        'usa_rotas',             // Boolean -- informacao se o uso de rotas é acessado pelo grupo de empresas -- Adix
        'ocorrencias_emp',
        'gerais',
        'logo',
        'seguro',
        'parametros_sac'

    ];

    // armazena quais campos sao obrigatorios para o grupo
    protected $obrigatoriosGrupoEmpresa = [
        'nome_grupo',
        'dados_grupo',
        'tipo_grupo',
        'rota',
        'pesquisar',
        'frete',
        'devolucao',
        'fiscal',
        'dashboard',
        'cadastros',
        'romaneios',
        'protocolos',
        'aplicativo',
        'auditoria',
        'rastreamento',
        'prazo'
    ];

    //chaves unicas
    protected $chaveUnica = [
        'nome_grupo',
    ];

    //chaves Compostas
    protected $chaveComposta = [];

    //campos ocultos em pesquisas
    protected $hidden = ['_id','updated_at', 'created_at'];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = [];

    public $exists = true;
}
