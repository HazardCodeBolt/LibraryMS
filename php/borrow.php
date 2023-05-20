<?php
    session_start();
    include('dbconnect.php');
    $bookid = $_GET['bookid'];
    $userid = $_SESSION['userid'];
    $datenow = date("Y-m-d");
    $returndate = date("Y-m-d", strtotime($datenow . "+15 days"));

    $selectquery = "select bookid from loan where bookid='$bookid'";
    $selectresult  = mysqli_query($conn, $selectquery);

    $rows_num = mysqli_num_rows($selectresult); 
    if ($rows_num == 0) {
        $query = "insert into loan (loanDate, returnDate, bookID, userID) values ('$datenow', '$returndate', '$bookid', '$userid')";
    
        $result = mysqli_query($conn, $query);
    
        $affected_rows = mysqli_affected_rows($conn);
    
        if($affected_rows == 1) {
            header('location:../php/loans.php');
        } else {
            header('location:../php/index.php');
        }
    } else {
        header('location:../php/index.php');
    }
    
    mysqli_close($conn);
?>