<?php
    // Include your database connection script
    require("database/conn.php");
    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $role = $_POST["role"];
        $name = $_POST['name'];
        echo "$role";
        $sql="INSERT INTO patient (Name, email) VALUES ('$name', '$email')";
        if (mysqli_query($conn, $sql ||)) {
            header("Location:dashboarduser.php");
            // echo "Error: Unable to add user. " . mysqli_error($conn);
        }
    }
        ?>