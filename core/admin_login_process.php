<?php
session_start();
$user = $_POST['name'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query = "SELECT * FROM admin_tbl WHERE name = '$user' AND pass = '$pass'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_affected_rows($con)>0){
	$_SESSION['name'] = $user;
	$_SESSION['pass '] = $pass;
	if(isset($_POST['remember_me'])){
		setcookie("userNameApp",$user,time()+60*60*24*365);
	}
	header('location: ../admin.php');//redirects to admin bash
}
else{
	header('location: ../admin_login.php');
}
?>