<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends Repository
{

    /**
     * Get the model entity.
     * @return Product
     */
    public function entity(): Product
    {
        return new Product();
    }

}
