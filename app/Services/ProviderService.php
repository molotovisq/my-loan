<?php

namespace App\Services;

use App\Interfaces\ProviderRepositoryInterface;
use App\Repositories\ProviderRepository;

class ProviderService
{

    protected $providerRepository;

    public function __construct(ProviderRepository $providerRepository)
    {
        $this->providerRepository = $providerRepository;
    }

    public function getAll()
    {
        return $this->providerRepository->all();
    }

    public function findById(int $id)
    {
        return $this->providerRepository->find($id);
    }

    public function findWithRelation(int $id)
    {
        return $this->providerRepository->findWithRelation($id, ['user']);
    }
}
