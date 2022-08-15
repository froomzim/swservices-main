<?php

namespace App\Repositories;

use App\Models\Client;

class ClientRepository extends Repository
{

    /**
     * Get the model entity.
     * @return Client
     */
    public function entity(): Client
    {
        return new Client();
    }

}
