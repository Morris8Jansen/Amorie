<?php
session_start();

// kijk of de gebruiker al ingelogd is als dat zo is stuur door naar process.php pagina
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: process.php');
    exit();
}

// kijken of het form is ingeleverd
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // pak username an password
    $username = $_POST['username'];
    $password = $_POST['password'];

  // kijk of de username en password kloppen
    if ($username === 'morris' && $password === 'kaasie') {
      // Set session variable to indicate successful login
      // zet sessie variable so dat het een succesvolle login is(als username en password correct zijn)
        $_SESSION['logged_in'] = true;

      // stuur door naar process.php
        header('Location: process.php');
        exit();
    } else {
        $error = "Invalid username or password. Please try again.";
    }
}
?>


<!-- inline styles nog veranderen in html -->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>

  <?php if (isset($error)) : ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>

  <form action="login.php" method="POST">
    <label for="username">LOGIN Username:</label>
    <input type="text" name="username" id="username" required>

    <label for="password">LOGIN Password:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Login</button>
  </form>
</body>
</html>
