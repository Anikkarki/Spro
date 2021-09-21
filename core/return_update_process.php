<?php
$i = $_POST['Inv_ID'];
$Name = $_POST['Name'];
$invested_amount = $_POST['invested_amount'];
$return_amount = $_POST['return_amount'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query = "UPDATE investment_table SET return_amount = $return_amount WHERE Inv_ID ='$i'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../portfolio.php')
?>