<?php

namespace App\Tests\Service;

use App\Service\CalculatorService;
use PHPUnit\Framework\TestCase;

/**
 * Class CalculatorServiceTest
 * @package App\Tests\Service
 */
class CalculatorServiceTest extends TestCase
{
    /**
     * @test
     */
    public function evaluateExpressionAdditionTest()
    {
        $testService = new CalculatorService();
        $testExpression = '3+6+9+19';

        $this->assertEquals(37, $testService->evaluateExpression($testExpression));
    }

    /**
     * @test
     */
    public function evaluateExpressionSubstractionTest()
    {
        $testService = new CalculatorService();
        $testExpression = '16-2-1-3-5';

        $this->assertEquals(5, $testService->evaluateExpression($testExpression));
    }

    /**
     * @test
     */
    public function evaluateExpressionMultiplicationTest()
    {
        $testService = new CalculatorService();
        $testExpression = '2*5*13';

        $this->assertEquals(130, $testService->evaluateExpression($testExpression));
    }

    /**
     * @test
     */
    public function evaluateExpressionDivisionTest()
    {
        $testService = new CalculatorService();
        $testExpression = '30/2/3';

        $this->assertEquals(5, $testService->evaluateExpression($testExpression));
    }

    /**
     * @test
     */
    public function evaluateExpressionMixedTest()
    {
        $testService = new CalculatorService();
        $testExpression = '16*2/1+3-5';

        $this->assertEquals(30, $testService->evaluateExpression($testExpression));
    }

    /**
     * @test
     */
    public function evaluateExpressionPriorityOpTest()
    {
        $testService = new CalculatorService();
        $testExpression = '58+12*3-8/2';

        $this->assertEquals(90, $testService->evaluateExpression($testExpression));
    }

    /**
     * @test
     */
    public function evaluateExpressionDecimalTest()
    {
        $testService = new CalculatorService();
        $testExpression = '58.9+12.2*3.1-8.4/2.1';

        $this->assertEquals(92.72, $testService->evaluateExpression($testExpression));
    }

    /**
     * @test
     */
    public function evaluateExpressionDivByZeroTest()
    {
        $testService = new CalculatorService();
        $testExpression = '12/0';

        $this->expectException(\Exception::class);
        $testService->evaluateExpression($testExpression);
    }
}
