<?php
include "../db.php";

if(isset($_POST['add']))
{
$name=$_POST['ground_name'];
$location=$_POST['location'];
$price=$_POST['price'];

$sql="INSERT INTO grounds(ground_name,location,price_per_hour)
VALUES('$name','$location','$price')";

mysqli_query($conn,$sql);

echo "Ground Added";
}
?>
<link rel="stylesheet" href="css/style.css">

<h2>Add Ground</h2>

<form method="POST">

Ground Name<br>
<input type="text" name="ground_name"><br><br>

Location<br>
<input type="text" name="location"><br><br>

Price per hour<br>
<input type="number" name="price"><br><br>

<button name="add">Add Ground</button>

</form>