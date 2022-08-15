<?php

namespace App\Contracts\ORM;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryContract
{

    public function all(string $orderBy = null, string $orderAs = "asc", array $columns = ['*']): Collection;

    public function find(int $id): ?Model;

    public function create(array $attributes): ?Model;

    public function update(int $id, array $attributes = []): bool;

    public function delete(int $id): bool;

    public function deletePermanently(int $id): bool;
}
