<?php
  $age = 30;

  // if($age >= 30) {
  //   echo 'You are old enough to vote';
  // } else {
  //   echo 'Sorry, you are not old enough';
  // };

  $t = date("H"); // current hour

  // if($t < 2) {
  //   echo 'Good Morning';
  // } elseif($t < 5) {
  //   echo 'Good Afternoon';
  // } else {
  //   echo 'Good Evening';
  // }

  // Example: What if we want to check if some value exists in an array?

  $post = ['First post'];
  // if (!empty($post)) {
  //   echo $post[0];
  // } else {
  //   echo 'No Posts';
  // }
  
  // ternary
  // echo !empty($post) ? $post[0] : 'No Post';

  // ternary variable
  $firstPost = !empty($post) ? $post[0] : null;

  
  // coalescing operator
  $firstPost = $post[0] ?? null;
  
  // echo $firstPost;

  // switch
  $favcolor = '';

  switch($favcolor) {
    case 'red':
      echo 'Your favorite color is red';
      break;
    case 'blue':
      echo 'Your favorite color is blue';
      break;
    default:
      echo 'Your favorite color doesn\'t exists';
  }

