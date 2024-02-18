<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bookingstyles.css">
</head>
<body>
    <?php
    include_once("nav.php");
    ?>
     <div class="check">
        <div class="background">
            <form action="" method="POST">
                <table>
                <caption><h1>Booking Now!!!</h1></caption>
                    <tr>
                        <td><label for="Name">Name</label></td>
                        <td><input type="text" name="Name" id="Name" placeholder="Enter your name" required></td>
                    </tr>
                    <tr>
                        <td><label for="Address">Address</label></td>
                        <td><input type="Address" name="Address" id="Address" placeholder="Enter your Address" required></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email" name="Email" id="Email" placeholder="Enter your Email" required></td>
                    </tr>
                    <tr>
                        <td><label for="Dob">Date of birth</label></td>
                        <td><input type="Date" name="dob" id="dob" placeholder="Enter your DOB" required></td>
                    </tr>
                    <tr>
                        <td><label for="Contno">Contact no</label></td>
                        <td><input type="Number" name="dob" id="dob" placeholder="Enter your Contact no" required min="10"></td>
                    </tr>
                    <tr>
                        <td><label for="Dcname"> Doctor Name</label></td>
                        <td><input type="text" name="Dcname" id="Dcname" placeholder="Enter your Doctor Name" required></td>
                    </tr>
                    <tr>
                        <td><label for="time">Appointment Time</label></td>
                        <td><input type="Time" name="time" id="time"  required></td>
                    </tr>
                    <tr>
                        <td><label for="QR">Qr code</label></td>
                        <td><img src="photo/photo1.jpg" alt="" width="60%" height="60%"></td>
                    </tr>
                    <tr>
    <td><label for="file">QR payment Photo (JPG only)</label></td>

    <td><input type="file" name="file" id="file" accept="image/jpeg" required></td>
</tr>

                    <tr>
                        <td colspan="2"><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
<?php
include_once("footer.php");
?>
</body>
</html>