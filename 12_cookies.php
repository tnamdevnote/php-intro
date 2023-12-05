<?php
  /**
   * Cookies are useful when you want to store temporary data about a user - not the private data!
   * Cookies are stored on the client side.
   */
  // Set cookie
  setcookie('name', 'Luke', time() + 86400);

  if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
  }

  // Unset
  setcookie('name', '', time() - 86400);