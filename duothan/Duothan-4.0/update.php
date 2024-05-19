<?php

include_once "dbconnection.php";

$conn = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $fname = $_POST["first-name"];
  $lname = $_POST["last-name"];
  $username = $_POST["username"];
  $mobile = $_POST["mobile"];
  $email = $_POST["email"];
  $status = $_POST["status"];

$update_q = "UPDATE user SET u_username='".$username."', u_fname='".$fname."', u_lname='".$lname."', u_mobile='".$mobile."', u_email='".$email."', u_status='".$status."', WHERE id='".$id."'";

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);

}else{
    
    if($conn->query($update_q)==TRUE){

      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      header('location:index.php/?msg=data updated successfully&color=green');  
        
    }
}
}

$conn->close();
?>