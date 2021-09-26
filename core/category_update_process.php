<?php
$i = $_POST['C_ID'];
$C_name = $_POST['C_name'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query = "UPDATE category SET C_name = '$C_name' WHERE C_ID =$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../admin_category.php')
?>