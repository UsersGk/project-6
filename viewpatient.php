<link rel="stylesheet" href="css/admincss/doctordashstyle.css">
<style>
       ul li:nth-child(2){
            background-color: #ccc; /* Change to the desired background color */
            padding: 7px; /* Change to the desired padding */
            margin:0 auto;
        }
    </style>
<?php
 require("database/conn.php"); // Include your database connection script
require_once("headerfile/doctornav.php");
?>
    <div class="container">
        <br>
        <h2>Patient's Appointment List</h2>
        <div class="outertable">
        <div class="innertable">

     
       <table>
        <tr>
            <th>SN</th>
            <th> Paitent Name</th>
            <th>P_Address</th>
            <th>P_email</th>
            <th>DOB</th>
            <th>Contact no</th>
            <th>Appointment Time</th>
            <th>Appointment Date</th>
            <th>Payment screeshot</th>
            <th>Request</th>
            <th colspan="4">Alter</th>
        </tr>
        <tr>
        <?php
        // Execute SELECT query
        $result = mysqli_query($conn, "SELECT * FROM appointment where demail='$user';");

        // Check if query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row["sn"]; ?></td>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["DOB"]; ?></td>
                    <td><?php echo $row["Pcontactno"]; ?></td>
                    <td><?php echo $row["Appointmenttime"]; ?></td>
                    <td><?php echo $row["AppointmentDate"]; ?></td>
                    <td><a href="database/payment/<?php echo $row["photo"]; ?>"><img src="database/payment/<?php echo $row["photo"]; ?>" alt="Payment Screenshot" width="100" height="100"></a></td>
                    <td><?php echo $row["request"]; ?></td>
                    <!-- Assuming you store photo path in the database -->
                    <td><form action="database/updateappointment.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row["sn"];?>">
                        <input type="submit" value="update" class="buttom" name="submit"/>
            </form></td>
                    <td ><form action="database/deleteappointment.php" method="get" onsubmit="return confirm('Are you sure to delete?')">
                        <input type="hidden" name="id" value="<?php echo $row["sn"];?>">
                        <input type="submit" value="Delete" class="buttom" name="submit"/>
            </form></td> <!-- Assuming you'll add functionality here -->
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='10'>No records found</td></tr>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?> 
</tr>
    </table>
    </div>
    </div>
</body>

    <script>
    // Get reference to the dialog element
    const dialog = document.getElementById('doctor');

    // Function to open the dialog
    function imgClicked() {
        dialog.showModal();
    }

    // Function to close the dialog
    function closedialog() {
        dialog.close();
    }
</script>


</html>