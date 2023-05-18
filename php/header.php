<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library MS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      font-family: 'Maven Pro', sans-serif !important;
      font-weight: 600 !important;
      color: #2f4858 !important;
    }

    .btn-outline-primary {
      background-color: #eff8ff !important;
      border-color: #1098F7 !important;
      color: #1098F7 !important;
    }

    .btn-outline-primary:hover,
    .btn-outline-primary:active,
    .btn-outline-primary:visited {
      background-color: #1098F7 !important;
      color: white !important;
    }

    main {
      flex: 1;
    }

    footer {
      background-color: #292F36;
      padding: 10px;
      text-align: center;
      color: white;

    }

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-body-tertiary" style="background-color: #fff !important;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../images/books.png" alt="Logo" width="60" class="d-inline-block" style="margin-right: 20px;">
        <p style="display: inline; font-size: 25px;"> LibraryMS </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Loans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
        </ul>
      </div>
      
      <?php
      session_start();
      if (!isset($_SESSION['access'])) {
        echo '<div class="btn-group" role="group" style="padding-right: 20px;">
                <button type="button" class="btn btn-outline-primary" onclick="window.location = \'../php/login.php\'">Login</button> 
                <button type="button" class="btn btn-outline-primary" onclick="window.location = \'../php/signup.php\'">Signup</button>
              </div>'; 
      } else {
        echo '<div class="btn-group" role="group" style="padding-right: 20px;">
                <button type="button" class="btn btn-outline-primary" onclick="window.location = \'../php/logout.php\'">Logout</button> 
              </div>';
      }
      
      ?>
    </div>

  </nav>

  <main>