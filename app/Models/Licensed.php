<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licensed extends Model
{
    use HasFactory;

    protected $connection = 'pdv';
    protected $table = 'licenciado';
    public $timestamps = false;

    protected $fillable = [
        'CodLicenciado',
        'Codigo',
        'Nome',
        'Tipo',
        'documento1',
        'documento2',
        'Documento3',
        'NomeUsual',
        'CEP',
        'Logradouro',
        'Complemento',
        'Bairro',
        'fone1',
        'fone2',
        'Contato',
        'email',
        'ativo',
        'cargo',
        'EstadoID',
        'CidadeID',
        'Tipo_Fiscal',
        'Tipo_Atividade',
        'Cidade',
        'UF',
        'idPerfilEmpresa',
        'idTabelaEspecial',
    ];
}
