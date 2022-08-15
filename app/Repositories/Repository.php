<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\ORM\RepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class Repository implements RepositoryContract
{

    public function all(string $orderBy = null, string $orderAs = "asc", array $columns = ['*']): Collection
    {
        return $this->entity()::all();
    }

    public function find(int $id): ?Model
    {
        return $this->entity()->query()->find($id);
    }

    public function findUuid(string $id): ?Model
    {
        return $this->entity()->query()->find($id);
    }

    public function findWhere($column, $operator = null, $value = null): Collection
    {
        return $this->entity()->query()->where($column, $operator, $value)->get();
    }

    public function findWhereForSelect($column, $operator = null, $value = null): Collection
    {
        return $this->entity()->query()->select('id', 'name')->where($column, $operator, $value)->get();
    }

    public function create(array $attributes): Model
    {
        return $this->entity()->create($attributes);
    }

    public function update(int $id, array $attributes = []): bool
    {
        return $this->entity()->query()->findOrFail($id)->update($attributes);
    }

    public function updateByUuid(string $id, array $attributes = []): bool
    {
        return $this->entity()->query()->findOrFail($id)->update($attributes);
    }

    public function paginate($perPage = null, $columns = ['*'], $page = null): LengthAwarePaginator
    {
        return $this->entity()->query()->paginate($perPage, $columns, 'page', $page);
    }

    public function query(): Builder
    {
        return $this->entity()::query();
    }

    public function delete(int $id): bool
    {
        return $this->entity()->query()->findOrFail($id)->delete();
    }

    public function deleteUuid(string $uuid): bool
    {
        return $this->entity()->query()->findOrFail($uuid)->delete();
    }

    public function deletePermanently(int $id): bool
    {
        return $this->entity()->query()->findOrFail($id)->forceDelete();
    }
}
