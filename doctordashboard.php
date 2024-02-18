<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        table {
            overflow: hidden;
            width: 100%;
        }
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            /* Adjust font size here */
            font-size: 16px; /* or any other desired size */
            /* Adjust width to fit content */
            width: fit-content; /* or use width: auto; for automatic sizing */
            padding:15px;
            margin:0 auto;
            margin-top:30px;
        }
        
    </style> -->
    <link rel="stylesheet" href="css/admincss/doctordashstyle.css">
</head>
<body>
    <?php
    include_once("sidebar.php"); // Assuming sidebar.php contains relevant content
    ?>
    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile No</th>
            <th>Fee</th>
            <th>Specialization</th>
            <th colspan="6">Alter</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>123 Main St, City</td>
            <td>123-456-7890</td>
            <td>$100</td>
            <td>General Medicine</td>
            <td colspan="2"><a href="#" class="button">view</a></td>
            <td colspan="2"><a href="#" class="button">Edit</a></td>
            <td colspan="2"><a href="#" class="button">delete</a></td> <!-- Assuming you'll add functionality here -->
        </tr>
        <!-- Add more rows as needed -->
    </table>
</body>
</html>
