<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Integracao extends Eloquent
{
    //collection
    protected $table = 'integracoes';

    //pegando obrigatorios
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

        "VITALITY",
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
        "AMB",
        "FERREIRA",
        "ILS",
        "3GLOG-1",
        "PHLOG",
        "TRANSPAPER",
        "FARMIX",
        "CIMED",
        "CARVALHO",
        "AJATO",
        "JLSINAI",
        "CABRAL",
        "CMAXX",
        "JM",
        "AQUILA",
        "INFOMINAS",
        "JR",
        "SILVEIRA",
        "MG_MEDICAL",
        "TOPCESTAS",
        "EMIS",
        "JC",
        "3GLOG",
        "DCENTER",
        "AZAPFY",
        "ACRIPEL",
        "GAMA",
        "NCN",
        "ORIENTE",
        "TRANSNIL",
        "DNG",
        "SOMED",
        "ASSUNCAO",
        "PH",
        'nome_empresa',       // string  -- nome ou base da empresa que possui integracao -- Adix
        'cnpj_empresa',       // string  -- cnpj da empresa que possui integracao -- Adix
        'tipo_empresa',       // string  -- tipo da empresa (dist, transp) -- Adix
        'grupo_empresa',      // string  -- tipo da empresa (dist, transp) -- Adix
        'nome_integracao',    // string  -- nome referente a integracao -- Adix
        'tipo_integracao',    // string  -- se a integracao e ativa ou passiva -- Adix
        'modo_integracao',    // string  -- modo de integracao (banco, webservice (nosso), webservice (deles), xmlEmail, EDI, Sefaz) -- Adix
        'parametros',         // Array   -- parametros de configuracao de conexao para integracao -- Adix
        'mapeamentos',        // Array   -- mapeamentos de campos para envio e mapeamento de recebimento -- Adix
        'ativo',              // Boolean -- se integracao esta ativa ou nao -- Adix
        'acao_integracao',    // string  -- se a integracao faz clonagem ou baixa -- Adix
        'audi_personalizada', // Boolean -- se a empresa faz auditoria personalizada ou nao -- Adix
        'operacao',           // Object  -- Define os parâmetros de operação automático da integracao -- Erick
        'nome_exibicao',       // string  -- Define o nome da integracao baseada no ERP do cliente para facilitar o endendimento do usuário
        "modo",
        "tipo",
        "debug",
        "grupo_emp"
    ];


    //campos ocultos em pesquisas
    protected $hidden = ['_id', 'updated_at', 'created_at'];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = ['created_at', 'updated_at'];

    public $exists = true;
}
