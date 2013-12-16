<?php

require_once('FibEven.php');

class FibEvenTest extends PHPUnit_Framework_TestCase
{
  private $example = null;
  
  public function setUp(){}
  
  public function tearDown()
  {
      unset($this->example);
  }
  
  public function testFibShouldReturnZeroGivenOne()
  {
    $this->example=new FibEven(1);
    $this->assertEquals(0, $this->example->fib());
  }
  
  public function testFibShouldReturnOneGivenTwo()
  {
      $this->example=new FibEven(2);
      $this->assertEquals(1, $this->example->fib());
  }
  
  public function testFibShouldReturnOneGivenThree()
  {
      $this->example=new FibEven(3);
      $this->assertEquals(1, $this->example->fib());
  }
  
  public function testFibShouldReturnTwoGivenFour()
  {
      $this->example=new FibEven(4);
      $this->assertEquals(2, $this->example->fib());
  }
  
  public function testSummationShouldNotAddOddNumbers()
  {
      $this->example=new FibEven(2);
      $this->assertEquals(0, $this->example->summation());
  }
  
  public function testSummationShouldAddEvenNumbers()
  {
      $this->example=new FibEven(4);
      $this->assertEquals(2, $this->example->summation());
  }
  
  public function testSetUpperLimitFunction()
  {
      $this->example=new FibEven(4);
      $this->example->setUpperLimit(100);
      $this->assertEquals(100, $this->example->getUpperLimit());
  }
  
  public function testIfUpperLimitSetSummationGoesToLimitInsteadOfSetNumberOfTerms()
  {
      $this->example=new FibEven(4);
      $this->example->setUpperLimit(100);
      $this->assertEquals(44, $this->example->summation());
  }
  
}

?>