<?php
    include_once 'dbh.inc.php';

    if(isset($_POST['submit'])){
    $email = $_POST['email'];

      if(empty($email)){
        echo "Field is Required";
      }
      else{
        $sql = "INSERT INTO `diggit` (`email`) VALUES('".$email."')" or die($conn->error);
        $conn->query($sql);
        
      }


      header("location: index.html");

}

?>
