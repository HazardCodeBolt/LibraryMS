<?php
    include('dbconnect.php');
    $loanid = $_GET['loanid'];
    $query = "delete from loan where loanID=$loanid";

    $result = mysqli_query($conn, $query);

    header("location:./loans.php");

    mysqli_close($conn);
?>