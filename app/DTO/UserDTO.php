<?php

namespace App\DTO;

class UserDTO
{

    /**
     * Undocumented variable
     *
     * @var string
     */
    public string $name;

    /**
     * Undocumented variable
     *
     * @var string
     */
    public string $email;

    /**
     *
     *
     * @var string
     */
    public string $password;


    public function __construct()
    {
    }

    /**
     * Undocumented function
     *
     * @param string $value
     * @return void
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
