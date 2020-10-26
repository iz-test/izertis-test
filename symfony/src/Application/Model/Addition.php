<?php

namespace App\Application\Model;

class Addition extends Operation
{
    protected $firstValue;

    protected $secondValue;

    public function __construct($firstValue,$secondValue)
    {
        $this->firstValue = $firstValue;
        $this->secondValue = $secondValue;
    }

    public function calculate()
    {
        return floatval($this->firstValue) + floatval($this->secondValue);
    }
}