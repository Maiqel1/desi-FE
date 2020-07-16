<?php

$host = "85.10.205.173:3306";
$dbUsername = "designerfe";
$dbPassword = "12345678";
$dbName = "stage7";

  //$conn = mysqli_connect($ho, $dbUsername, $dbPassword, $dbName);*/
  $conn = new_msqli("85.10.205.173:3306", "designerfe", "12345678", "stage7");

  /*mysqli_select_db($conn, "db name") or die("no db found");

  if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $query = "INSERT INTO diggit (email) VALUES('$email')";h2
    if(mysqli_query($conn, $query)){
      //echo "<h1>SUCCESS<h1>";
      header("location: success.html");
    } else {
      // echo "<h1>FAILED<h1>";
      header("location: failed.html");
    }
  }*/
 ?>
