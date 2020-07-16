<?php
    include_once 'dbh.inc.php';

    mysqli_select_db($conn, "db name") or die("no db found");

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
    }

    //header("location: ../index.html");

?>
