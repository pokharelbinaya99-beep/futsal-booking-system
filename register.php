<?php
include "db.php";

if(isset($_POST['register']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

if(mysqli_query($conn,$sql))
{
echo "Registration Successful";
}
else
{
echo "Error";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>

<body>
<link rel="stylesheet" href="css/style.css">
<h2>User Registration</h2>

<form method="POST">

Name:<br>
<input type="text" name="name" required><br><br>

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<button name="register">Register</button>

</form>

<a href="login.php">Login</a>

</body>
</html>