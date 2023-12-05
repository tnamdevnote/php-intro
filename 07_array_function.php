<?php
  $fruits = ['apple', 'orange', 'pear'];

  // Get length of array
  echo count($fruits);

  // Search array
  $search = in_array('apple', $fruits);
  var_dump($search);

  // Add to array
  $fruits[] = 'grape'; // method 1
  array_push($fruits, 'blueberry'); // method 2
  array_unshift($fruits, 'mango'); // method 3 add to beginning
  
  // Remove from array
  array_pop($fruits);
  array_shift($fruits);
  unset($fruits[2]); // remove element from the index. It does not update the index position.
  
  // Split into 2
  $chunked_array = array_chunk($fruits, 2);
  print_r($chunked_array);


  // Concatenating
  $arr1 = [1,2,3];
  $arr2 = [4,5,6];

  $arr3 = array_merge($arr1, $arr2);
  $arr4 = [...$arr1, ...$arr2]; 

  print_r($arr4);

  // Combine
  $a = ['green', 'red',' yellow'];
  $b = ['avocado', 'apple', 'banana'];

  $c = array_combine($a, $b); // use element from $a as key and element from $b as value
  
  $keys = array_keys($c); // only take the key from the array.
  print_r($keys);

  // Flipped
  $flipped = array_flip($c); // flip key and value
  print_r($flipped);

  // Range
  $numbers = range(1, 20); // return array from 1 to 20

  print_r($numbers);

  // Map - returns a new array
  $newNumbers = array_map(function($number) {
    return "Number $number";
  }, $numbers);

  $newNumbers = array_map(fn($number) => "Number $number", $numbers); // can be written in arrow function
  print_r($newNumbers);

  // Filter
  $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
  print_r($lessThan10);

  // Reduce
  $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
  var_dump($sum);