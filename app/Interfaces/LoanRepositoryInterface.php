<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface LoanRepositoryInterface
{
    /**
     * Retrieve all Loans.
     *
     * @return Collection
     */
    public function all();

    /**
     * Find a loan by its ID.
     *
     * @param int $id
     * @return Loan|null
     */
    public function find(int $id);

    /**
     * Store a new loan in the database.
     *
     * @param array $data
     * @return Loan
     */
    public function store(array $data);

    /**
     * Update an existing loan by its ID.
     *
     * @param int $id
     * @param array $data
     * @return Loan|null
     */
    public function update(int $id, array $data);

    /**
     * Delete a loan by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id);

    /**
     * Find a loan by its id and loads yout relationships
     *
     * @param integer $id
     * @param array $relationships
     * @return void
     */
    public function findWithRelation(int $id, array $relationships = []);
}
