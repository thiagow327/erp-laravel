<?php

namespace App\Services;

use App\Repositories\Contracts\RepositoryInterface;

class ClientService
{
    protected $repository;

    public function __construct(RepositoryInterface $repositoryInterface)
    {
        $this->repository = $repositoryInterface;
    }

    public function findById(string $id)
    {
        return $this->repository->find($id);
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function show(string $id)
    {
        return $this->repository->find($id);
    }

    public function update(array $data, string $id)
    {
        return $this->repository->update($id, $data);
    }

    public function destroy(string $id)
    {
        return $this->repository->delete($id);
    }
}
