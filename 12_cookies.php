<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.

// Set a cookie
setcookie('name', 'Daniel', time() + 86400 * 30); // 86400 = 1 day

/* setcookie() is a built-in PHP function used to set a cookie.
The first parameter is the name of the cookie, in this case, 'name'.
The second parameter is the value assigned to the cookie, which is 'Daniel' in this example.
The third parameter is the expiration time of the cookie, calculated using the time() function. The time() function returns the current Unix timestamp, which represents the number of seconds since January 1, 1970. In this code, time() + 86400 * 30 calculates the timestamp for 30 days in the future. 86400 represents the number of seconds in a day (24 hours * 60 minutes * 60 seconds).
When the expiration time is set to a future timestamp, the cookie will be stored on the client-side (in the user's browser) for the specified duration. After the expiration time passes, the cookie will no longer be valid and will be automatically removed by the browser.
By setting this cookie, whenever a user visits a page on the same domain, the 'name' cookie with the value 'Daniel' will be sent along with the HTTP request. This allows the server to access and utilize the information stored in the cookie, such as personalization or session tracking.

It's important to note that cookies are stored on the client-side and can be modified by the user, so sensitive information should not be stored directly in cookies without proper encryption or security measures. */

// echo time();

// Get a cookie
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Delete a cookie
setcookie('name', '', time() - 86400);