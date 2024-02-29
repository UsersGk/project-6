<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
    margin-top: 20px;
}

form {
    width: 50%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <h2>Add New User</h2>
    <form action="" method="post">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="doctor">Doctor</option>
            <option value="patient">patient</option>

        </select><br><br>
        
        <input type="submit" value="Add User">
    </form>
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
        // Insert data into the database
        $sql = "INSERT INTO userdata (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
       
        if (mysqli_query($conn, $sql)) {
            header("Location:dashboarduser.php");
            if ($role =='doctor'){
                $sql1 = "INSERT INTO doctor (Name, email) VALUES ('$name', '$email')";
            }
            if($role == 'patient'){
                $sql1 = "INSERT INTO patient (Name, email) VALUES ('$name', '$email')";
            } 
            if (mysqli_query($conn, $sql1)) {
                header("Location:dashboarduser.php");
            }
        }
    
        // Close connection
        mysqli_close($conn);
    }
    
    ?>
</body>
</html>
