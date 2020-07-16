<?php
    include_once 'dbh.inc.php';

    $email = $_POST['email'];

    $sql = "INSERT INTO diggit (email) VALUES('$email')";
    mysqli_query($conn, $sql);

    header("location: success.html");



?>
