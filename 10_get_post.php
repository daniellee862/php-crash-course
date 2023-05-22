<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/


// URL
if (isset($_GET['name']) && isset($_GET['age']) ) {
    echo '<h3>' . $_GET['name'] . '</h3>';
    echo '<h3>' . $_GET['age'] . '</h3>';
  } 
/* 
This code retrieves the value of the "name" query parameter from the URL. In PHP, the $_GET superglobal variable is used to access query parameters passed through the URL. In this case, it retrieves the value of the "name" parameter and displays it using the echo statement.

It is also recommended to perform additional validation and sanitization on user input, such as checking for specific data types or using functions like filter_input() or htmlspecialchars() to sanitize the input and protect against security vulnerabilities.
*/




// FORM
 if (isset($_POST['submit'])) {
  echo '<h3>' . $_POST['name'] . '</h3>';
  echo '<h3>' . $_POST['password'] . '</h3>';
} 

/* If the submit variable in the GET superglobal array is set then we echo out html containing data from our form, that is sent as query params. */



?>

<!-- 
    Pass data through a link 
    Create dynamic URL
    Send query parameters (query string) to new URL
-->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?
name=Daniel&age=36">Link</a>

<!-- <?php echo $_SERVER['PHP_SELF']; ?> retrieves the current script's filename from the SERVER superglobal array. The $_SERVER['PHP_SELF'] variable contains the path and filename of the currently executing script. By echoing it within the PHP code, the current script's filename is dynamically inserted into the URL.

?name=Daniel is the query parameter appended to the URL. It adds the "name" parameter with the value "John" to the URL. -->




<br><br>



<!-- Pass data through a form -->

<!-- The action is the file we want to submit this form to. we want to submit to the same file so we can use the SERVER superglobal and use PHP_SELF


$_SERVER['PHP_SELF'] is a PHP superglobal variable that contains the filename of the currently executing script, relative to the document root. It is a part of the $_SERVER array, which holds various server and execution environment information.

Note that $_SERVER['PHP_SELF'] can be manipulated by malicious users, so it's important to properly sanitize and validate this value before using it in any output or as part of database queries to prevent security vulnerabilities like cross-site scripting (XSS) attacks or SQL injection.

-->

<!-- Form method is GET request by default but we can specify POST.
When the form is submitted, the data entered in the form fields (name and password) will be sent in the body of the HTTP request as part of the POST data.

If you change the form method to GET by specifying method="GET" in the <form> tag, the form data will be appended to the URL as query parameters when the form is submitted. The form values will be accessible via the $_GET superglobal variable in PHP. GET could by ok for a search input but its generally best to use post as it is more secure.
-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>