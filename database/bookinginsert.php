<?php
require("conn.php"); // Include your database connection script

// print_r($_POST);
// PHP code to fetch the email based on the selected doctor's name
if(isset($_POST['Dcname'])) {
    $selectedName = $_POST['Dcname'];
    $result = mysqli_query($conn, "SELECT email FROM `doctor` WHERE Name='$selectedName'");
   while( $row = mysqli_fetch_assoc($result)){
    $dmail = $row['email'];
   }
} else {
    $dmail = ""; // Set default value if no doctor is selected
}

// Handle file upload
if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];

    // Move uploaded file to destination directory
    move_uploaded_file($file_temp, "payment/" . $file_name);
}
// echo "<pre>";
// print_r($_POST);
// // echo "</pre>";
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['Name'];
    $address = $_POST['Address'];
    $email = $_POST['Email'];
    $dob = $_POST['dob'];
    $contact = $_POST['Contno'];
    $doctorName = $_POST['Dcname'];
    $appointmentTime = $_POST['time'];
    $appointmentdate = $_POST['apdate'];
    $request=$_POST['request'];
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die();
        // Construct and execute the insert query
    $sql = "INSERT INTO appointment (Name, Dname,demail,address,email,DOB,Pcontactno, Appointmenttime, AppointmentDate, photo,request) 
            VALUES ('$name', '$doctorName','$dmail','$address', '$email', '$dob', '$contact',  '$appointmentTime', '$appointmentdate', '$file_name','$request')";

   if( mysqli_query($conn, $sql)){
    header("location: ../booking.php");
    exit();
   }
}
// else {
//     echo "Error";
// }

// Close the database connection
mysqli_close($conn);
?>
