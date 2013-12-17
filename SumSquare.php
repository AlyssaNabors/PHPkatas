<?php

class SumSquare
{
  private $limit = null;
  
  public function __construct($limit) 
  {
      $this->limit = $limit;
  }
   
  function sumOfSquares()
  {
      $sum = 0;
      
      for($x=1; $x <= $this->limit; $x++)
      {
          $square = $x * $x;
          $sum += $square;
      }
      
      return $sum;
  }
  
  function squareOfSums()
  {
      $sum = 0;
      
      for($x=1; $x <= $this->limit; $x++)
      {
          $sum += $x;
      }
      
      return $sum * $sum;
  }
  
  
 
}
 
?>