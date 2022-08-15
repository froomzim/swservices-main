<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubGroup extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSubGrupo';
    protected $connection = 'superfast';
    protected $table = 'subgrupo';
    public $timestamps = false;

    protected $fillable = [
        'idGrupo',
        'CodSistema',
        'codGrupo',
        'SubGrupo',
    ];
}
