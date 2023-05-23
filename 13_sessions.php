<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.

  In PHP, a session is a mechanism for maintaining stateful information about a user across multiple requests. It allows you to store and retrieve data associated with a specific user during their browsing session on a website.

Here's how sessions work in PHP:

Session Initialization: To start a session, you need to call the session_start() function at the beginning of your PHP script or before any output is sent to the browser. This function initializes or resumes a session and enables you to access session-related functionality.

Session Data Storage: Once a session is started, you can store data in the $_SESSION superglobal array. This array behaves like a regular associative array, allowing you to set and retrieve values using keys. For example, you can assign a value to $_SESSION['username'] to store the currently logged-in user's username.

Data Retrieval: In subsequent requests, you can retrieve the stored session data by accessing the $_SESSION array. For example, you can retrieve the username stored in the session with $_SESSION['username'].

Session Termination: When the user ends their session (by closing the browser or after a specified period of inactivity), the session data is typically destroyed automatically. However, you can explicitly end a session by calling the session_destroy() function. This function removes all session data and deletes the session cookie.

Sessions are typically managed on the server-side, and the session data is stored on the server. The client-side (user's browser) receives a unique identifier called the session ID, usually in the form of a cookie, which is used to associate subsequent requests with the corresponding session data on the server.

Sessions are commonly used for various purposes, including user authentication, storing user preferences, maintaining shopping cart information, and tracking user activity. They provide a way to maintain state between different page views or interactions within a website.

It's important to note that PHP session data is typically stored on the server's disk or in a memory-based storage system. The specific configuration and storage mechanism can be customized based on your PHP server setup and requirements.

*/


session_start(); // Must be called before accessing any session data

if (isset($_POST['submit'])) {
  $username = filter_input(
    INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );
  $password = filter_input(
    INPUT_POST,
    'password',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );

  if ($username == 'daniel' && $password == 'password') {
    // Set Session variable
    $_SESSION['username'] = $username;

    // Redirect user to another page

/*     Here are some common use cases of the header() function:

        1.Redirecting: You can use the header('Location: ...') syntax to redirect the user to a different URL. For example:
            header('Location: https://example.com');

        2.Setting Content Type: You can set the content type of the response using the "Content-Type" header. For example, to set the response as JSON:
            header('Content-Type: application/json');

        3.Caching Instructions: You can set caching-related headers to control browser caching behavior. For example:
            header('Cache-Control: no-store, no-cache, must-revalidate');
            header('Pragma: no-cache');

             */
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
}
?>

  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>