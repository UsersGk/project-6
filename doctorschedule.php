<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="css/doctor/doctorscchedules.css">
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
        <h2>Doctor's Schedule List</h2>
        <table>
            <tr>
                <th style="width: 5%; ">S.N.</th>
                <th style="width: 50%;">Date</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
            </tr>
        </table><br><br>
        <button class="button add-schedule">Add</button>
    </div>
    <dialog class="model" id="model">
        <form action="" method="add_schedule">
            <label for="schedule_date">Enter the date:</label>
            <input type="date" id="schedule_date"><br><br>
            <label for="schedule_started_time">Enter the started time:</label>
            <input type="time" name="schedule_started_time" id="schedule_started_time"><br><br>
            <label for="schedule_end_time">Enter the end time:</label>
            <input type="time" name="schedule_end_time" id="schedule_end_time"><br><br>
            <button class="button close-schedule" >Close</button>
            <button type="submit" class="button updateschedule" >Update</button>
        </form><br>
    </dialog>
    <script>
        const model = document.querySelector('.model');
        const add = document.querySelector('.add-schedule');
        const close = document.querySelector('.close-schedule');
        const update = document.querySelector('.update-schedule');

        add.addEventListener('click',() => {
            model.showModal();
        });
        close.addEventListener('click',() =>{
            modal.close();
        });

    </script>
</body>

</html>