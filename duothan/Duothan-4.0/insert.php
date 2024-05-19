<?php

include_once "dbconnection.php";

$conn = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["first-name"];
    $lname = $_POST["last-name"];
    $username = $_POST["username"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["re-password"];
    $status = "user";


$write_q = "INSERT INTO user(u_username, u_fname, u_lname, u_mobile, u_email, u_password, u_status, u_dtpcode)VALUES('$username','$fname','$lname','$username','$mobile','$email','$password','$status','$dtpcode');";

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);

}else{
    
    if($conn->query($write_q)==TRUE){


      //echo "New record created successfully";
      //window.open("bag/add.php?id="+$id,"_self");
      header('location:adduser.php/?msg=data inserted successfully&color=green');  
        
    }
}
}

$conn->close();
?>