<?php

namespace App\Repositories;

use App\Models\Provider;
use App\Interfaces\ProviderRepositoryInterface;

class ProviderRepository extends BaseRepository implements ProviderRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new Provider());
    }

    public function searchByNickname(string $nickname)
    {
        return $this->model::where('nickname', 'LIKE', '%' . $nickname . '%')->get();
    }

    public function findWithRelation(int $id, array $relationships = [])
    {
        return $this->model::with($relationships)->findOrFail($id);
    }
}
