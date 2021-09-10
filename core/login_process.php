<?php
session_start();
$user = $_POST['Name'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query = "SELECT * FROM user_info WHERE name = '$user' AND pass = '$pass'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_affected_rows($con)>0){
	$_SESSION['Name'] = $user;
	$_SESSION['pass '] = $pass;
	if(isset($_POST['remember_me'])){
		setcookie("userNameApp",$user,time()+60*60*24*365);
	}
	header('location: ../home.php');//redirects to admin bash
}
else{
	header('location: ../login.php');
}
?>