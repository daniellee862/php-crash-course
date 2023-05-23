<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$directory = '/opt/lampp/htdocs/php-crash/extras';
$filename = 'users.txt';
$file = $directory . '/' . $filename;

// Create the directory if it doesn't exist
if (!is_dir($directory)) {
    mkdir($directory, 0777, true);
}

// if(file_exists($file)) {
//   // Returns the content and number of bytes read from the file on success, or FALSE on failure.
//   echo readfile('extras/users.txt');
// }

// File Open, Read, Write, Close
if (file_exists($file)) {
  // fopen() gives you more control over the file.
  // Modes: r, w, a, x, r+, w+, a+, x+ See below for details
  $handle = fopen($file, 'r');

/* 
  The fopen() function in PHP returns a file handle, which is a resource that represents an open file. The file handle is used to perform various operations on the file, such as reading, writing, or closing the file.

  When you call fopen() with a file path and mode, it attempts to open the file and returns a file handle if successful. The file handle is a special data type in PHP that represents a reference to the opened file. It is not a simple value like a string or integer but a resource type. */


  // fread() reads the file and returns the content as a string on success, or FALSE on failure.
  $contents = fread($handle, filesize($file));
  // fclose() closes the file resource on success, or FALSE on failure.
  fclose($handle);
  echo $contents;
} else {
  // Create the file
  $handle = fopen($file, 'w');
  // PHP_EOL is a constant that represents the end of line character.
  $contents = 'Brad' .  PHP_EOL . 'Sara' .  PHP_EOL . 'Mike' .  PHP_EOL . 'John';
  // fwrite() writes the contents to the file and returns the number of bytes written on success, or FALSE on failure.
  fwrite($handle, $contents);
  fclose($handle);
}

/*
r	- Open a file for read only. File pointer starts at the beginning of the file
w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	- Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -	Open a file for read/write. File pointer starts at the beginning of the file
w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
*/




/* 

Use file_get_contents() and file_put_contents(): Instead of manually opening and closing the file using fopen(), fread(), fwrite(), and fclose(), you can use the file_get_contents() and file_put_contents() functions. They provide a more concise and convenient way to read and write file contents.

Here's an updated version that encapsulates the file operations into functions while using file_get_contents and file_put_contents:

function readFileContents($filePath) {
  if (file_exists($filePath)) {
    $contents = file_get_contents($filePath);
    if ($contents !== false) {
      return $contents;
    } else {
      throw new Exception("Failed to read the file.");
    }
  } else {
    throw new Exception("File does not exist.");
  }
}

function writeFileContents($filePath, $contents) {
  if (file_put_contents($filePath, $contents, LOCK_EX) !== false) {
    return true;
  } else {
    throw new Exception("Failed to create or write to the file.");
  }
}

$file = 'path/to/file.txt';

try {
  $contents = readFileContents($file);
  echo $contents;
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}

try {
  $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike' . PHP_EOL . 'John';
  if (writeFileContents($file, $contents)) {
    echo "File created and written successfully.";
  }
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}


In the above example, if an exception is thrown within the try block, it will be caught by the catch block. The getMessage() method is then called on the exception object ($e) to retrieve the error message, which is assigned to the $errorMessage variable. Finally, the error message is displayed to the user using echo


In PHP, errors and exceptions are both mechanisms to handle and report runtime issues, but they differ in their nature and how they are handled:

Errors: Errors represent issues that occur during the execution of a script, indicating a problem that prevents the script from continuing. Errors can be categorized into different types such as parse errors, fatal errors, warnings, and notices. Errors typically indicate programming mistakes, such as syntax errors, undefined variables, or accessing undefined functions. By default, some types of errors may be displayed directly to the user, while others are logged or suppressed based on the PHP error reporting settings.

Exceptions: Exceptions are a more advanced error handling mechanism introduced in PHP 5. Exceptions allow for a structured way of dealing with errors and exceptional situations within a program. Exceptions are objects that can be thrown and caught using the try-catch block. Exceptions provide a way to gracefully handle and recover from errors, enabling more robust error handling and allowing for better separation of error-handling logic from the main code flow. Exceptions can be customized by creating custom exception classes that extend the built-in Exception class.

In summary, errors are lower-level issues that indicate problems during script execution, while exceptions provide a higher-level and more flexible error handling mechanism that allows for better control and recovery from errors. Exceptions offer the ability to catch and handle specific types of errors, log detailed error information, and gracefully handle exceptional situations in a more controlled manner.
   */