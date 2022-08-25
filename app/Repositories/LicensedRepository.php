<?php

namespace App\Repositories;

use App\Models\Licensed;

class LicensedRepository extends Repository
{

    /**
     * Get the model entity.
     * @return Licensed
     */
    public function entity(): Licensed
    {
        return new Licensed();
    }

}
