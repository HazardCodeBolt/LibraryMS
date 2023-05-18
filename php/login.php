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
            border: #71b7e6  1px solid;
            margin: 30px;
        }
        .back-button:hover {
          background-color: #9b59b6;
          color : white;
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
  
    <div class="title">Login</div>
    <div class="content">
      <form action="#" id="login-form">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input align="center" type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input align="center" type="text" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="button">
          <input type="button" value="login">
          <input type="reset" value="reset">
        </div>
      </form>
    </div>
  </div>
</body>

</html>


<?php
  

?>


    
