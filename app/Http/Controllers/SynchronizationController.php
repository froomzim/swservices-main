<?php

namespace App\Http\Controllers;

use App\Services\Synchronization\CardService;
use App\Services\Synchronization\ClientService;
use App\Services\Synchronization\GroupService;
use App\Services\Synchronization\ProductService;
use App\Services\Synchronization\SubGroupService;
use App\Services\Synchronization\UserService;
use Illuminate\Http\Request;

class SynchronizationController extends Controller
{
    public function __construct()
    {
        $this->services = [
           new CardService(),
           new SubGroupService(),
           new GroupService(),
           new ProductService(),
           new UserService(),
           new ClientService(),
        ];
    }

    public function syncRoutine()
    {
        foreach ($this->services as $service) {
            try {
                $service->sync();
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
}
