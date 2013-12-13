<?php

require_once('ThreeAndFive.php');

class ThreeAndFiveTest extends PHPUnit_Framework_TestCase
{
  private $example = null;
  
  public function setUp(){}
  
  public function tearDown()
  {
      unset($this->example);
  }

  public function testShouldNotAddOneToSum()
  {
    $this->example=new ThreeAndFive(1);
    $this->assertEquals(0, $this->example->threeAndFive());
  }
  
  public function testShouldAddThreeToSum()
  {
    $this->example=new ThreeAndFive(4);
    $this->assertEquals(3, $this->example->threeAndFive());
  }
  
  public function testShouldAddFiveToSum()
  {
    $this->example=new ThreeAndFive(6);
    $this->assertEquals(8, $this->example->threeAndFive());
  }
  
  public function testShouldAddMultiplesOfThreeAndFiveToSum()
  {
    $this->example=new ThreeAndFive(11);
    $this->assertEquals(33, $this->example->threeAndFive());
  }
}
?>