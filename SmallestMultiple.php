<?php

class SmallestMultiple
{
  private $biggestFactor = null;
  
  public function __construct($biggestFactor) 
  {
      $this->biggestFactor = $biggestFactor;
  }
   
  function findSmallestMultiple()
  {
      $smallest = 1;
      $isDivisibleByAll = true;
      
      for($x = 1; $x < 1000000000; $x++)
      {
          for($y = 1; $y <= $this->biggestFactor; $y++)
          {
              if($x%$y != 0)
              {
                  $isDivisibleByAll = false;
              }
          }
          
          if($isDivisibleByAll)
          {
              return $x;
          }
          
          $isDivisibleByAll = true;
      }
      
      return $smallest;
  }  
 
}
 
?>