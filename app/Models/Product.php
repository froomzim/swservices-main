<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'idProduto';
    protected $connection = 'superfast';
    protected $table = 'produto';
    public $timestamps = false;

    protected $fillable = [
        'idProduto',
        'CodSistema',
        'CodProduto',
        'cEAN',
        'Produto',
        'CFOP',
        'unidCom',
        'qCom',
        'vUnitario',
        'indRegra',
        'ICMSOrigem',
        'ICMSCST',
        'ICMSALIQ',
        'PISCST',
        'PISALIQ',
        'PISpercReducao',
        'COFINSCST',
        'COFINSALIQ',
        'COFINSpercReducao',
        'COFINSALIQ',
        'COFINSCST',
        'PISSTAliqProd',
        'InfAProd',
        'NCM',
        'TipoAliqECF',
        'VendaFracionada',
        'DiasTroca',
        'Desconto',
        'flgComissao',
        'CodGrupo',
        'codSubGrupo',
        'Bico',
        'idTipo',
        'CodigoANP',
        'FlgPermiteFaturar',
        'flgDigitarDescricao',
        'flgDigitarUnitario',
    ];
}
