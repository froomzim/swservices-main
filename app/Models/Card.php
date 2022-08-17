<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCartao';
    protected $connection = 'pdv';
    protected $table = 'cartao';
    public $timestamps = false;

    protected $fillable = [
        'idCartao',
        'CodSistema',
        'Debito',
        'Cartao',
        'flgParcelas',
        'flgIdentificaCliente',
    ];
}
