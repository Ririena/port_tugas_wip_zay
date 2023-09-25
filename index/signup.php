<?php
require 'fungsi.php';

if( isset($_POST["submit"]) ) {

    if( tambah($_POST) > 0 ) {
        echo "<script>
        alert('tulis kembali!');
        document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
        alert('kamu gagal melakukannya!');
        document.location.href = 'login.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV/WEBSITE DUIVION</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="wrapper">
    <form action="" method="post">
      <h2>signup</h2>
        <div class="input-field">
        <input type="text" name="email" id="email" required>
        <label for="email">Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" id="password" required>
              <label>Enter your password</label>
      </div>
      <div class="input-field">
        <input type="password" name="passwordr" id="passwordr" required>
        <label> Re Enter Your Password</label>
</div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" name="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>
  
</body>
</html>