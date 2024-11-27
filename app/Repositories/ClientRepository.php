<?php

namespace App\Repositories;

use App\Models\Client;
use App\Interfaces\ClientRepositoryInterface;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new Client());
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
