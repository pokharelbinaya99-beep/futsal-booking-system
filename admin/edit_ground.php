<?php
include "../db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM grounds WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{

$name = $_POST['ground_name'];
$location = $_POST['location'];
$price = $_POST['price'];

$update = "UPDATE grounds 
SET ground_name='$name', location='$location', price_per_hour='$price'
WHERE id='$id'";

mysqli_query($conn,$update);

header("Location: view_grounds.php");

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Ground</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="container">

<h2>Edit Ground</h2>

<form method="POST">

Ground Name
<input type="text" name="ground_name" value="<?php echo $row['ground_name']; ?>">

Location
<input type="text" name="location" value="<?php echo $row['location']; ?>">

Price
<input type="number" name="price" value="<?php echo $row['price_per_hour']; ?>">

<button name="update">Update Ground</button>

</form>

</div>

</body>
</html>