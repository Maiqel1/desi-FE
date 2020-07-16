<?php
    include_once 'dbh.inc.php';

    $email = trim($_POST['email']);

    $email = stripslashes($email);

    $email = htmlspecialchars($email);

    $result = mysqli_num_rows(mysqli_query($conn, "SELECT 1 FROM diggit WHERE email = '$email';"));

    $email = $_POST['email'];

    $sql = "INSERT INTO diggit (email) VALUES (' $email');";
    mysqli_query($conn, $sql);



    header("location: ../index.html");

?>



<!-- include_once 'dbh.inc.php';

  $email = $_POST['email'];

  $sql = "INSERT INTO diggit (email) VALUES (' $email');";
  mysqli_query($conn, $sql);



  header("location: ../index.html");-->
