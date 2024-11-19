<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\DTO\UserDTO;

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

    public function store(UserDTO $userDTO)
    {

        dd($userDTO);
        return $this->userRepository->store([]);
    }
}
