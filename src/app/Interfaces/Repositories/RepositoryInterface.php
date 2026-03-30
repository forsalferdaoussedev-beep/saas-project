<?php

namespace App\Interfaces\Repositories;

interface RepositoryInterface
{
    public function all(array $columns = ['*'], array $relations = []): \Illuminate\Database\Eloquent\Collection;
    
    public function findById(int $id, array $columns = ['*'], array $relations = [], array $appends = []): ?\Illuminate\Database\Eloquent\Model;
    public function create(array $data): \Illuminate\Database\Eloquent\Model;
    public function update(int $id, array $data): \Illuminate\Database\Eloquent\Model;
    public function delete(int $id): bool;
    public function findByField(string $field, mixed $value): \Illuminate\Database\Eloquent\Collection;
}