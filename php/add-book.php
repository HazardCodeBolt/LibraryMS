<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://kit.fontawesome.com/1d03971c39.js" crossorigin="anonymous"></script>
  <title>Library MS</title>
</head>

<body>
  <button class="back-button" onclick="window.location = '../php/index.php'">
    <i class="fas fa-arrow-left back-icon"></i>
  </button>
  
  <?php
  session_start();
   if (isset($_SESSION['access'])) {

     echo '<div class="container">
       <div class="title">Add Book</div>
       <div class="content">
         <form action="" method="POST">
           <div class="user-details">
             <div class="input-box">
               <span class="details">Title</span>
               <input name="title" align="center" type="text" placeholder="Enter the title" required>
             </div>
             <div class="input-box">
               <span class="details">Author</span>
               <input name="author" align="center" type="text" placeholder="Enter the author" required>
             </div>
             <div class="input-box">
               <span class="details">Isbn</span>
               <input name="isbn" align="center" type="text" placeholder="Enter the isbn" required>
             </div>
             <div class="input-box">
               <span class="details">Publisher</span>
               <input name="publisher" align="center" type="text" placeholder="Enter the Publisher" required>
             </div>
             <div class="input-box">
               <label for="publish-date">Publish Date</label>
               <input name="pdate" align="center" type="date" id="publish-date" name="pdate">
             </div>
             <div class="input-box">
               <span class="details">Picture Url</span>
               <input name="picurl" align="center" type="url" placeholder="Enter the picture" required>
             </div>
   
             <div class="button">
               <input name="addbook" type="submit" value="Add book">
               <input type="reset" value="Reset">
             </div>
           </div>
         </form>
       </div>
     </div>';
   } else {
     echo "<p class='resp'> You should be logged in </p>";
   }
  ?>

</body>

</html>

<?php
include('dbconnect.php');
if (isset($_POST['addbook'])) {

  $title     = $_POST['title'];
  $author    = $_POST['author'];
  $isbn      = $_POST['isbn'];
  $publisher = $_POST['publisher'];
  $pdate     = $_POST['pdate'];
  $picurl    = $_POST['picurl'];
  



  $query = "insert into book 
  (title, auther, isbn, publisher, pubyear, imageurl) 
  values ('$title', '$author', '$isbn', '$publisher', '$pdate', '$picurl')";
  $result = mysqli_query($conn, $query);

  $affected_rows = mysqli_affected_rows($conn);
  if ($affected_rows == 1) {
    header('location:../php/add-book.php');
  } else {
    echo "<p class='resp'> There was something wrong </p>" . mysqli_error($conn);
  }
} 
mysqli_close($conn);

?>