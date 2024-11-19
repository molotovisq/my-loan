<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;

class UserService
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        return $this->userRepository->all();
    }

    public function findById(int $id)
    {
        return $this->userRepository->find($id);
    }
}
