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
            <form action="database/bookinginsert.php" method="post" enctype="multipart/form-data">
                <table>
                <caption><h1>Booking Now!!!</h1></caption>
                    <tr>
                        <td><label for="Name">Name</label></td>
                        <td><input type="text" name="Name" id="Name" placeholder="Enter your name" required></td>
                        <td><input type="hidden" name="request" id="request"value="pending" required></td>
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
                        <td><input type="Number" name="Contno" id="Contno" placeholder="Enter your Contact no" required min="10"></td>
                    </tr>
                    <tr>
                        <td><label for="Dcname"> Doctor Name</label></td>
                        <td> <select name="Dcname" class="box">
                    <option value="">None</option>
                    <?php   
                    $sql = "SELECT Name FROM `doctor`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $doctorName = $row['Name'];
                        $Dcname=$row['Name'];
                        echo "<option value=\"$doctorName\"";
                        if ($Dcname == $doctorName) 
                            echo " selected";
                        echo
                         ">$doctorName</option>";
                    }
                    ?>
                </select>
                    </tr>
                    <tr>
                        <td><label for="time">Appointment Time  </label></td>
                        <td>
               <select name="time">
               <option value="None">None</option>
                <option value="10:00-11:00">10:00-11:00</option>
                <option value="11:00-12:00">11:00-12:00</option>
                <option value="12:00-1:00">12:00-1:00</option>
                <option value="2:00-3:00">2:00-3:00</option>
                <option value="3:00-4:00">3:00-4:00</option>
                <option value="4:00-5:00">4:00-5:00</option>
                <option value="5:00-6:00">5:00-6:00</option>
                <option value="6:00-7:00">6:00-7:00</option>
                </select></td>
                    </tr>
                    <tr>
                    <tr>
                        <td><label for="apdate">Appointment Date </label></td>
                        <td><input type="Date" name="apdate" id="apdate"  required></td>
                    </tr>
                    <tr>
                        <td><label for="QR">Qr code</label></td>
                        <td><img src="photo/photo1.jpg" alt="" width="60%" height="60%"></td>
                    </tr>
                    <tr>
    <td><label for="image">QR payment Photo (JPG only)</label></td>

    <td><input type="file" name="image" id="image" accept="image/jpeg" required></td>
</tr>

                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Submit">
</td>
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