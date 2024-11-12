<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    /**
     * Retrieve all users.
     *
     * @return Collection
     */
    public function all();

    /**
     * Find a user by its ID.
     *
     * @param int $id
     * @return User|null
     */
    public function find(int $id);

    /**
     * Store a new user in the database.
     *
     * @param array $data
     * @return User
     */
    public function store(array $data);

    /**
     * Update an existing user by its ID.
     *
     * @param int $id
     * @param array $data
     * @return User|null
     */
    public function update(int $id, array $data);

    /**
     * Delete a user by its ID.
     *
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id);

    /**
     * Find a user by its email address.
     *
     * @param string $email
     * @return User|null
     */
    public function findByEmail(string $email);
}
