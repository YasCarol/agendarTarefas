<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tb_cam_doc extends Model
{
    //collection
    protected $table = 'tb_caminho_doc';

    protected $fillable = [
        "nota",
        "cnpj",
        "inclusao"
    ];
    protected $primaryKey = 'id_cam_doc';
    public $timestamps = false;
    public $exists = true;
}