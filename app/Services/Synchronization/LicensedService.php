<?php

namespace App\Services\Synchronization;

use App\Models\Sync;
use App\Repositories\LicensedRepository;
use App\Repositories\SyncRepository;
use Illuminate\Support\Facades\Http;

class LicensedService
{
    public function __construct()
    {
        $this->repository = new LicensedRepository();
        $this->syncRepository = new SyncRepository();
        $this->syncEndpoint = env('API_URL') . 'pdv/carga-licenciado?token=' . env('API_TOKEN');
    }

    public function sync()
    {
        $get = Http::get($this->syncEndpoint)->json();
        if ($get['code'] == '200') {
            $response = $this->repository->all();
            foreach ($response as $key => $r) {
                $r->truncate();
            }

            $data = $get['data'];
            // dd($data);
            $attributes = [
                'CodLicenciado' => $data['id'],
                'Codigo' => $data['id'],
                'Nome' => substr($data['nome'], 0, 44),
                'Tipo' => 1,
                'documento1' => $data['cnpj'],
                'documento2' => $data['inscricao_municipal'],
                'Documento3' => $data['inscricao_estadual'],
                'NomeUsual' => strtok($data['nome'], " "),
                'CEP' => $data['cep'],
                'Logradouro' => $data['logradouro'],
                'Complemento' => $data['complemento'],
                'Bairro' => $data['bairro'],
                'fone1' => null,
                'fone2' => null,
                'Contato' => 'PADRAO',
                'email' => $data['nfse_email'],
                'ativo' => 'T',
                'cargo' => null,
                'EstadoID' => 35,
                'CidadeID' => 3550308,
                'Tipo_Fiscal' => $data['regime_tributario'],
                'Tipo_Atividade' => 0,
                'Cidade' => $data['cidade'],
                'UF' => $data['uf'],
                'idPerfilEmpresa' => 3,
                'idTabelaEspecial' => 0,
            ];

            $this->repository->create($attributes);
            Sync::updateOrCreate(
                [
                    'Tabela' => 'Licenciado',
                ],
                [
                    'DataSincronia' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
