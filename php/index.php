<?php
//  session_start();
include('header.php');
include('dbconnect.php');

$query = "select bookid, title, auther, isbn, publisher, pubyear, imageurl from book";
$result = mysqli_query($conn, $query);

if (isset($_SESSION['access'])) {
echo "
    <div class='d-grid m-3 gap-2'>
      <button class='btn btn-primary' type='button' onclick='window.location=\"./add-book.php\"'>Add New Book</button>
    </div>
 ";
}
echo '<div class="container d-flex flex-wrap">';
while ($row = mysqli_fetch_array($result)) {

  $bookid    = $row['bookid'];
  $title     = $row['title'];
  $author    = $row['auther'];
  $isbn      = $row['isbn'];
  $publisher = $row['publisher'];
  $pdate     = $row['pubyear'];
  $picurl    = $row['imageurl'];

  echo "<div class='card m-3' style='width: 18rem'>
    <img
      src='$picurl'
      class='card-img-top'
      alt='$title'
    />
    <div class='card-body text-center'>
      <h5 class='card-title'>$title</h5>
    </div>
    <ul class='list-group list-group-flush'>
      <li class='list-group-item'>Author : $author </li>
      <li class='list-group-item'>Publish Date : $pdate</li>
      <li class='list-group-item'>Publisher : $publisher</li>
    </ul>
    ";
  if (isset($_SESSION['access'])) {

    echo "<div class='card-body'>
              <div class='d-grid gap-2 col-6 mx-auto'>
                <button class='btn btn-primary' type='button' onclick='window.location=\"../php/borrow.php?bookid=$bookid\"'>Borrow</button>
              </div>
            </div>";
  }

  echo "</div>";
}
echo "</div>";

mysqli_close($conn);
include('footer.php');
