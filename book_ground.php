<?php
session_start();
include "db.php";

$ground_id=$_GET['id'];

if(isset($_POST['book']))
{

$user_id=$_SESSION['user_id'];
$date=$_POST['date'];
$slot=$_POST['slot'];

$sql="INSERT INTO bookings(user_id,ground_id,slot_id,booking_date)
VALUES('$user_id','$ground_id','$slot','$date')";

mysqli_query($conn,$sql);

echo "Booking Successful";
}
?>
<link rel="stylesheet" href="css/style.css">
<h2>Book Ground</h2>

<form method="POST">

Booking Date<br>
<input type="date" name="date"><br><br>

Time Slot<br>

<select name="slot">

<option value="1">6AM - 7AM</option>
<option value="2">7AM - 8AM</option>
<option value="3">8AM - 9AM</option>

</select>

<br><br>

<button name="book">Book</button>

</form>