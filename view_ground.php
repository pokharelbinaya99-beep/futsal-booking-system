<?php
include "db.php";

$sql="SELECT * FROM grounds";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
echo "<h3>".$row['ground_name']."</h3>";
echo "Location: ".$row['location']."<br>";
echo "Price: ".$row['price_per_hour']."<br>";

echo "<a href='book_ground.php?id=".$row['id']."'>Book</a>";

echo "<hr>";
}
?>
<link rel="stylesheet" href="css/style.css">