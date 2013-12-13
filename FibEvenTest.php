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
  
  public function testFibShouldReturnOneGivenOne()
  {
    $this->example=new FibEven(1);
    $this->assertEquals(1, $this->example->fib());
  }
  
}

?>