<?php

$host = "x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbUsername = "mvz4f0xixjq2ktpm";
$dbPassword = "m6hnol7y0akpdcrc";
$port = "3306"
$dbName = "i3gf6kerqqkne16r";

  $conn = mysqli_connect($host, $dbUsername, $dbPassword, $port, $dbName);
  //$conn = new_msqli("localhost", "id14345990_designerfe", "Mo0?i^Hc4uU&nWc@", "id14345990_stage7");

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
