<?php
  /**
   * Sessions are a way to store information (in variables) to
   * be used across multiple pages.
   * Unlike cookies, sessions are stored on the server.
   */
  // Whenever we use session values, we have to have session started
  session_start();
   if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password']; // we don't want to sanitize password.


     if($username === 'Luke' && $password === 'secret' ) {
      $_SESSION['username'] = $username;
      header('Location: /php-intro/extras/dashboard.php');
     } else {
      echo 'Incorrect Login';
     }
  }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="username">Username: </label>
    <input type="text" name="username">
    <label for="password">Password: </label>
    <input type="password" name="password">
    <button type="submit" name="submit">Submit</button>
  </form>