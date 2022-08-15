<?php

namespace App\Services\Synchronization;

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
        $response = $this->repository->all();
        foreach ($response as $key => $r) {
            $r->delete();
        }

        foreach ($get['data'] as $key => $data) {
            $attributes = [
                'idCliente' => $data['id'],
                'CodSistema' => $data['id'],
                'CodCliente' => $data['id'],
                'CNPJ' => $data['doc'],
                'Cliente' => $data['nome'],
                'Endereco' => $data['logradouro'],
                'Bairro' => $data['bairro'],
                'Cidade' => $data['cidade'],
                'UF' => $data['uf'],
                'CEP' => $data['cep'],
                'Numero' => $data['numero'],
                'Complemento' => $data['complemento'],
                'Fantasia' => $data['fanatasia'],
                'idTabelaEspecial' => null,
                'EmiteNFP' => 1,
                'NViasFiado' => 1,
                'PermiteFaturar' => 1,
                'flgNovaPlaca' => 0,
                'flgKmObrig' => 0,
                'flgMotoristaObrig' => 0,
                'idCentroCusto' => null,
                'CodCentroCusto' => null,
                'CreditoDispo' => 10000,
            ];

            $this->repository->create($attributes);
            $this->syncRepository->updateOrCreate(
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
