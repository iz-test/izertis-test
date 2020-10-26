<?php

namespace App\Application\Services;

use App\Application\Dto\OperationDto;
use App\Exception\OperationNotExistException;
use App\Application\Model\Addition;
use App\Application\Model\Division;
use App\Application\Model\Multiplication;
use App\Application\Model\Substraction;

class CalculatorService
{
    public function execute(OperationDto $operationDto)
    {
        switch ($operationDto->getOperator()) {
            case 'add':
                $operation = new Addition($operationDto->getFirstValue(), $operationDto->getSecondValue());
                break;
            case 'substract':
                $operation = new Substraction($operationDto->getFirstValue(), $operationDto->getSecondValue());
                break;
            case 'multiply':
                $operation = new Multiplication($operationDto->getFirstValue(), $operationDto->getSecondValue());
                break;
            case 'divide':
                $operation = new Division($operationDto->getFirstValue(), $operationDto->getSecondValue());
                break;
            default:
                throw new OperationNotExistException($operationDto->getOperator());
        }

        return $operation->calculate();
    }
}