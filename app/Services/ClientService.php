<?php

namespace App\Services;

use App\Models\Client;

class ClientService
{
    protected $model;

    public function __construct()
    {
        $this->model = new Client();
    }

    public function findById(string $id)
    {
        return $this->model->findOrFail($id);
    }

    public function index()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function show(string $id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(array $data, string $id)
    {
        $client = $this->model->findOrFail($id);
        $client->update($data);

        return $client;
    }

    public function destroy(string $id)
    {
        $client = $this->model->findOrFail($id);
        $client->delete();

        return $client;
    }
}
