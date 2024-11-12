<?php

namespace App\Repositories;

use App\Models\User;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new User());
    }

    public function findByEmail(string $email)
    {
        return $this->model::where('email', $email)->first();
    }

    public function store(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return parent::store($data);
    }
}
