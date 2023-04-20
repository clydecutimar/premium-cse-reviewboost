<?php
session_start();
require_once('config.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: free.php");
        exit();
    } else {
        echo "<div class='error-message'>Invalid username or password</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="lrstyle.css">
    <script type="text/javascript" src="lrscripts.js"></script>
</head>
<body>
<h1>Civil Service Exam Reviewer</h1>
<div class="login-page">
    <div class="form">
        <form class="login-form" onsubmit="return validateLoginForm()" method="POST">
            <input type="text" name="username" placeholder="username" required/>
            <div class="password-container">
                <input type="password" name="password" placeholder="password" required id="password-input"/>
                <button type="button" id="toggle-password">Show</button>
            </div>
            <button type="submit">LOGIN</button>
            <p class="message">Not registered? <a href="register.php">Create an account</a></p>
        </form>
    </div>
</div>
<script>
  const passwordInput = document.getElementById('password-input');
  const togglePasswordButton = document.getElementById('toggle-password');

  togglePasswordButton.addEventListener('click', function () {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      togglePasswordButton.textContent = 'Hide';
    } else {
      passwordInput.type = 'password';
      togglePasswordButton.textContent = 'Show';
    }
  });
</script>
</body>
</html>