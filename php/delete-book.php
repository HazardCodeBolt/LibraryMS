<?php
    include('dbconnect.php');
    $bookid = $_GET['bookid'];

    $query = "delete from book where bookid='$bookid'";

    $result = mysqli_query($conn, $query);

    header('location:./index.php');

?>