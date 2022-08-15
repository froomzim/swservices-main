<?php

namespace App\Repositories;

use App\Models\SubGroup;

class SubGroupRepository extends Repository
{

    /**
     * Get the model entity.
     * @return SubGroup
     */
    public function entity(): SubGroup
    {
        return new SubGroup();
    }

}
