<?php

namespace App\Domain\Base;

use App\Interfaces\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{
    public function __construct(protected Model $model) {}

    public function all(array $columns = ['*'], array $relations = []): Collection
    {
        return $this->model->with($relations)->get($columns);
    }

    public function findById(int $id, array $columns = ['*'], array $relations = [], array $appends = []): ?Model
    {
        return $this->model->select($columns)->with($relations)->findOrFail($id)->append($appends);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): Model
    {
        $record = $this->findById($id);
        $record->update($data);
        return $record->fresh();
    }

    public function delete(int $id): bool
    {
        return $this->findById($id)->delete();
    }

    public function findByField(string $field, mixed $value): Collection
    {
        return $this->model->where($field, $value)->get();
    }
}
