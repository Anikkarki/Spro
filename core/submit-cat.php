<?php 
$C_name = $_POST['C_name'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "insert into category(C_name) values('$C_name')";
$result = mysqli_query($con,$query1);
header("location:../admin_category.php");
?>