<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function store();
    public function update();
    public function destroy();
}
