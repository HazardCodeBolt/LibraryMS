<?php
include('header.php');
include('dbconnect.php');

if (isset($_SESSION['access'])) {
  $userid = $_SESSION['userid'];
  $query = "select bookid, userid, returndate, loandate, loanid from loan";
  $result = mysqli_query($conn, $query);

  echo "<div class='container m-3 d-flex flex-wrap'>";

  if(mysqli_num_rows($result)!= 0) {
    while ($row = mysqli_fetch_array($result)) {
      $bookid     = $row['bookid'];
      $userid     = $row['userid'];
      $loanid     = $row['loanid'];
      $returndate = $row['returndate'];
      $loandate   = $row['loandate'];
  
      $query2 = "select title from book where bookid='$bookid'";
      $result2 = mysqli_query($conn, $query2);
      $row2 = mysqli_fetch_array($result2);
  
      $title = $row2['title'];
  
      $currentDate = new DateTime();
      $specificDate = new DateTime($loandate);
      $interval = $currentDate->diff($specificDate);
      $diffDays = $interval->format('%a');
  
  
      echo "
           <div class='card m-3 text-center'>
             <div class='card-header'>Borrowing ID : #$loanid</div>
             <div class='card-body'>
               <h5 class='card-title'>$title</h5>
               <p class='card-text'>Return Date : $returndate</p>
               <p class='card-text'>User ID : $userid</p>
               <p>
                 <a class='btn btn-primary' href='./admin-return.php?loanid=$loanid'>Return Book</a>
               </p>
             </div>
             <div class='card-footer text-body-secondary'>$diffDays days ago</div>
             </div>";
    }
    echo "</div>";
  } else {
    echo "
    <div class='container d-flex align-items-center justify-content-center'>
        <h1> NO LOANS YET </h1>
    </div>"; 
  }
  
} 
mysqli_close($conn);
include('footer.php');
