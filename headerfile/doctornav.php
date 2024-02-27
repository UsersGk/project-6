<?php
session_start();

// Redirect to login if user is not logged in
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit(); // Terminate script after redirection
}

require("database/conn.php");

$user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="css/doctor/doctorscchedules.css">
    <style>
        ul li.active a {
            background-color: #ccc; /* Change to the desired background color */
            padding: 10px; /* Change to the desired padding */
        }
       /* Style for the dialog container */
       #doctor {
    width:50%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

#doctor form {
    margin-bottom: 10px;
}

#doctor label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

#doctor input[type="text"],
#doctor input[type="number"],
#doctor input[type="time"],
#doctor input[type="file"] {
    width: calc(100% - 22px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
} 

#doctor input[type="submit"] {
    width: 100%;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    cursor: pointer;
}

#doctor button {
    width: 100%;
    background-color: #dc3545;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    cursor: pointer;
    margin-top: 10px;
}

#doctor input[type="submit"]:hover,
#doctor button:hover {
    opacity: 0.8;
}


        </style>
</head>
<script>
       document.addEventListener("DOMContentLoaded", function() {
            var currentPage = window.location.href;
            var navLinks = document.querySelectorAll('.navbar_container ul li a');

            navLinks.forEach(function(link) {
                if (link.href === currentPage) {
                    link.parentElement.classList.add('active');
                }
            });
        });
    </script>
<body>
    <div class="navbar">
        <div class="title">
          <h1>DoctorAS</h1>
        </div>
        <div class="navbar_container">
            <ul>
                <li><a href="doctorschedule.php">Schedule</a></li>
                <li><a href="viewpatient.php">Patient</a></li>
            </ul>
            <div class="login">
            <?php 
                 $result = mysqli_query($conn, "SELECT * FROM doctor where email='$user';");
                while( $row = mysqli_fetch_assoc($result)){
                 $name=$row['Name'];
$photo=$row['Photo'];
                }
?>
                <p><?php echo $name?></p>
                
                <img src="database/doctor/<?php echo $photo?>" alt="" height="40" width="40" onclick="imgClicked()" style="border-radius: 50%;">
               <a href="logout.php"> <button class="logout">Logout</button></a>
            </div>
        </div>
    </div>
    <dialog class="doctor" id="doctor">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name?>" required><br>
        
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"value="<?php echo $address?>" required><br>
        
        <label for="mobile">Mobile No:</label><br>
        <input type="text" id="mobile" name="mobile" value="<?php echo $contno?>"required><br>
        
        <label for="specialization">Specialization:</label><br>
        <input type="text" id="specialization" name="specialization"value="<?php echo $Specialization?>" required><br>
        
        <label for="fee">Fee:</label><br>
        <input type="number" id="fee" name="fee" value="<?php echo $Fee?>"required><br>
        
        <label for="photo">Photo:</label><br>
        <input type="file" id="photo" name="photo" accept="image/*" required><br>
        
        <label for="start">Start Time:</label><br>
        <input type="time" id="start" name="start" value="<?php echo $starttime;?>"required><br>
        
        <label for="end">End Time:</label><br>
        <input type="time" id="end" name="end"value="<?php echo $endtime; ?>" required><br>
        
        <input type="submit" value="Update"  name="update">
        <button onclick="closedialog()">close</button>
    </form>

    </dialog>