<?php

namespace App\Exceptions;

use Exception;

class EntityNotFoundException extends Exception
{
    protected $entityName;

    public function __construct($entityName)
    {
        $this->entityName = $entityName;
        parent::__construct("No query results for model [$entityName]");
    }

    public function getEntityName()
    {
        return $this->entityName;
    }
}
