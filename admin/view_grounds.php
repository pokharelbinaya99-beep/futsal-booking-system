<?php
session_start();
include "../db.php";

/* DELETE GROUND */

if(isset($_GET['delete']))
{
$id = $_GET['delete'];

$sql = "DELETE FROM grounds WHERE id='$id'";
mysqli_query($conn,$sql);

header("Location: view_grounds.php");
}


/* UPDATE GROUND */

if(isset($_POST['update']))
{
$id = $_POST['id'];
$name = $_POST['ground_name'];
$location = $_POST['location'];
$price = $_POST['price'];

$sql = "UPDATE grounds 
SET ground_name='$name', location='$location', price_per_hour='$price'
WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location: view_grounds.php");
}


/* FETCH GROUND FOR EDIT */

$edit = false;

if(isset($_GET['edit']))
{
$id = $_GET['edit'];

$result = mysqli_query($conn,"SELECT * FROM grounds WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

$edit = true;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Grounds</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<h2 style="text-align:center;">Manage Futsal Grounds</h2>

<!-- EDIT FORM -->

<?php if($edit){ ?>

<div class="container">

<h3>Edit Ground</h3>

<form method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Ground Name
<input type="text" name="ground_name" value="<?php echo $row['ground_name']; ?>">

Location
<input type="text" name="location" value="<?php echo $row['location']; ?>">

Price
<input type="number" name="price" value="<?php echo $row['price_per_hour']; ?>">

<button name="update">Update Ground</button>

</form>

</div>

<?php } ?>


<table border="1">

<tr>
<th>ID</th>
<th>Ground Name</th>
<th>Location</th>
<th>Price</th>
<th>Actions</th>
</tr>

<?php

$sql = "SELECT * FROM grounds";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['ground_name']; ?></td>

<td><?php echo $row['location']; ?></td>

<td><?php echo $row['price_per_hour']; ?></td>

<td>

<a href="view_grounds.php?edit=<?php echo $row['id']; ?>">Edit</a>

<a href="view_grounds.php?delete=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this ground?')">Delete</a>

</td>

</tr>

<?php } ?>

</table>

<br>

<div style="text-align:center;">

<a href="add_ground.php">Add Ground</a>

<a href="admin_dashboard.php">Back</a>

</div>

</body>
</html>