<?php

namespace App\Services\Synchronization;

use App\Models\Sync;
use App\Repositories\GroupRepository;
use App\Repositories\SyncRepository;
use Illuminate\Support\Facades\Http;

class GroupService
{
    public function __construct()
    {
        $this->repository = new GroupRepository();
        $this->syncRepository = new SyncRepository();
        $this->syncEndpoint = env('API_URL').'pdv/carga-grupos?token=' . env('API_TOKEN');
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
                'idUsuario' => $data['id'],
                'CodSistema' => $data['id'],
                'Grupo' => $data['nome'],
            ];

            $this->repository->create($attributes);
            Sync::updateOrCreate(
                [
                    'Tabela' => 'Grupo',
                ],
                [
                    'DataSincronia' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
