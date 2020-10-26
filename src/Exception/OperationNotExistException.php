<?php

namespace App\Exception;

class OperationNotExistException extends \Exception
{
    public function __construct(string $word)
    {
        parent::__construct(sprintf("There is no service for the operation: %", $word));
    }
}