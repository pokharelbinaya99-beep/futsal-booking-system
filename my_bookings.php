<?php
session_start();
include "db.php";

$user=$_SESSION['user_id'];

$sql="SELECT * FROM bookings WHERE user_id='$user'";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
echo "Booking Date: ".$row['booking_date']."<br>";
echo "Slot ID: ".$row['slot_id']."<br>";
echo "<hr>";
}
?>
<link rel="stylesheet" href="css/style.css">