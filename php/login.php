<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Library MS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://kit.fontawesome.com/1d03971c39.js" crossorigin="anonymous"></script>
</head>

<body>
  <button class="back-button" onclick="window.history.back()">
    <i class="fas fa-arrow-left back-icon"></i>
  </button>
  <div class="container">

    <div class="title">Login</div>
    <div class="content">
      <form action="#" id="login-form" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input name='username' align="center" type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input name='password' align="center" type="password" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="login" name='login'>
          <input type="reset" value="reset">
        </div>
      </form>
    </div>
  </div>
</body>

</html>


<?php
session_start();
include('dbconnect.php');
if (isset($_POST['login'])) {

  $name = $_POST['username'];
  $pass = $_POST['password'];

  $query = "select userid, isadmin from user where username='$name' and  password='$pass'";
  $result = mysqli_query($conn, $query);

  $affected_rows = mysqli_num_rows($result);
  if ($affected_rows == 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION['userid'] = $row['userid'];
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $pass;
    $_SESSION['access'] = true;
    $_SESSION['isadmin'] = $row['isadmin'];
    
    header('location:../php/index.php');
  } else {
    echo "<p class='resp'> There is no such user </p>" . mysqli_error($conn);
  }
}
mysqli_close($conn);

?>