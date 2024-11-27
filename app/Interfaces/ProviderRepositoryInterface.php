<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ProviderRepositoryInterface
{
    /**
     * Retrieve all Providers.
     *
     * @return Collection
     */
    public function all();

    /**
     * Find a provider by its ID.
     *
     * @param int $id
     * @return Provider|null
     */
    public function find(int $id);

    /**
     * Store a new provider in the database.
     *
     * @param array $data
     * @return Provider
     */
    public function store(array $data);

    /**
     * Update an existing provider by its ID.
     *
     * @param int $id
     * @param array $data
     * @return Provider|null
     */
    public function update(int $id, array $data);

    /**
     * Delete a provider by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id);

    /**
     * Search for providers by a partial nickname.
     *
     * This method performs a case-insensitive search for providers whose nickname
     * contains the provided string (using the SQL LIKE operator). The nickname can
     * be a partial value, such as "zE", and will return all providers whose nickname
     * matches any part of the input string.
     *
     * @param string $nickname The partial nickname to search for.
     * @return \Illuminate\Database\Eloquent\Collection|Provider[] A collection of providers matching the search criteria.
     */
    public function searchByNickname(string $nickname);


    /**
     * Find a provider by its id and loads yout relationships
     *
     * @param integer $id
     * @param array $relationships
     * @return void
     */
    public function findWithRelation(int $id, array $relationships = []);
}
