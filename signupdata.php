<?php
$con =mysqli_connect("localhost","root","","doctor_appointment_system");

$username  = $_POST['username'];
$psword=  md5($_POST['psword']);
$email=$_POST['email'];
$role = "patient";
$hash = password_hash($psword,  
          PASSWORD_DEFAULT); 
//inserting the values
$insert= "INSERT INTO user VALUES('$username', '$email','$hash', '$role')";
mysqli_query( $con,$insert ); 
?>