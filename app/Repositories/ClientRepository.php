<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use App\Models\Client;

class ClientRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = new Client();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $client = $this->model->findOrFail($id);
        $client->update($data);

        return $client;
    }

    public function delete($id)
    {
        $client = $this->model->findOrFail($id);
        $client->delete();

        return $client;
    }
}
