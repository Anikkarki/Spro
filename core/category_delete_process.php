<?php
$i = $_POST['C_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query = "DELETE FROM category WHERE C_ID =$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
echo "<script>alert('Your Record Sucessfully deleted.');</script>";
header('location: ../admin_category.php')
?>