<?php
    include_once 'dbh.inc.php';

    mysqli_select_db($conn, "db4free.net") or die("no db found");

    if(isset($_POST['submit'])){
      $email = $_POST['email'];

      $sql = "INSERT INTO diggit (email) VALUES('$email')";
      header("location: ../index.html");
      /*if(mysqli_query($conn, $query)){
        //echo "<h1>SUCCESS<h1>";
        header("location: success.html");
      } else {
        // echo "<h1>FAILED<h1>";
        header("location: failed.html");
      }
    }*/



?>
