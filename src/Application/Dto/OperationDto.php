<?php

namespace App\Application\Dto;

class OperationDto
{
    protected float $firstValue;

    protected float $secondValue;

    protected string $operator;

    public function __construct(float $firstValue, float $secondValue, string $operator)
    {
        $this->firstValue = $firstValue;
        $this->secondValue = $secondValue;
        $this->operator = $operator;
    }

    /**
     * @return float
     */
    public function getFirstValue(): float
    {
        return $this->firstValue;
    }

    /**
     * @return float
     */
    public function getSecondValue(): float
    {
        return $this->secondValue;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @param float $firstValue
     * @return OperationDto
     */
    public function setFirstValue(float $firstValue): OperationDto
    {
        $this->firstValue = $firstValue;
        return $this;
    }

    /**
     * @param float $secondValue
     * @return OperationDto
     */
    public function setSecondValue(float $secondValue): OperationDto
    {
        $this->secondValue = $secondValue;
        return $this;
    }

    /**
     * @param string $operator
     * @return OperationDto
     */
    public function setOperator(string $operator): OperationDto
    {
        $this->operator = $operator;
        return $this;
    }
}