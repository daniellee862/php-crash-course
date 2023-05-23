<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if (isset($_POST['submit'])) {
  // $name = $_POST['name'];
  // $email = $_POST['email'];


// HTMLSPECIALCHARS  

  // htmlspecialchars() - Convert special characters to HTML entities
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);

/*  htmlspecialchars() is a PHP function used to convert special characters to  their corresponding HTML entities. It is primarily used to prevent cross-site scripting (XSS) attacks and ensure that user-supplied data is safely displayed in HTML.

   The htmlspecialchars() function takes a string as input and returns the string with special characters encoded. It replaces characters such as <, >, ", ', and & with their corresponding HTML entities 

   Here's an example usage of htmlspecialchars():

   $name = '<script>alert("XSS attack");</script>';
   $encodedName = htmlspecialchars($name);
   echo $encodedName;

   In this example, the variable $name contains a string that potentially includes malicious JavaScript code. By passing $name to htmlspecialchars(), the special characters in the string are converted to their HTML entities. The output will be:

   &lt;script&gt;alert("XSS attack");&lt;/script&gt;

   */


// FILTERVAR


  // filter_var() - Sanitize data
   $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

 /*  The filter_var() function takes two parameters:

     1.$variable: Specifies the variable or value you want to filter and validate.

     2.$filter: Specifies the filter to apply to the value. As with filter_input(), there are various predefined filters available, such as FILTER_SANITIZE_STRING, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_NUMBER_INT, and many more.

     The filter_var() function returns the filtered value if it passes the validation, or false if the value fails validation or the filter is not valid */



// FILTERINPUT     

  // filter_input() - Sanitize inputs
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 
//   If this was a get form we would use INPUT_GET, examples;

/*  1. $type: Specifies the type of input to be filtered. It can be one of the      following values:

    INPUT_GET: Retrieves input data sent via the HTTP GET method.
    INPUT_POST: Retrieves input data sent via the HTTP POST method.
    INPUT_COOKIE: Retrieves input data sent via HTTP cookies.
    INPUT_SERVER: Retrieves server-related input data.
    INPUT_ENV: Retrieves environment-related input data.

   2. $variable_name: Specifies the name of the variable you want to retrieve and filter.
    
   3. $filter: Specifies the filter to apply to the input data. There are various predefined filters available, such as FILTER_SANITIZE_STRING, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_NUMBER_INT, and many more. You can refer to the PHP documentation for a complete list of available filters.
    
    The filter_input() function returns the filtered input data if it passes the validation, or false if the input fails validation or does not exist. */


//   FILTERS;  
  // FILTER_SANITIZE_STRING - Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/
  // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
  // FILTER_SANITIZE_URL - Convert string to a valid URL
  // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
  // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters


  echo "<h3>$name</h3>";
  echo "<h3>$email</h3>";
} ?>




<!-- Pass data through a form -->
<!-- php_self can be used for xss -->
<form action="<?php echo htmlspecialchars(
  $_SERVER['PHP_SELF']
); ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Email: </label>
  <input type="email" name="email">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>