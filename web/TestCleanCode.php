<?php

class TestCleanCode
{



  public function printSumOf($firstNumber, $secondNumber)
  {
    print($firstNumber + $secondNumber);
  }
}

$test = new TestCleanCode();

$test->printSumOf(5, 10);