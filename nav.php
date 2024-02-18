<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment System</title>
    <link rel="stylesheet" href="css/indexstyles.css">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    <style>
        ul li.active a {
            background-color: #ccc; /* Change to the desired background color */
            padding: 10px; /* Change to the desired padding */
        }
    </style>
</head>

<body>
    <header>
        <h1>DoctorAS</h1>
        <ul>
            <li><a href="index.php" id="homeLink">Home</a></li>
            <li><a href="About.php" id="aboutLink">About</a></li>
            <li><a href="booking.php" id="bookingLink">Booking</a></li>
            <li><a href="check.php" id="checkLink">Check</a></li>
            <li><a href="contact.php" id="contactLink">Contact</a></li>
            <li><a href="#" id="doctorLink">Doctor</a></li>
            <div><Button>Logout</Button></li>
        </ul>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var currentPage = window.location.href;
            var navLinks = document.querySelectorAll('header ul li a');

            navLinks.forEach(function(link) {
                if (link.href === currentPage) {
                    link.parentElement.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
