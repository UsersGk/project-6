<?php
$host = 'localhost';
$port = 3307; // Assuming your MySQL server is running on port 3307 as an integer
$user = 'root';
$pass = '';
$dbname = 'DoctorAS';

// Create connection
$conn =mysqli_connect($host, $user, $pass, $dbname, $port);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connected successfully";
// }
?>