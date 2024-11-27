<?php

namespace App\Repositories;

use App\Models\Loan;
use App\Interfaces\LoanRepositoryInterface;

class LoanRepository extends BaseRepository implements LoanRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new Loan());
    }

    public function findWithRelation(int $id, array $relationships = [])
    {
        return $this->model::with($relationships)->findOrFail($id);
    }
}
