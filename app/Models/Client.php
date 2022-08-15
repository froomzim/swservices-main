<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCliente';
    protected $connection = 'superfast';
    protected $table = 'cliente';
    public $timestamps = false;

    protected $fillable = [
        'idCliente',
        'CodSistema',
        'CodCliente',
        'CNPJ',
        'Cliente',
        'Endereco',
        'Bairro',
        'Cidade',
        'UF',
        'CEP',
        'Numero',
        'Complemento',
        'Fantasia',
        'idTabelaEspecial',
        'EmiteNFP',
        'NViasFiado',
        'PermiteFaturar',
        'flgNovaPlaca',
        'flgKmObrig',
        'flgMotoristaObrig',
        'idCentroCusto',
        'CodCentroCusto',
        'CreditoDispo',
    ];
}
