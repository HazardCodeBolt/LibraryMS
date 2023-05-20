<?php
 session_start();
 include('header.php');
 include('dbconnect.php');

 if (isset($_SESSION['access'])) {
    $userid = $_SESSION['userid'];
    $query = "select * from loan where userid='$userid'"; 
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)){
       $bookid     = $row['bookid'];
       $userid     = $row['userid'];
       $loanid     = $row['loanid'];
       $returndate = $row['returndate'];
       $loandate   = $row['loandate'];
       
       echo "html code here";
     
    }
 } else {
    
 }

 mysqli_close($conn);
 include('footer.php');
