<?php

namespace App\Repositories;

use App\Models\Sync;

class SyncRepository extends Repository
{

    /**
     * Get the model entity.
     * @return Sync
     */
    public function entity(): Sync
    {
        return new Sync();
    }

}
