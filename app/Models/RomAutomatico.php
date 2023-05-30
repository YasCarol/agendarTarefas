<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class RomAutomatico extends Eloquent
{
    //collection
    protected $table = 'rom_automaticos';

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
        "_id",
        "grupo_emp",    // string -- grupo empresa -- Erick
        "rota",         // Object -- Dados da rota que gera esse romaneio -- Erick
        "base",         // Object -- Dados da base para qual esse romaneio sera gerado (É a mesma base que estará na collection Rota) -- Erick
        "hora",         // Int -- Hora que o romaneio sera gerado -- Erick
        "dias_semana",  // Array -- Possui os dias da semana que irão gerar romaneios -- Erick
        "dt_corte",     // Object -- Define o horário de corte das notas que vão para o romaneio -- Erick
        "motorista",    // Object -- Dados do motorista desse romaneio
        "timezone",     // String -- Timezone de quem gerou o registro
        "tipo_rom",     // String -- Tipo do romaneio que será gerado
        "tipo_doc",     // Array  -- Tipos de documento que entram no romaneio
        "entregador",   // Object -- Dados sobre entregador quando romaneio é de redespacho ou transferencia]
        "embarcador",   // Object -- Dados sobre embarcador quando romaneio é de coleta
        "base_destino",  // String -- Base de destino quando romaneio é de transbordo
        "base_origem"  // String -- Base de origem quando romaneio é de transbordo
    ];

    //campos obrigatorios
    protected $obrigatorios = [
        "grupo_emp", 
        "rota",      
        "hora",      
        "data_corte"
    ];

    //chaves unicas
    protected $chaveUnica = [
    ];

    //chaves Compostas
    protected $chaveComposta = ["rota.id","hora"];

    //campos ocultos em pesquisas
    protected $hidden = [];

    //moldes
    protected $casts = [];

    //datas
    protected $dates = [];

    protected $dateFormat = 'd/m/Y H:i';

    public $exists = true;
}
