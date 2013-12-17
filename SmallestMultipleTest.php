<?php

require_once('SmallestMultiple.php');

class SmallestMultipleTest extends PHPUnit_Framework_TestCase
{
  private $example = null;
  
  public function setUp(){}
  
  public function tearDown()
  {
      unset($this->example);
  }

  public function testShouldReturnTwoAsSmallestMultipleOfOneAndTwo()
  {
      $this->example = new SmallestMultiple(2);
      $this->assertEquals(2, $this->example->findSmallestMultiple());
  }
  
  public function testShouldReturn2520AsSmallestMultipleOfAllNumberOneToTen()
  {
      $this->example = new SmallestMultiple(10);
      $this->assertEquals(2520, $this->example->findSmallestMultiple());
  }
  
}
?>