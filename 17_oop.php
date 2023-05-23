<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    private $name;
    public $email;
    public $password;
  
    // The constructor is called whenever an object is created from the class.
    // We pass in properties to the constructor from the outside.
    public function __construct($name, $email, $password) {
      // We assign the properties passed in from the outside to the properties we created inside the class.
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
    }
  
    // Methods are functions that belong to a class.

    //SETTER
     function setName($name) {
       $this->name = $name;
     }
  
    //GETTER 
    function getName() {
      return $this->name;
    }
  
    function login() {
      return "User $this->name is logged in.";
    }
  
    // Destructor is called when an object is destroyed or the end of the script.
 /*    function __destruct() {
      echo "The user name is {$this->name}.";
    } */
  }



/*  
.The class "User" encapsulates data and functionality related to a user.

.It has three properties: $name, $email, and $password. $name is declared as private, meaning it can only be accessed from inside the class. $email and $password are declared as public, allowing access from anywhere.

.The constructor __construct is a special method that is automatically called when an object is created from the class. It takes three parameters ($name, $email, and $password) and assigns their values to the corresponding properties of the object.

.The class includes three additional methods:
-setName is a setter method that allows changing the value of the $name property.
-getName is a getter method that returns the value of the $name property.
-login is a method that returns a string indicating that the user with the current $name property is logged in.

.The __destruct method is a special method that is automatically called when an object is destroyed or at the end of the script. It outputs a message containing the user's name.

Overall, this class provides a blueprint for creating user objects, storing user information, allowing name modification, retrieving the name, logging in, and performing actions when the object is destroyed. 
*/


// Instantiate a new user
$user1 = new User('Daniel', 'dan@gmail.com', '123456');
//echo $user1->getName();
//echo $user1->login();

// Add a value to a property
// $user1->name = 'Dan';

//var_dump($user1);
// echo $user1->name;

/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class employee extends User {
    protected $title;

    public function __construct($name, $email, $password, $title) {

    parent::__construct($name, $email, $password);
    $this->title = $title;

  }


  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new employee('John','johndoe@gmail.com','123456','Manager');
echo $employee1->getTitle();