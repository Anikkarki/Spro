<?php 
$name = $_POST['name'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "insert into admin_tbl(name,pass) values('$name','$pass')";
$result = mysqli_query($con,$query1);
header("location:../admin.php");
?>