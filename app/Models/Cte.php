<?php

namespace App\Models;

use Exception;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cte extends Eloquent
{
    protected $table = 'ctes';
    protected $fillable = [
        'chave',
        'numero',
        'serie',
        'dt_emis',
        'ambiente_emissao',
        'emitente',
        'remetente',
        'destinatario',
        'tomador',
        'status_emissao',
        'modal',
        'dados_carga',
        'documentos',
        'recibo',
        'xml',
        'carga',
        'eventos',
        'protocolo',
        'servico',
        'impostos',
        'indicador_ie_tomador',
        'tipo_emissao',
        'tipo_servico',
        'dados_complementares'
    ];
    protected $hidden = ['_id'];
    protected $dates = [
        'created_at', 
        'updated_at', 
        'dt_emis'
    ];
    public $exists = true;
    protected static  $tiposDeServico = [
        'NORMAL' => 0,
        'SUBCONTRATACAO' => 1,
        'REDESPACHO' => 2,
        'REDESPACHO_INTERMEDIARIO' => 3,
        'SERVICO_VINCULADO_MULTIMODAL' => 4
    ];
    protected static $modais = [
        'RODOVIARIO' => '01',
        'AEREO' => '02',
        'AQUAVIARIO' => '03',
        'FERROVIARIO' => '04',
        'DUTOVIARIO' => '05',
        'MULTIMODAL' => '06'
    ];
    protected static $tiposDeEmissao = [
        'NORMAL' => 1,
        'REGIME_ESPECIAL_NFF' => 3,
        'EPEC_SVC' => 4,
        'CONTINGENCIA_FSDA' => 5,
        'SVC_RS' => 7,
        'SVC_SP' => 8
    ];
    protected static $tiposDeCte = [
        'NORMAL' => 0,
        'COMPLEMENTO' => 1,
        'ANULACAO' => 2,
        'SUBSTITUICAO' => 3
    ];
    protected static $tiposImpressaoDacte = [
        'RETRATO' => 1,
        'PAISAGEM' => 2,
    ];
    protected static $ambientes = [
        'PRODUCAO' => 1,
        'HOMOLOGACAO' => 2
    ];
    protected static  $indicadoresPapelTomador = [
        'CONTRIBUINTE_ICMS' => 1,
        'CONTRIBUINTE_ISENTO' => 2,
        'NAO_CONTRIBUINTE' => 9
    ];

    protected static $papeisTomador = [
        'REMETENTE' => 0,
        'EXPEDIDOR' => 1,
        'RECEBEDOR' => 2,
        'DESTINATARIO' => 3,
        'OUTROS' => 4
    ];

    protected static $unidadesMedida = [
        'M3' => '00',
        'KG' => '01',
        'TON' => '02',
        'UNIDADE' => '03',
        'LITROS' => '04',
        'MMBTU' => '05'
    ];

    public static function getUnidadesDeMedida($unidade)
    {
        if(!isset(self::$unidadesMedida[$unidade]))
            throw new Exception('Unidade de medida' . $unidade . 'invalida');
        return self::$unidadesMedida[$unidade];  
    }

    public static function getCodigoTipoServico(string $servico): int
    {
        if(!isset(self::$tiposDeServico[$servico]))
            throw new Exception('Tipo de servico' . $servico . 'invalido');
        return self::$tiposDeServico[$servico];
    }

    public static function getCodigoModal(string $modal): string
    {
        if(!isset(self::$modais[$modal]))
            throw new Exception('Modal ' . $modal . ' invalido');
        return self::$modais[$modal];
    }

    public static function getCodigoTipoEmissao(string $emissao): int
    {
        if(!isset(self::$tiposDeEmissao[$emissao]))
            throw new Exception('Tipo emissao ' . $emissao . ' invalido');
        return self::$tiposDeEmissao[$emissao];
    }

    public static function getCodigoTipoCte(string $tipoCte): int
    {
        if(!isset(self::$tiposDeCte[$tipoCte]))
            throw new Exception('Tipo Cte ' . $tipoCte . ' invalido');
        return self::$tiposDeCte[$tipoCte];
    }

    public static function getCodigoTipoImpressaoDacte(string $tipoImpressao): int
    {
        if(!isset(self::$tiposImpressaoDacte[$tipoImpressao]))
            throw new Exception('Tipo impressao Dacte ' . $tipoImpressao . ' invalido');
        return self::$tiposImpressaoDacte[$tipoImpressao];
    }

    public static function getCodigoAmbienteEmissao(string $ambiente):int
    {
        if(!isset(self::$ambientes[$ambiente]))
            throw new Exception('Ambiente ' . $ambiente . ' invalido');
        return self::$ambientes[$ambiente];
    }

    public static function getCodigoIndicadorPapelTomador(string $indicadorPapelTomador): int
    {
        if(!isset(self::$indicadoresPapelTomador[$indicadorPapelTomador]))
            throw new Exception('Indicador papel ' . $indicadorPapelTomador . ' tomador invalido');
        return self::$indicadoresPapelTomador[$indicadorPapelTomador];
    }

    public static function getCodigoPapelTomador(string $papelTomador)
    {
        if(!isset(self::$papeisTomador[$papelTomador]))
            throw new Exception('Papel ' . $papelTomador . ' tomador invalido');
        return self::$papeisTomador[$papelTomador];
    }
    
}