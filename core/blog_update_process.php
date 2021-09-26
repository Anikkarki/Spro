<?php
$i = $_POST['B_ID'];
$B_title = $_POST['B_title'];
$B_content = $_POST['B_content'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query = "UPDATE blog SET B_title = '$B_title', B_content='$B_content' WHERE B_ID =$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../admin.php')
?>