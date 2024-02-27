<?php
require_once('conn.php');
$id = $_GET['id'];
$sq = "SELECT * FROM doctor WHERE sn='$id'";
$result = mysqli_query($conn, $sq);
$row = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// die();
unlink("doctor/".$row['Photo']);
$sql = "DELETE FROM doctor where sn='$id'";
$res = mysqli_query($conn,$sql);
?>