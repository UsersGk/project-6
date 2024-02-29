<?php
session_start();

// Redirect to login if user is not logged in
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit(); // Terminate script after redirection
}

require("database/conn.php");

$user = $_SESSION['username'];



// Initialize variables
// $id = $_POST["id"] ?? null;

if (isset($_SESSION['username'])) {
    $sql = "SELECT * FROM patient WHERE Email='$user';";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        $name = $row['Name'];
        $address = $row['Address'];
        $email = $row['Email'];
        $dob = $row['DOB'];
        $contno = $row['Contactno'];
        $photo = $row['photo'];
        // echo "<pre>";
        // print_r($row);
        // echo "<pre>";
    }
}

if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $address = mysqli_real_escape_string($conn, $_POST['Address']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $contno = mysqli_real_escape_string($conn, $_POST['Contno']);
    $updateSql = "UPDATE patient SET 
        Name='$name', 
        Address='$address', 
        Email='$email', 
        DOB='$dob', 
        Contactno='$contno'
        WHERE Email='$user';";

    if(mysqli_query($conn, $updateSql)) {
//        echo "Record updated successfully.";
    } 
    // else {
    //     echo "Error updating record: " . mysqli_error($conn);
//     // }
// echo $photo;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        // echo "Image deleted successfully.";
        // Delete old photo
        if (!empty($photo) && file_exists("photo/" . $photo)) {
        unlink("database/photo/" . $photo);
        }
        // Upload new photo
        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];

        // Specify the target directory for the uploaded file
        $target_dir = "database/photo/";
        $target_file = $target_dir . basename($file_name);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($file_temp, $target_file)) {
            // Update the database with the new photo filename
            $updatePhotoSql = "UPDATE patient SET photo='$file_name' WHERE Email='$user';";
            if (mysqli_query($conn, $updatePhotoSql)) {
                // echo "Photo updated successfully.";
            } 
            // else {
            //     echo "Error updating photo: " . mysqli_error($conn);
            // }
        } 
        // else {
        //     echo "Sorry, there was an error uploading your file.";
        // }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment System</title>
    <link rel="stylesheet" href="css/indexstyles.css">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    <style>
        ul li.active a {
            background-color: #ccc; /* Change to the desired background color */
            padding: 10px; /* Change to the desired padding */
        }
        header ul li:nth-child(7){
            border-left: 1px solid white;
            padding-left: 10px;
            cursor: pointer;
           
        }
        header ul li img{
            border-radius: 60%; /* Make the image round */
        }
        .patient{
            position:fixed; 
            left:30%;
overflow-x:scroll;
        }
    </style>
</head>

<body>
    <header>
        <h1>DoctorAS</h1>
        <ul>
            <li><a href="index.php" id="homeLink">Home</a></li>
            <li><a href="About.php" id="aboutLink">About</a></li>
            <li><a href="booking.php" id="bookingLink">Booking</a></li>
            <li><a href="check.php" id="checkLink">Check</a></li>
            <li><a href="contact.php" id="contactLink">Contact</a></li>
            <li><a href="doctor.php" id="doctorLink">Doctor</a></li>
            <li onclick="textClicked()"><img src="database/photo/<?php echo $photo; ?>" alt="Profile" width="40" height="30"></li>
            <div><a href="logout.php"><Button>Logout</Button></a></li>
           
        </ul>
    </header>
<dialog  id="patient" class="patient">

    <style>
    /* Style for the body */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

/* Style for the container */
.check {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Style for the form container */
.background {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Style for the form elements */
table {
    width: 100%;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="date"],
input[type="time"],
input[type="number"],
input[type="file"],
input[type="Address"] {
    width: calc(100% - 10px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"],button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"],button:hover {
    background-color: #0056b3;
}

/* Responsive styling */
@media screen and (max-width: 600px) {
    .background {
        width: 90%;
    }
}
</style>

    <div class="check">
        <div class="background">
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <caption><h1>Patient Information</h1></caption>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <tr>
                        <td><label for="Name">Name</label></td>
                        <td><input type="text" name="Name" id="Name" value="<?php echo $name; ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="Address">Address</label></td>
                        <td><input type="text" name="Address" id="Address" value="<?php echo $address; ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email" name="Email" id="Email" value="<?php echo $email; ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="Dob">Date of Birth</label></td>
                        <td><input type="date" name="dob" id="dob" value="<?php echo $dob; ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="Contno">Contact Number</label></td>
                        <td><input type="text" name="Contno" id="Contno" value="<?php echo $contno; ?>" required></td>
                    </tr><tr>
                        <td>Profile</td>
                        <td><a href="database/photo/<?php echo $photo; ?>"><img src="database/photo/<?php echo $photo; ?>" alt="Profile" width="100" height="100"></a></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="image" id="image"  accept="image/jpeg"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="update" value="Save"></td>
                        <td colspan="2"><button onclick="closedialog()"> close</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </dialog>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var currentPage = window.location.href;
            var navLinks = document.querySelectorAll('header ul li a');

            navLinks.forEach(function(link) {
                if (link.href === currentPage) {
                    link.parentElement.classList.add('active');
                }
            });
        });
        const dialog=document.getElementById('patient');
       function textClicked(){
        dialog.showModal()
       }
       function closedialog(){
        dialog.close()
       }
    </script>
</body>
</html>
