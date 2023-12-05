<?php
  /**
   * 
   */
   if(isset($_POST['submit'])) {
    // method 1: sanitize for security. Make sure unintended scripts run
    //  $name = htmlspecialchars($_POST['name']);
    //  $age = htmlspecialchars($_POST['age']);

    // method 2: 
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // method 3: filter_var can be used for regular validation other than inputs!
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);

     echo $name;
     echo $age;
  }
  ?>
  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Luke&age=30">Click</a>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name">
    <label for="age">Age: </label>
    <input type="number" name="age" id="age">
    <button type="submit" name="submit">Submit</button>
  </form>

  