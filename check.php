<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
    <link rel="stylesheet" href="css/checkstyles.css">
</head>
<body>
    <?php include_once("nav.php"); ?>

    <div class="check">
        <div class="background">
        <h4> Check your <div>appointment</div></h4>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><label for="Name">Name</label></td>
                        <td><input type="text" name="Name" id="Name" placeholder="Enter your name" required></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email" name="Email" id="Email" placeholder="Enter your Email" required></td>
                    </tr>
                    <tr>
                        <td><label for="token">Token Number</label></td>
                        <td><input type="text" name="token" id="token" placeholder="Enter your Token Number" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>
