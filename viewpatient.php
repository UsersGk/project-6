<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
    <link rel="stylesheet" href="css/doctor/viewpatient.css">
</head>

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
                <p>Doctor Name</p>
                <img src="photo/doctors.png" alt="" height="50" style="border-radius: 100px;">
                <button class="logout">Logout</button>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <h2>Patient's Appointment List</h2>
        <table>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Contact no</th>
                <th>Doctor Name</th>
                <th>Appointment Time</th>
                <th>Payment Screen Shot</th>
                <th colspan="6">Alter</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>123 Main St, City</td>
                <td>JohnDoe@gmail.com</td>
                <td>2055/11/24</td>
                <td>123-456-7890</td>
                <td>Shiva</td>
                <td>3:50 am</td>
                <td>photo</td>
                <td colspan="2"><a href="#" class="button">view</a></td>
                <td colspan="2"><a href="#" class="button">Edit</a></td>
                <td colspan="2"><a href="#" class="button">delete</a></td> <!-- Assuming you'll add functionality here -->
            </tr>
            <!-- Add more rows as needed -->
        </table>
    </div>
</body>

</html>