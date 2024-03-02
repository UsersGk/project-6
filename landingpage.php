<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Care</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
</head>
<style>
    .navbar button {

        padding: 10px ;
        background-color: rgb(68, 204, 68);
        border: none;
        border-radius: 5px;
        cursor: pointer;
        color: white;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 1px;
    }
</style>

<body>
    <header>
        <div class="logo"> <img src="photo/logo.png" alt="" height="50"></div>
        <div class="navbar">
            <ul>
                <li><a href="index.php" id="homeLink">Home</a></li>
                <li><a href="About.php" id="aboutLink">About</a></li>
                <li><a href="booking.php" id="bookingLink">Booking</a></li>
                <li><a href="check.php" id="checkLink">Check</a></li>
                <li><a href="contact.php" id="contactLink">Contact</a></li>
                <li><a href="doctor.php" id="doctorLink">Doctor</a></li>
                <li><a href="login.php"><Button>Login</Button></a></li>
                <li><a href="patientsignup.php"><Button>SignUp</Button></a></li>

            </ul>
        </div>

    </header>
    <div class="body">
        <div class="main1">
            <div class="par1">
                <h1>Online Doctor Appointment</h1>
                <p> Increase efficiency, comply with HIPAA regulations, and <br> keep patients at the hearts of your
                    practice.</p>
            </div>
            <div class="par1">
                <img src="photo/photo1.jpg" alt="">
            </div>
        </div>
        <div class="main2 ">
            <div class="par1">
                <img src="photo/photo2.jpg" alt="">
            </div>
            <div class="par1">
                <h1>Ease Scheduling pains</h1>
                <p>Empower your patients to book or reschedule appointment online 24/7.Reduce average booking time from
                    8+
                    minutes by phone * to just few clicks

                </p>
                <div> <button class="button">Create your Account</button></div>
            </div>
        </div>
        <div class="main4">
            <div class="par1">
                <h1>Store up to date patient information</h1>
                <p>A patients Customer Profile automatically updates when they book an appointment.Centralize contact
                    information and attach notes for fast access before appointment . your online doctor scheduling app
                    allows you to digitally back-up patient health records and treatment recommendation.</p>
            </div>
            <div class="par1">
                <img src="photo/photo3.jpg" alt="">
            </div>
        </div>
        <div class="main3">
            <div class="par1">
                <img src="photo/photo3.jpg" alt="">
            </div>
            <div class="par1">
                <h1>Friendly Doctors</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab quaerat fugit
                    ipsum possimus, debitis quos, fugiat perferendis consequatur accusantium nemo quae commodi
                    placeat voluptas deleniti error, neque amet ea officia?</p>
            </div>
        </div>
        <div class="main4">
            <div class="par1">
                <h1>i love you ujjwal. I love you too!</h1>
                <p>A patients Customer Profile automatically updates when they book an appointment.Centralize contact
                    information and attach notes for fast access before appointment . your online doctor scheduling app
                    allows you to digitally back-up patient health records and treatment recommendation.</p>
            </div>
            <div class="par1">
                <img src="photo/photo3.jpg" alt="">
            </div>
        </div>
        <div class="main5">
            <div class="par1">
                <img src="photo/photo4.jpg" alt="">
            </div>
            <div class="par1">
                <h1>Accept medical fees online.</h1>
                <p>Accepting medical fees online with<span> QR code payments </span>can be a convenient and <br>
                    efficient
                    way to handle transactions. To set up online payments with QR codes for medical fees</p>
            </div>
        </div>
        <div class="last">
            <div class="par1">
                <h1>HIPAA_compliant doctor scheduling software</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quidem sint commodi aliquid deserunt
                    libero, aspernatur ut, molestiae sapiente accusamus delectus itaque. Suscipit quam id, veritatis
                    impedit cumque sequi reiciendis.</p>
                <div> <button class="button"> Get started Now</button></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="par1">
                <img src="photo/photo5.jpg" alt="">
            </div>

        </div>

        <div class="notice">
            <div class="photo">
                <h1>Make the magic happen,we'll make sure it happens on time.</h1>
                <button class="button"> Sign me up</button>
            </div>

        </div>
    </div>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>