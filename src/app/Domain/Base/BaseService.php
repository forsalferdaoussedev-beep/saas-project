<?php

namespace App\Domain\Base;

abstract class BaseService
{
    public function __construct(
        protected BaseRepository $repository
    ) {}

    public function getAll(array $columns = ['*'], array $relations = [])
    {
        return $this->repository->all($columns, $relations);
    }

    public function getById(int $id, array $relations = [])
    {
        return $this->repository->findById($id, ['*'], $relations);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}