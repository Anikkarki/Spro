<?php 
$Name = $_POST['Name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repass = $_POST['repassword'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "insert into user_info(Name,email,pass) values('$Name','$email','$pass')";
$result = mysqli_query($con,$query1);
header("location:../login.php");
?>