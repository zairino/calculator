<?php

namespace App\Controller;

use App\Exceptions\ValidationFailedException;
use App\Service\CalculatorService;
use App\Validator\ExpressionValidator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CalculatorController
 * @package App\Controller
 */
class CalculatorController extends AbstractController
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('calculator/index.html.twig');
    }

    /**
     * @param Request $request
     * @param ExpressionValidator $expressionValidator
     * @param CalculatorService $calculatorService
     * @return JsonResponse
     */
    public function calculateAction(
        Request $request,
        ExpressionValidator $expressionValidator,
        CalculatorService $calculatorService
    ) {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse('Wrong request', Response::HTTP_NOT_ACCEPTABLE);
        }

        try {
            $expressionValidator->validate($request->request->all());
        } catch (ValidationFailedException $e) {
            return new JsonResponse($e->getMessage(), $e->getCode());
        }

        $expression = $request->request->get('expression');
        $computedExpression = $calculatorService->evaluateExpression($expression);

        return new JsonResponse(['result' => $computedExpression], Response::HTTP_OK);
    }
}