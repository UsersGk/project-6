<?php
$id=$_POST['id'];
echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
    margin-top: 30px;
}

form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="file"],
input[type="time"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Optional: Style for error messages */
.error-message {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}

        </style>
</head>
<body>
    <?php
    require("conn.php");

    // Initialize variables
    $id = $_POST["id"] ?? null;
    
    if ($id) {
        $sql = "SELECT * FROM doctor WHERE sn='$id'";
        $result = mysqli_query($conn, $sql);
    
        if ($result && $row = mysqli_fetch_assoc($result)) {
            $name = $row['Name'];
            $address = $row['Address'];
            $contno = $row['Contactno'];
            $Specialization = $row['Specialization'];
            $Fee = $row['Fee'];
            $photo = $row['Photo'];
            $starttime = $row['starttime'];
            $endtime = $row['endtime'];
        }
    }
    ?>
    <h2>Update Doctor</h2>
    <form action="database/adddoctor.php" method="post" enctype="multipart/form-data">
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
    </form>
</body>
</html>
