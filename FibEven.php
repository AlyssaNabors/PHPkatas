<?php

class FibEven
{
  private $current;
  private $upperLimit;
  private $isLimitSet;
  
  public function __construct($current) 
  {
      $this->current = $current;
      $this->isLimitSet = FALSE;
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
  
  function setUpperLimit($newLimit)
  {
      $this->upperLimit = $newLimit;
      $this->isLimitSet = TRUE;
  }
  
  function getUpperLimit()
  {
      return $this->upperLimit;
  }
  
    
  function sumToCurrentTerm()
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
  
  function sumToUpperLimit()
  {
      $sum = 0;
      $x = 1;
      $currentResult = 0;
      
      $currentFib=new FibEven($x);
      $currentResult = $currentFib->fib();
      
      while($currentResult < $this->upperLimit)
      {
          if($currentResult%2 == 0)
          {
              $sum += $currentResult;
          }
          
          $x++;
          
          $currentFib=new FibEven($x);
          $currentResult = $currentFib->fib();
          
      }
      
      return $sum;
  }
  
  function summation()
  {
      $sum = 0;
      if($this->isLimitSet)
      {
          $sum = $this->sumToUpperLimit();
      }
      else
      {
          $sum = $this->sumToCurrentTerm();
      }
      
      return $sum;   
  } 
}

?>