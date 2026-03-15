<?php
session_start();
include "../db.php";

if(!isset($_SESSION['role']) || $_SESSION['role']!="admin")
{
header("Location: ../login.php");
}

$sql="SELECT * FROM bookings";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Bookings</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>

<h2>All Bookings</h2>

<table border="1" cellpadding="10">

<tr>
<th>Booking ID</th>
<th>User ID</th>
<th>Ground ID</th>
<th>Slot ID</th>
<th>Date</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['user_id']; ?></td>
<td><?php echo $row['ground_id']; ?></td>
<td><?php echo $row['slot_id']; ?></td>
<td><?php echo $row['booking_date']; ?></td>

</tr>

<?php
}
?>

</table>

<br>

<a href="admin_dashboard.php">Back</a>

</body>
</html>