<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Romaneio extends Eloquent
{
    //collection
    protected $table = 'romaneios';

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
        "hash",
        "numero",
        "numero_app",
        "grupo_emp",
        "empresa",
        "tipo",
        "tipo_app",
        "t_notas",
        "t_docs",
        "t_valor",
        "t_valor_prod",
        "t_frete",
        "t_volumes",
        "dt_rom",
        "dt_previsao",
        "criador",
        "historico",
        "rom_sistema",
        "placa",
        "base",
        "base_destino",
        "base_origem",
        "cpf_motorista",
        "nome_motorista",
        "entregador",
        "embarcador",
        "cidade_destino",
        "rota",
        "docs",
        "dnis",
        "seguro",
        "dup_rom_embarcador"
    ];

    //campos obrigatorios
    protected $obrigatorios = [
        'cpf_motorista',
        'cnpj_empresa',
    ];

    //chaves unicas
    protected $chaveUnica = [];

    //chaves Compostas
    protected $chaveComposta = [
        'numero_romaneio',
        'cnpj_empresa',
    ];

    protected $dateFormat = 'd/m/Y H:i';

    //campos ocultos em pesquisas
    protected $hidden = [];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = [];

    public $exists = true;
}
