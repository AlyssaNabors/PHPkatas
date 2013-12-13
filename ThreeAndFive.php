<?php

class ThreeAndFive
{
  private $limit = null;
  
  public function __construct($limit) 
  {
      $this->limit = $limit;
  }
   
  public function threeAndFive()
  {
      $sum = 0;
      
      for($i = 1; $i < $this->limit; $i++)
      {
          if($i%3 == 0 || $i%5 == 0)
          {
              $sum = $i + $sum;
          }
      }
      return $sum;
  }
 
}

$example=new ThreeAndFive(1000);
echo $example->threeAndFive();

?>