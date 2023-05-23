<?php include 'inc/header.php'; ?>

<!-- $conn comes from header, where the db connecton is situated -->

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- This PHP code performs a database query to retrieve all rows from a table named "feedback" and fetches the result. Here's a breakdown of what the code does:

$sql = 'SELECT * FROM feedback'; - This line assigns a SQL query to the variable $sql. The query selects all columns (*) from the "feedback" table.

$result = mysqli_query($conn, $sql); - This line executes the SQL query using the mysqli_query() function. It takes two parameters: the database connection object ($conn) and the SQL query ($sql). The result of the query execution is stored in the variable $result.

$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC); - This line fetches all rows from the result set and stores them in the $feedback variable. The mysqli_fetch_all() function is used to retrieve all rows at once. It takes two parameters: the result set ($result) and the result type (MYSQLI_ASSOC), which specifies that the rows should be returned as an associative array where the column names are used as keys.

After executing this code, the variable $feedback will contain an array of rows retrieved from the "feedback" table. Each row will be represented as an associative array where the column names are the keys.

It's important to note that this code assumes the existence of a valid database connection object $conn, which should be established prior to executing the query.



//////////////////////////////////////////////////////////////////////


The mysqli_fetch_all() function is used to fetch all rows from a result set obtained from a database query. It returns an array containing all the rows fetched from the result set.

The reason we use mysqli_fetch_all() is to retrieve all the rows at once rather than fetching them one by one. This can be more efficient and convenient, especially when dealing with larger result sets.

The alternative to mysqli_fetch_all() is using a loop with mysqli_fetch_assoc() or similar functions to fetch rows one at a time until there are no more rows left. However, fetching rows individually in a loop can be slower and requires additional code to iterate over the result set.

By using mysqli_fetch_all(), you can fetch all rows in a single function call and get an array that represents the entire result set. This can be helpful when you need to work with the entire set of data at once, perform further processing or manipulation on the data, or pass it to another part of your application.

It's worth noting that mysqli_fetch_all() requires the mysqlnd driver to be installed and enabled in PHP. If you don't have the mysqlnd driver


/////////////////////////////////////////////////////////////////////////


A result set, in the context of database operations, refers to the collection of rows returned as a result of executing a database query. When you execute a SELECT query in a database, the database engine retrieves the matching rows from the table(s) and returns them as a result set.

The result set is structured as a table-like data structure, where each row represents a record and each column represents a field or attribute of that record. It consists of the data that satisfies the conditions specified in the query.

The result set typically includes the data requested in the SELECT statement, and it can be empty if no matching rows are found. The number of rows and columns in the result set depends on the query and the data in the database.

When working with PHP and MySQL, after executing a SELECT query using functions like mysqli_query(), the result set is returned as a resource object. This resource object can be further processed and manipulated to retrieve the individual rows and their data using functions like mysqli_fetch_assoc(), mysqli_fetch_array(), or mysqli_fetch_object().

In summary, a result set is the collection of rows returned by a database query, containing the requested data from the database table(s). It allows you to work with and retrieve the data that matches the criteria specified in the query.


//////////////////////////////////////////////////////////////////////////////////



In PHP, a resource object is a special data type that represents an external resource or reference to an external entity. It is used to handle and interact with resources outside the PHP script, such as database connections, file handles, network sockets, and more.

A resource object is typically created and returned by functions that establish a connection or open a handle to an external resource. Examples include database connection functions like mysqli_connect(), file handling functions like fopen(), and image manipulation functions like imagecreatefromjpeg().

The resource object acts as a handle or reference to the underlying external resource. It contains internal information that PHP uses to manage and manipulate the resource. The specific details and properties of a resource object depend on the type of resource it represents.

Resource objects are not typical PHP objects and do not follow the same rules as regular objects. They cannot be manipulated directly using object-oriented syntax or accessed using methods. Instead, they are typically used with specific functions that operate on the resource or provide functionality related to the resource.

When working with resource objects, it's important to use the appropriate functions and operations provided by the extension or library that created the resource. For example, when working with a database resource object, you would use functions like mysqli_query(), mysqli_fetch_assoc(), etc., to interact with the database.

It's worth noting that resource objects are automatically managed by PHP's garbage collector, so you generally don't need to explicitly free or release the resources. However, it's good practice to release resources explicitly when you're done with them, using functions like mysqli_close() for database connections or fclose() for file handles.

In summary, a resource object in PHP represents an external resource or reference to an external entity. It provides a handle or reference to the underlying resource, allowing interaction with the resource through specific functions provided by the corresponding extension or library.
 -->
   
  <h2>Past Feedback</h2>

  <?php if (empty($feedback)): ?>
    <p class="lead mt-3">There is no feedback</p>
  <?php endif; ?>

  <?php foreach ($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">By <?php echo $item[
         'name'
       ]; ?> on <?php echo date_format(
   date_create($item['date']),
   'g:ia \o\n l jS F Y'
 ); ?></div>
     </div>
   </div>
  <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>