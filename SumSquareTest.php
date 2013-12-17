<?php

require_once('SumSquare.php');

class SumSquareTest extends PHPUnit_Framework_TestCase
{
  private $example = null;
  
  public function setUp(){}
  
  public function tearDown()
  {
      unset($this->example);
  }

  public function testShouldSquareOneAndTwoThenAdd()
  {
      $this->example = new SumSquare(2);
      $this->assertEquals(5, $this->example->sumOfSquares());
  }
  
  public function testShouldSumOneAndTwoThenSquare()
  {
      $this->example = new SumSquare(2);
      $this->assertEquals(9, $this->example->squareOfSums());
  }
  
}
?>