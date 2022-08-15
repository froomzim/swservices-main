<?php

namespace App\Repositories;

use App\Models\Card;

class CardRepository extends Repository
{

    /**
     * Get the model entity.
     * @return Card
     */
    public function entity(): Card
    {
        return new Card();
    }

}
