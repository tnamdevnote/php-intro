<?php
  /**
   * Function Syntax
   * 
   * function registeruser() {
   *  // code
   * }
   */
  
  //  function registerUser() {
  //   echo 'User registerd';

  //  }

  //  registerUser(); // executes the function

  // Scope in Function

  // function registerUser() {
  //   $x = 10; // function scope variable
  //   echo 'User registerd';

  // }

  // echo $x; // global scope variable cannot access function scope
  // registerUser(); 

  // echo $y; // global scope variable cannot access function scope

  // function registerUser() {
  // global $y;
  // echo $y; // undefined. cannot access global variable without global keyword.
  // echo 'User registerd';

  // }

  // registerUser(); 

  // Function Parameter

  // function sum($n1, $n2) {
  //   return $n1 + $n2;
  // }

  // $number = sum(5,5);
  // echo $number;

  // Function default parameter
  function sum($n1 = 0, $n2 = 0) {
    return $n1 + $n2;
  }

  $number = sum();
  echo $number; // logs 0;

  // Anonymous function
  $subtract = function($n1, $n2) {
    return $n1 - $n2;
  };

  echo $subtract(10, 5);

  // Arrow function
  $multiply = fn($n1, $n2) => $n1 * $n2;

  echo $multiply(3,3);
