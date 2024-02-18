<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contactstyle.css"> 
</head>
<body>
    <?php
    include_once("nav.php");
    ?>
    <div class="image">
        <img src="photo/photo3.jpg" alt="wait" width="100%" height="300px" >
        <p>Contact For Any Query</p>
    </div>
    <div class="check">
    <img src="photo/photo3.jpg" alt="wait" width="100%" height="300px">
        <div class="background">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><label for="Name">Name: </label></td>
                        <td><input type="text" name="Name" id="Name" placeholder="Enter your name" required></td>
                    </tr>
                    <tr>
                        <td><label for="Sub">Subject: </label></td>
                        <td><input type="text" name="sub" id="sub" placeholder="Subject" required></td>
                    </tr>
                    <tr>
                        <td><label for="textbox">Message: </label></td>
                        <td><textarea name="comment" id="" cols="30" rows="10"  placeholder="Message" required></textarea></td>
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