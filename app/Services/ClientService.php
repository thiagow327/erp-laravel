<?php

namespace App\Services;

use App\Models\Client;
use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ClientService
{
    use AuthorizesRequests;
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
        $this->authorize('create', Client::class);

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
