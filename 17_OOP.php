<?php
/** OOP in PHP */

class User {
  // Properties are attributes that belong to a class

  public $name;
  public $email;
  public $password;

  // A constructor is a method that runs when an object is created
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Method is a function that belongs to a class
  // setter
  function set_name($name) {
    $this->name = $name; // equivalent to this.name = name.
  }
  // getter
  function get_name() {
    return $this->name;
  }
}

// Instantiate a user object
$user1 = new User('Luke', 'luke.tb.nam@outlook.com', 'secret');

// $user1->set_name('Luke');

// echo $user1->name;
// echo $user1->email;


// Inheritance 
class Employee extends User {
  public $title;

  public function __construct($name, $email, $password, $title)
  {
    // instead of this->name = $name, we can use parent::
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title() {
    return $this->title;
  }
}

$employee1 = new Employee('Esther', 'simplyesther@gmail.com', '810', 'Student');

echo $employee1->name;