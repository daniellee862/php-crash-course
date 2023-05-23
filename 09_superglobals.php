<?php
/* ---------- Superglobals ---------- */
//Built in variables that are always available in all scopes
/* Superglobals in PHP are predefined variables that are accessible from any scope within a PHP script. They are called "superglobals" because they are automatically available and can be accessed without the need for any special actions such as importing or declaring them explicitly.

PHP provides several superglobal variables that store information about the server, request, and environment. These superglobals are: */

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/

/* These superglobal variables can be accessed and used anywhere in the PHP script, allowing you to access request data, server information, and other relevant information without the need for additional steps or configuration.

For example, you can access the value of a GET parameter using $_GET['parameter_name'], retrieve the client's IP address from $_SERVER['REMOTE_ADDR'], or access the value of a session variable using $_SESSION['variable_name'].

It's important to note that superglobals should be used with caution, as they can be directly modified by user input and may require proper validation and sanitization to prevent security vulnerabilities, such as SQL injection or cross-site scripting (XSS) attacks. */

// var_dump($GLOBALS);
// var_dump($_GET);
// var_dump($_REQUEST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>