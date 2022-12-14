<?php

namespace App\Repositories;

use App\Models\Group;

class GroupRepository extends Repository
{

    /**
     * Get the model entity.
     * @return Group
     */
    public function entity(): Group
    {
        return new Group();
    }

}
