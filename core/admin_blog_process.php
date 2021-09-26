<?php 
$A_ID = $_SESSION['A_ID'];
$B_title = $_POST['B_title'];
$B_content = $_POST['B_content'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "insert into blog(B_title,B_content,B_date) values('$B_title','$B_content',CURRENT_DATE)";
$result = mysqli_query($con,$query1);
header("location:../admin.php");
?>