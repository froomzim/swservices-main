<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $primaryKey = 'idGrupo';
    protected $connection = 'superfast';
    protected $table = 'grupo';
    public $timestamps = false;

    protected $fillable = [
        'idGrupo',
        'CodSistema',
        'Grupo',
    ];
}
