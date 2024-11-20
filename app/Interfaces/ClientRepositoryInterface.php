<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ClientRepositoryInterface
{
    /**
     * Retrieve all Clients.
     *
     * @return Collection
     */
    public function all();

    /**
     * Find a client by its ID.
     *
     * @param int $id
     * @return Client|null
     */
    public function find(int $id);

    /**
     * Store a new client in the database.
     *
     * @param array $data
     * @return Client
     */
    public function store(array $data);

    /**
     * Update an existing client by its ID.
     *
     * @param int $id
     * @param array $data
     * @return Client|null
     */
    public function update(int $id, array $data);

    /**
     * Delete a client by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id);

    /**
     * Search for clients by a partial nickname.
     *
     * This method performs a case-insensitive search for clients whose nickname
     * contains the provided string (using the SQL LIKE operator). The nickname can
     * be a partial value, such as "zE", and will return all clients whose nickname
     * matches any part of the input string.
     *
     * @param string $nickname The partial nickname to search for.
     * @return \Illuminate\Database\Eloquent\Collection|Client[] A collection of clients matching the search criteria.
     */
    public function searchByNickname(string $nickname);
}
