<?php 
$user = $_POST['Name'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "insert into blog(B_title,B_content,B_date) values('$title','$content',' CURDATE()')";
$result = mysqli_query($con,$query1);
?>