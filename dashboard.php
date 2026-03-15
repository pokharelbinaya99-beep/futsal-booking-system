<?php
session_start();

if(!isset($_SESSION['user_id']))
{
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Dashboard</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>

<h2>Welcome <?php echo $_SESSION['name']; ?></h2>

<br>

<a href="view_grounds.php">View Grounds</a>

<br><br>

<a href="my_bookings.php">My Bookings</a>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>