<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Library MS</title>
  <style>
    .back-button {
      color: #9b59b6;
      background-color: white;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: none;
      outline: none;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      border: #71b7e6 1px solid;
      margin: 30px;
    }

    .back-button:hover {
      background-color: #9b59b6;
      color: white;
      border: none;
    }

    .back-icon {
      font-size: 15px;
      font-weight: 900;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://kit.fontawesome.com/1d03971c39.js" crossorigin="anonymous"></script>
</head>

<body>
  <button class="back-button" onclick="window.history.back()">
    <i class="fas fa-arrow-left back-icon"></i>
  </button>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" id="signup-form" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input name='username' align="center" type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input name='password' align="center" type="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input name='email' align="center" type="email" placeholder="Enter your email" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Signup" name="signup">
          <input type="reset" value="Reset">
        </div>
      </form>
    </div>
  </div>

</body>

</html>

<?php
session_start();
include('dbconnect.php');
if (isset($_POST['signup'])) {

  $name = $_POST['username'];
  $pass = $_POST['password'];
  $mail = $_POST['email'];



  $query = "insert into user (isAdmin, username, password, email) values (0, '$name', '$pass', '$mail')";
  $result = mysqli_query($conn, $query);

  $affected_rows = mysqli_affected_rows($conn);
  if ($affected_rows == 1) {
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $pass;
    $_SESSION['email'] = $mail;
    $_SESSION['access'] = true;
    
    header('location:../php/index.php');
  } else {
    echo "<p class='resp'> There was something wrong </p>".mysqli_error($conn);
  }
}


?>