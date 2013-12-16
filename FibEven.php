<?php

class FibEven
{
  private $current;
  
  public function __construct($current) 
  {
      $this->current = $current;
  }
   
  function fib()
  {
      $minusOne=new FibEven($this->current-1);
      $minusTwo=new FibEven($this->current-2);
      
      if($this->current == 1)
      {
          return 0;
      }
      else if($this->current == 2)
      {
          return 1;
      }
         
      return $minusOne->fib() + $minusTwo->fib();    
  }
  
  function summation()
  {
      $sum = 0;
      
      for($x=1; $x <= $this->current; $x++)
      {
          $currentFib=new FibEven($x);
          $currentResult = $currentFib->fib();
          
          if($currentResult%2 == 0)
          {
              $sum += $currentResult;
          }
      }
      
      return $sum;
  }
    
}

$example=new FibEven(7);
echo $example->fib();
echo " ";
echo $example->summation();

?>