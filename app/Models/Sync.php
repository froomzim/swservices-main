<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sync extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSincronia';
    protected $connection = 'superfast';
    protected $table = 'sincronia';
    public $timestamps = false;

    protected $fillable = [
        'idSincronia',
        'Tabela',
        'DataSincronia',
    ];
}
