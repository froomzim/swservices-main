<?php

namespace App\Services\Synchronization;

use App\Repositories\SyncRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Http;

class UserService
{
    public function __construct()
    {
        $this->repository = new UserRepository();
        $this->syncRepository = new SyncRepository();
        $this->syncEndpoint = env('API_URL').'pdv/carga-usuarios?token=' . env('API_TOKEN');
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
                'Usuario' => $data['nome'],
                'Senha' => 123,
                'flgUsuario' => 1,
                'flgComissionado',
                'Nome',
                'flgAdmin',
                'flgSupervisor',
                'SenhaSupervisor',
                'Codigo',
                'Contato',
            ];

            $this->repository->create($attributes);
            $this->syncRepository->updateOrCreate(
                [
                    'Tabela' => 'Usuario',
                ],
                [
                    'DataSincronia' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
