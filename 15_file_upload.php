<?php
  /* ----------- File upload ---------- */

 $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

 if(isset($_POST['submit'])) {
   // Check if file was uploaded
   if(!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = "uploads/{$file_name}";

/*     
The structure of $_FILES['upload'] typically includes the following elements:

name: The original name of the uploaded file.
type: The MIME type of the file.
tmp_name: The temporary filename that was assigned to the uploaded file on the server.
error: An integer representing any error that occurred during the file upload process. A value of UPLOAD_ERR_OK (0) means no error occurred.
size: The size of the uploaded file in bytes.

Here is an example of how $_FILES['upload'] may look after a file upload:
Array
(
    [name] => example.jpg
    [type] => image/jpeg
    [tmp_name] => /tmp/phpabc123
    [error] => 0
    [size] => 123456
)

 */

    // Get file extension
    $file_ext = explode('.', $file_name);
   /* 
    explode() function is used to split a string into an array of substrings based on a specified delimiter. It takes two parameters: the delimiter and the input string. 
    */
    $file_ext = strtolower(end($file_ext));
    // echo $file_ext;

    // Validate file type/extension
    if(in_array($file_ext, $allowed_ext)) {
      // Validate file size
      if($file_size <= 1000000) { // 1000000 bytes = 1MB
        // Upload file
        move_uploaded_file($file_tmp, $target_dir);

 /*        
 The move_uploaded_file() function in PHP is used to move an uploaded file to a new location on the server's file system. It is specifically designed for handling file uploads and provides security checks to ensure that only valid uploaded files are moved.

The reason move_uploaded_file() doesn't directly upload the file to the desired directory like in JavaScript is due to security considerations. When handling file uploads, it's important to validate and verify the uploaded file before storing it on the server. The move_uploaded_file() function performs several checks to ensure the integrity and safety of the uploaded file:

It checks that the file was indeed uploaded via HTTP POST. This helps prevent malicious users from attempting to trick the server into moving arbitrary files.

It checks that the file was uploaded successfully and is available in the server's temporary directory. This ensures that the file exists and can be safely moved.

It verifies that the destination directory is writable by the PHP process. This prevents unauthorized writes to directories and adds an extra layer of security.

By using move_uploaded_file(), you explicitly move the uploaded file to the desired location after these security checks, ensuring that only valid files are stored in the target directory. This helps mitigate potential security risks associated with file uploads.

It's worth noting that the process of handling file uploads and storing them securely may involve additional steps and considerations, such as validating file types, sanitizing filenames, and setting appropriate file permissions.
 */

        // Success message
        echo '<p style="color: green;">File uploaded!</p>';
      } else {
        echo '<p style="color: red;">File too large!</p>';
      }
    } else {
      $message = '<p style="color: red;">Invalid file type!</p>';
    }
   } else {
     $message = '<p style="color: red;">Please choose a file</p>';
   }
 }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
  </head>
  <body>
    <?php echo $message ?? null; ?>
  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="post" enctype="multipart/form-data">
    Select image to upload:
  <input type="file" name="upload">
  <input type="submit" value="Submit" name="submit">
</form>
  </body>
  </html>


<!-- 
  The enctype attribute is used in HTML forms to specify how the form data should be encoded and submitted to the server. It stands for "encoding type." The enctype attribute is typically used in conjunction with the method attribute, which specifies the HTTP method to be used for form submission (e.g., GET or POST).

  There are different values that can be assigned to the enctype attribute, depending on how you want the form data to be encoded:

  enctype="application/x-www-form-urlencoded" (default): This is the default encoding type. It URL-encodes the form data and appends it to the form's URL query string when using the GET method. When using the POST method, it URL-encodes the form data and includes it in the request body.

  enctype="multipart/form-data": This encoding type is used when you want to submit binary or file data through the form. It is typically used when uploading files. With this encoding, the form data is encoded as multipart/form-data and sent as a series of parts, which allows for including binary data.

  enctype="text/plain": This encoding type is rarely used and generally not recommended. It sends the form data as plain text without any encoding. It is less commonly used because it does not handle special characters or binary data as efficiently as the other encoding types.

  When dealing with file uploads, you should use enctype="multipart/form-data" to ensure that the file data is properly encoded and transmitted to the server. For regular form submissions without file uploads, the default enctype="application/x-www-form-urlencoded" is usually sufficient.

  Note that the server-side script handling the form submission needs to be aware of the chosen enctype to process the form data correctly. -->