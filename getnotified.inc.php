<?php
    include_once 'dbh.inc.php';

    $email = $_POST['email'];

    $sql = "INSERT INTO diggit (email) VALUES('$email')";
    mysqli_query($conn, $sql);

    header("location: index.html");



?>





    <!--/*mysqli_select_db($conn, "x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com") or die("no db found");

    if(isset($_POST['submit'])){
      $email = $_POST['email'];

      $sql = "INSERT INTO diggit (email) VALUES('$email')";
      header("location: ../index.html");

    }


    /*if(mysqli_query($conn, $query)){
      //echo "<h1>SUCCESS<h1>";
      header("location: success.html");
    } else {
      // echo "<h1>FAILED<h1>";
      header("location: failed.html");
    }
