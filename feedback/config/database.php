<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'daniel');
define('DB_PASS', '12345');
define('DB_NAME', 'php_dev');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

//echo 'Connected successfully';


/* This PHP code establishes a connection to a MySQL database using the mysqli extension. Here's a breakdown of what the code does:

define('DB_HOST', 'localhost'); - This line defines a constant named DB_HOST with the value 'localhost'. It represents the hostname of the MySQL database server.

define('DB_USER', 'daniel'); - This line defines a constant named DB_USER with the value 'daniel'. It represents the username used to connect to the MySQL database.

define('DB_PASS', '12345'); - This line defines a constant named DB_PASS with the value '12345'. It represents the password used to connect to the MySQL database.

define('DB_NAME', 'php_dev'); - This line defines a constant named DB_NAME with the value 'php_dev'. It represents the name of the MySQL database.

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); - This line creates a new mysqli object named $conn to establish a database connection. It takes the values of the constants defined earlier (DB_HOST, DB_USER, DB_PASS, DB_NAME) as parameters.

if ($conn->connect_error) { die('Connection failed: ' . $conn->connect_error); } - This code block checks if the connection to the database was successful. If there is an error in the connection, it outputs an error message and terminates the script execution using the die() function.

//echo 'Connected successfully'; - This line is commented out, but if uncommented, it would output the message "Connected successfully" to indicate a successful database connection.

In summary, the code defines constants for the database host, username, password, and database name. It then establishes a connection to the MySQL database using these values and checks if the connection was successful. 


//MYSQLI
The mysqli extension is included in PHP by default, so you don't need to explicitly import or include any external libraries or files to use it. It is a built-in extension that provides an interface to interact with the MySQL database.

In most PHP installations, the mysqli extension is enabled by default. Therefore, you can directly use mysqli functions and create mysqli objects without any additional imports or includes.

If, for some reason, the mysqli extension is not available or enabled in your PHP installation, you may need to enable it in your PHP configuration or consult your hosting provider for assistance.



*/