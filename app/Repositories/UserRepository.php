<?php

namespace App\Repositories;

use App\Models\Users;

class UserRepository extends Repository
{

    /**
     * Get the model entity.
     * @return Users
     */
    public function entity(): Users
    {
        return new Users();
    }

}
