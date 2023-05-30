<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * Find the user instance for the given username.
     *
     * @param  string  $username
     * @return \App\User
     */
    public function findForPassport($username)
    {
        return $this->where('login', $username)->first();
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }

    protected $table = 'users';

    public function routeNotificationForSlack($notification)
    {
        return 'https://hooks.slack.com/services/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';
    }

    // retorna quais campos sao obrigatorios para o motorista
    public function getObrigatorioMotorista()
    {
        return $this->obrigatoriosMotorista;
    }

    // retorna quais campos sao obrigatorios para o parceiro
    public function getObrigatorioParceiro()
    {
        return $this->obrigatoriosParceiro;
    }

    // retorna quais campos sao obrigatorios para os outros tipos de usuario
    public function getObrigatorioUsuario()
    {
        return $this->obrigatoriosUsuario;
    }

    // retorna quais campos sao obrigatorios para o super usuario
    public function getObrigatorioSuperUsuario()
    {
        return $this->obrigatoriosSuperUsuario;
    }

    // retorna quais campos sao obrigatorios para o super usuario
    public function getObrigatorioCliente()
    {
        return $this->obrigatoriosCliente;
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
        'remember_token',       // string  -- token de validacao -- Adix
        'name',                 // String  -- nome do usuario -- Adix
        'nome',                 // String  -- nome do usuario -- Adix
        'login',                 // String  -- nome do usuario -- Adix
        'email',                // string  -- email de usuario -- Adix
        'cpf',                  // string  -- cpf do usuario -- Adix
        'novo_user',
        'password',             // String  -- senha do usuario -- Adix
        'grupo_emp',            // String  -- nome do grupo_empresa qual o usuario pertence -- Filipe
        'cnpj_empresa',         // String  -- cnpj da empresa do usuario -- Filipe
        'base',                 // String  -- base do usuario -- Filipe
        'bases',                 // String  -- base do usuario -- Filipe
        'nome_par',             // String  -- nome da empresa do parceiro -- Filipe
        'cnpj_par',             // String  -- cnpj da empresa do parceiro -- Filipe
        'cnh',                  // String  -- cnh do motorista -- Filipe
        'placa_veiculo',        // String  -- placa do veiculo do motorista -- Filipe
        'tipo_veiculo',         // String  -- tipo do veiculo do motorista -- Filipe
        'grupo_usuario',        // String  -- nome do grupo_usuario qual o usuario pertence -- Filipe
        'telefone',             // String  -- telefone do usuario 
        'empresas',             // Array   -- Empresas do motorista 
        'ativo',                // Boolean -- status do usuario -- Filipe
        'dt_ultimo_uso',        // date    -- data do ultimo acesso -- Adix
        'versao_app',           // string  -- versao do aplicativo -- Adix
        'token_app',            // string  -- token do aplicativo -- Erick
        'dt_token_app',         // date    -- data do token do aplicativo -- Erick
        'cnpj_cliente',         // array -- cnpjs ligados ao usuario cliente -- Filipe
        'pago',                 // boolean -- informa se o cliente e pago ou nao -- Filipe
        'app',                // array -- dados para suporte ao usuario e informacoes vindas do celular -- Filipe
        'codigo_redef',          // string -- codigo para redefinir a senha do usuario
        'grupos',
        'senha',
        "adicionais",
        "img_perfil",
    ];

    // armazena quais campos sao obrigatorios para o motorista
    protected $obrigatoriosMotorista = [
        'name',
        'email',
        'cpf',
        'grupo_emp',
        'base',
        'grupo_usuario'
    ];

    // armazena quais campos sao obrigatorios para o parceiro
    protected $obrigatoriosParceiro = [
        'name',
        'email',
        'cpf',
        'password',
        'grupo_emp',
        'base',
        'nome_par',
        'cnpj_par',
        'grupo_usuario'
    ];

    // armazena quais campos sao obrigatorios para os outros tipos de usuario
    protected $obrigatoriosUsuario = [
        'name',
        'email',
        'cpf',
        'password',
        'grupo_emp',
        'base',
        'grupo_usuario'
    ];

    // armazena quais campos sao obrigatorios para o cliente
    protected $obrigatoriosCliente = [
        'name',
        'email',
        'password',
        'grupo_emp',
        'base',
        'grupo_usuario',
        'cnpj_cliente',
        'pago'
    ];

    // armazena quais campos sao obrigatorios para o super usuario
    protected $obrigatoriosSuperUsuario = [
        'name',
        'email',
        'grupo_emp',
        'cpf',
        'password',
        'grupo_usuario'
    ];

    //chaves unicas
    protected $chaveUnica = [
        'email',
        'cpf'
    ];

    //chaves Compostas
    protected $chaveComposta = [];

    //campos ocultos para pesquisa
    protected $hidden = ['_id', 'updated_at', 'created_at', 'remember_token'];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = ['created_at', 'updated_at', 'dt_token_app'];

    public $exists = true;
}
