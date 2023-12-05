<?php
  // Simple Array
  $numbers = [1,2,3,45];
  $fruits = array('apple', 'orange');

  // print_r($numbers); // prints array;
  // var_dump($numbers); // prints index, length, value, data type;

  // echo $fruits[0]; // logs "apple";

  // Associate Array - looks like object. used for tabular data.
  $colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
  ];

  // echo $colors[4]; // logs "blue"; 

  $person = [
    'first_name' => 'Luke',
    'last_name' => 'Nam',
    'email' => 'luke.tb.nam@outlook.com'
  ];

  // echo $person['first_name']; // logs "Luke"

  // Multidimensional Array

  $people = [
    [
      'first_name' => 'Luke',
      'last_name' => 'Nam',
      'email' => 'luke.tb.nam@outlook.com'
    ],
    [
      'first_name' => 'Derek',
      'last_name' => 'Glassick',
      'email' => 'derek.b.glassick@outlook.com'
    ],
    [
      'first_name' => 'Eunsub',
      'last_name' => 'Cho',
      'email' => 'caleb.es.cho@outlook.com'
    ],
  ];

  // echo $people[2]['email'];

// json_encode: When working with API in PHP, we want to return JSON.
// You can also use json_decode to do vice versa.
var_dump(json_encode($people)); // returns array of json values.
