<?php
    include_once 'dbh.inc.php';

    /*$email = trim($_POST['email']);

    $email = stripslashes($email);

    $email = htmlspecialchars($email);*/

    /*$result = mysqli_num_rows(mysqli_query($conn, "SELECT 1 FROM diggit WHERE email = '$email';"));

    $email = $_POST['email'];

    $sql = "INSERT INTO diggit (email) VALUES (' $email');";
    mysqli_query($conn, $sql);*/

    mysqli_select_db($conn, "db name") or die("no db found");

    if(isset($_POST['submit'])){
      $email = $_POST['email'];

      $query = "INSERT INTO diggit (email) VALUES('$email')";
      mysqli_query($conn, $query);
      /*if(mysqli_query($conn, $query)){
        //echo "<h1>SUCCESS<h1>";
        header("location: success.html");
      } else {
        // echo "<h1>FAILED<h1>";
        header("location: failed.html");
      }
    }*/



    header("location: ../index.html");

?>



<!-- include_once 'dbh.inc.php';

  $email = $_POST['email'];

  $sql = "INSERT INTO diggit (email) VALUES (' $email');";
  mysqli_query($conn, $sql);



  header("location: ../index.html");-->
