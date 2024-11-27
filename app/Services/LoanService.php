<?php

namespace App\Services;

use App\Interfaces\LoanRepositoryInterface;
use App\Repositories\LoanRepository;

class LoanService
{

    protected $loanRepository;

    public function __construct(LoanRepository $loanRepository)
    {
        $this->loanRepository = $loanRepository;
    }

    public function getAll()
    {
        return $this->loanRepository->all();
    }

    public function findById(int $id)
    {
        return $this->loanRepository->find($id);
    }

    public function findWithRelation(int $id)
    {
        return $this->loanRepository->findWithRelation($id, ['provider', 'client']);
    }
}
