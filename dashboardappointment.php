<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admincss/doctordashstyle.css">
</head>
<body>
    <?php
    include_once("sidebar.php");
    ?>
       <table>
        <tr>
            <th>SN</th>
            <th> Paitent Name</th>
            <th>Doctor Name</th>
            <th>Specialization</th>
            <th>Fee</th>
            <th>Appointment Time</th>
            <th>Appointment Date</th>
            <th>Active Stauts</th>
            <th colspan="6">Alter</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Shiva</td>
            <td>General Medicine</td>
            <td>$100</td>
            <td>3:50 am</td>
            <td>2024/2/24</td>
            <td>active</td>
            <td colspan="2"><a href="#" class="button">view</a></td>
            <td colspan="2"><a href="#" class="button">Edit</a></td>
            <td colspan="2"><a href="#" class="button">delete</a></td> <!-- Assuming you'll add functionality here -->
        </tr>
        <!-- Add more rows as needed -->
    </table>
</body>
</html>