<?php

namespace App\Services;

use App\Interfaces\ClientRepositoryInterface;
use App\Repositories\ClientRepository;

class ClientService
{

    protected $clientRepository;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function getAll()
    {
        return $this->clientRepository->all();
    }

    public function findById(int $id)
    {
        return $this->clientRepository->find($id);
    }
}
