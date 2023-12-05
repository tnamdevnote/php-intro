<?php
  // For Loop

  /**
   * For Loop Syntax
   * for (initialize; condition; increment) {
   *  // code to executed
   * }
   */

   
  //  for($x = 0; $x <= 10; $x++) {
  //   echo 'Number ' . $x . '<br>';
  //  }

  // While Loop
  /**
   * While Loop Syntax
   * 
   */

  //  $x = 1;

  //  while($x <= 15) {
  //   echo 'Number ' . $x . '<br>';
  //   $x++;
  //  }

  // Do While Loop
  
  /**
   * do {
   * // code to be executed. 
   * // This code will always be executed even if condition is not met.
   * } while (condition);
   */

  //  $x = 1;

  //  do {
  //   echo 'Number ' . $x . '<br>';
  //   $x++;
  //  } while ($x <= 5);  // logs 1 through 5

  // $x = 6;

  // do {
  // echo 'Number ' . $x . '<br>';
  // $x++;
  // } while ($x <= 5); // logs 6

  // forEach - specific for array

  /**
   * Foreach Loop Syntax
   * foreach ($array as $value) {
   *  // code
   * }
   */

   $posts = ['First', 'Second', 'Third'];

  //  for ($x = 0; $x < count($posts);$x++) {
  //     echo $posts[$x];
  //  }

  foreach($posts as $post) {
    echo $post;
  }

  foreach($posts as $index => $post) {
     echo $index + 1 . " - $post . <br>"; // difference between "" and '' in PHP?
   }

   $person = [
    'first_name' => 'Luke',
    'last_name' => 'Nam',
    'email' => 'luke.tb.nam@outlook.com'
  ];

  foreach($person as $key => $value) {
    echo "$key - $value<br>";
  };