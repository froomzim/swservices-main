<?php

namespace App\Services\Synchronization;

use App\Models\Sync;
use App\Repositories\ProductRepository;
use App\Repositories\SyncRepository;
use Illuminate\Support\Facades\Http;

class ProductService
{
    public function __construct()
    {
        $this->repository = new ProductRepository();
        $this->syncRepository = new SyncRepository();
        $this->syncEndpoint = env('API_URL').'pdv/carga-produtos?token='. env('API_TOKEN');
    }

    public function sync()
    {
        $get = Http::get($this->syncEndpoint)->json();
        $response = $this->repository->all();
        foreach ($response as $key => $r) {
            $r->delete();
        }
        foreach ($get['data'] as $key => $data) {
            $attributes = [
                'idProduto' => $data['id'],
                'CodSistema' => $data['id'],
                'CodProduto' => $data['id'],
                'cEAN' => $data['gtin'],
                'Produto' => substr($data['nome'], 0, 49),
                'CFOP' => $data['cfop'] ?? '5102',
                'unidCom' => $data['unidade_venda'],
                'qCom' => 1,
                'vUnitario' => $data['preco_venda'],
                'indRegra' => $data['grupofiscal']['id'] ?? null,
                'ICMSOrigem' => $data['grupofiscal']['origem_mercadoria'] ?? null,
                'ICMSCST' => $data['grupofiscal']['cst_icms'] ?? null,
                'ICMSALIQ' => $data['grupofiscal']['aliquota_icms'] ?? null,
                'PISCST' =>  $data['grupofiscal']['cst_pis_cofins'] ?? null,
                'PISALIQ' => null,
                'PISpercReducao' => null,
                'COFINSCST' => null,
                'COFINSALIQ' => null,
                'COFINSpercReducao' => null,
                'COFINSALIQ' => null,
                'COFINSCST' => null,
                'COFINSPercReducao' => null,
                'PISSTAliqProd' => null,
                'InfAProd' => null,
                'NCM' => $data['ncm']['id'],
                'TipoAliqECF' => 0,
                'VendaFracionada' => 0,
                'DiasTroca' => 0,
                'Desconto' => 0,
                'flgComissao' => $data['gera_comissao'],
                'CodGrupo' => $data['grupo']['id'] ?? null,
                'codSubGrupo' => $data['subgrupo']['id'] ?? null,
                'Bico' => null,
                'idTipo' => 1,
                'CodigoANP' => $data['anp'],
                'FlgPermiteFaturar' => 0,
                'flgDigitarDescricao' => $data['altera_nome'],
                'flgDigitarUnitario' => $data['altera_preco_venda'],
            ];

            $this->repository->create($attributes);
            Sync::updateOrCreate(
                [
                    'Tabela' => 'Produto',
                ],
                [
                    'DataSincronia' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
