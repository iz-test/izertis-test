<?php

namespace App\Controller;

use App\Application\Dto\OperationDto;
use App\Application\Services\CalculatorService;
use App\Exception\OperationNotExistException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OperationController extends AbstractController
{
    /**
     * @Route("/{operator}/{firstValue}/{secondValue}", name="calculate")
     * @param Request $request
     * @param CalculatorService $calculatorService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function calculate(Request $request, CalculatorService $calculatorService)
    {
        try {
            $operationDto = new OperationDto(
                $request->get('firstValue'),
                $request->get('secondValue'),
                $request->get('operator')
            );

            $result = $calculatorService->execute($operationDto);
        } catch (OperationNotExistException $e) {
            $result = $e->getMessage();
        }
        return $this->render('index.html.twig', array(
            'result' => $result
        ));
    }
}
