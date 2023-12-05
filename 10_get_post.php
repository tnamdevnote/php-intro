<?php
  // _GET & _POST Superglobals
  /**
   * Use case for:
   *  _GET - can be used to pass data via url and forms.
   *         When _GET is used in form, it exposes all the data submitted (which is not ideal)
   *         Best practice: _GET can be useful when you are only searching, but if you are passing the data, use _POST
   *  _POST - 
   */

  /**
   * We can pass data through urls and forms using the $_GET and $_POST superglobals.
   */
  print_r($_POST);
   if(isset($_POST['submit'])) {
     echo $_POST['name'];
     echo $_POST['age'];
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

  