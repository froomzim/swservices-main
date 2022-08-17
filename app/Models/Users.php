<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $primaryKey = 'idUsuario';
    protected $connection = 'pdv';
    protected $table = 'usuario';
    public $timestamps = false;

    protected $fillable = [
        'idUsuario',
        'CodSistema',
        'Usuario',
        'Senha',
        'flgUsuario',
        'flgComissionado',
        'Nome',
        'flgAdmin',
        'flgSupervisor',
        'SenhaSupervisor',
        'Codigo',
        'Contato',
    ];
}
