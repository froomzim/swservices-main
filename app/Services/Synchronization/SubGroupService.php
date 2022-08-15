<?php

namespace App\Services\Synchronization;

use App\Repositories\SubGroupRepository;
use App\Repositories\SyncRepository;
use Illuminate\Support\Facades\Http;

class SubGroupService
{
    public function __construct()
    {
        $this->repository = new SubGroupRepository();
        $this->syncRepository = new SyncRepository();
        $this->syncEndpoint = env('API_URL').'pdv/carga-subgrupos?token=' . env('API_TOKEN');
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
                'codGrupo' => $data['grupo_id'],
                'SubGrupo' => $data['nome'],
            ];

            $this->repository->create($attributes);
            $this->syncRepository->updateOrCreate(
                [
                    'Tabela' => 'Subgrupo',
                ],
                [
                    'DataSincronia' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
