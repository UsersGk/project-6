<?php
require_once("headerfile/doctornav.php");
 ?>
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
    const dialog = document.getElementById('doctor');

    function imgClicked() {
        dialog.showModal();
        model.close(); // Close the other dialog
    }

    function closedialog() {
        dialog.close();
    }

    add.addEventListener('click', () => {
        model.showModal();
        dialog.close(); // Close the other dialog
    });

    close.addEventListener('click', () => {
        model.close();
    });

    // Add event listener for the close button inside the doctor dialog
    const doctorCloseBtn = document.querySelector('.doctor button');
    doctorCloseBtn.addEventListener('click', () => {
        dialog.close();
    });
</script>

</body>

</html>