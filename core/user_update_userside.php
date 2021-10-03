<?php
$i = $_POST['U_ID'];
$Name = $_POST['Name'];
$email = $_POST['email'];
$description = $_POST['description'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query = "UPDATE user_info SET Name = '$Name', email='$email', description='$description', pass='$pass' WHERE U_ID =$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../profile.php')
?>