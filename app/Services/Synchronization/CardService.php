<?php

namespace App\Services\Synchronization;

use App\Repositories\CardRepository;
use App\Repositories\SyncRepository;
use Illuminate\Support\Facades\Http;

class CardService
{
    public function __construct()
    {
        $this->repository = new CardRepository();
        $this->syncRepository = new SyncRepository();
        $this->syncEndpoint = env('API_URL') . 'pdv/carga-cartoes?token=' . env('API_TOKEN');
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
                'idCartao' => $data['id'],
                'CodSistema' => $data['id'],
                'Debito' => $data['tipo'] == 'D' ? 1 : 0,
                'Cartao' => $data['nome'],
                'flgParcelas' => 0,
                'flgIdentificaCliente' => 0,
            ];

            $this->repository->create($attributes);

            $this->syncRepository->updateOrCreate(
                [
                    'Tabela' => 'Cartao',
                ],
                [
                    'DataSincronia' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
