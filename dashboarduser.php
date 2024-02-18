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
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th colspan="4">Alter</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>JohnDoe@gmail.com</td>
            <td>123-456-7890</td>
            <td>Admin</td>
            <td colspan="2"><a href="#" class="button">Edit</a></td>
            <td colspan="2"><a href="#" class="button">delete</a></td> <!-- Assuming you'll add functionality here -->
        </tr>
        <!-- Add more rows as needed -->
    </table>
</body>
</html>