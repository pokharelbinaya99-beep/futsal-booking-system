<?php
session_start();
include "db.php";

if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
$row=mysqli_fetch_assoc($result);

$_SESSION['user_id']=$row['id'];
$_SESSION['name']=$row['name'];
$_SESSION['role']=$row['role'];

if($row['role']=="admin")
{
header("Location: admin/admin_dashboard.php");
}
else
{
header("Location: dashboard.php");
}

}
else
{
echo "Invalid Login";
}

}
?>
<link rel="stylesheet" href="css/style.css">
<h2>Login</h2>

<form method="POST">

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<button name="login">Login</button>

</form>