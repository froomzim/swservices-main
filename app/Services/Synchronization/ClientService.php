<?php

namespace App\Services\Synchronization;

use App\Models\Sync;
use App\Repositories\ClientRepository;
use App\Repositories\SyncRepository;
use Illuminate\Support\Facades\Http;

class ClientService
{
    public function __construct()
    {
        $this->repository = new ClientRepository();
        $this->syncRepository = new SyncRepository();
        $this->syncEndpoint = env('API_URL') . 'pdv/carga-clientes?token=' . env('API_TOKEN');
    }

    public function sync()
    {
        $get = Http::get($this->syncEndpoint)->json();
        if ($get['code'] == '200') {
            $response = $this->repository->all();
            foreach ($response as $key => $r) {
                $r->delete();
            }

            foreach ($get['data'] as $key => $data) {
                $attributes = [
                    'idCliente' => $data['id'],
                    'CodSistema' => $data['id'],
                    'CodCliente' => $data['id'],
                    'CNPJ' => $data['juridica'] == 1 ? str_replace(['-', '.', '/'], '', $data['doc']) : null,
                    'Cliente' => substr($data['nome'], 0, 59),
                    'Endereco' => $data['logradouro'],
                    'Bairro' => $data['bairro'],
                    'Cidade' => $data['cidade'],
                    'UF' => $data['uf'],
                    'CEP' => str_replace('-', '', $data['cep']),
                    'Numero' => $data['numero'],
                    'Complemento' => $data['complemento'],
                    'Fantasia' => substr($data['nome'], 0, 29),
                    'EmiteNFP' => 1,
                    'NViasFiado' => 1,
                    'PermiteFaturar' => 1,
                    'flgNovaPlaca' => 0,
                    'flgKmObrig' => 0,
                    'flgMotoristaObrig' => 0,
                    'CreditoDispo' => 10000,
                ];

                $this->repository->create($attributes);
                Sync::updateOrCreate(
                    [
                        'Tabela' => 'Cliente',
                    ],
                    [
                        'DataSincronia' => date('Y-m-d H:i:s'),
                    ]
                );
            }
        }
    }
}
