<?php
session_start();
require_once('config.php');

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (name, username, email, password) VALUES ('$username', '$username', '$email', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['username'] = $username;
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="lrstyle.css">
    <script type="text/javascript" src="lrscripts.js"></script>
</head>
<body>
<h1>Civil Service Exam Reviewer</h1>
<div class="register-page">
    <div class="form">
        <form class="register-form" onsubmit="return validateRegisterForm()" method="POST">
            <input type="text" name="username" placeholder="username" required/>
            <div class="password-container">
                <input type="password" name="password" placeholder="password" required id="password-input"/>
                <button type="button" id="toggle-password">Show</button>
            </div>
            <input type="text" name="email" placeholder="email address" required/>
            <button type="submit">CREATE</button>
            <p class="message">Already registered? <a href="login.php">Login</a></p>
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
