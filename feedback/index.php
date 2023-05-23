<?php include 'inc/header.php'; ?>

<?php
// Set vars to empty values
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

// Form submit
if (isset($_POST['submit'])) {
  // Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_input(
      INPUT_POST,
      'name',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  }

  // Validate email
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  // Validate body
  if (empty($_POST['body'])) {
    $bodyErr = 'Body is required';
  } else {
    // $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_input(
      INPUT_POST,
      'body',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  }

  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
    // add to database
    $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
    if (mysqli_query($conn, $sql)) {
      // success
      header('Location: feedback.php');
    } else {
      // error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>
        
        <img
          src="/php-crash/feedback/img/logo.svg"
          class="w-25 mb-3 rounded-circle"
          style="object-fit: cover; aspect-ratio: 1/1"
          alt=""
        />
        <h2>Feedback</h2>
        <p class="lead text-center">Leave feedback for Dan Media</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              class="form-control
              <?php echo !$nameErr ?: 'is-invalid'; ?>
              "
              id="name"
              name="name"
              placeholder="Enter your name"
            />
            <div class="invalid-feedback">
              <?php echo $nameErr; ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control
              <?php echo !$emailErr ?: 'is-invalid'; ?>
              "
              id="email"
              name="email"
              placeholder="Enter your email"
            />
            <div class="invalid-feedback">
              <?php echo $emailErr; ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Feedback</label>
            <textarea
              class="form-control
              <?php echo !$bodyErr ?: 'is-invalid'; ?>
              "
              id="body"
              name="body"
              placeholder="Enter your feedback"
            ></textarea>
            <div class="invalid-feedback">
              <?php echo $bodyErr; ?>
            </div>
          </div>
          <div class="mb-3">
            <input
              type="submit"
              name="submit"
              value="Send"
              class="btn btn-dark w-100"
            />
          </div>
        </form>
        
<?php include 'inc/footer.php';?>
   