<?php
session_start();
$com = $_POST['com'];
$b_id = $_POST['B_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));

$username = $_SESSION['Name'];
$queryUid = "SELECT * FROM user_info WHERE Name = '$username' LIMIT 1";
$res1 = mysqli_query($con,$queryUid) or die(mysqli_error($con));


if($row = mysqli_fetch_array($res1,MYSQLI_ASSOC)){
    $u_id = $row['U_ID'];
    $query1 = "insert into comment(com,C_date,B_ID,U_ID) values('$com',CURRENT_DATE,$b_id,$u_id)";
    $result = mysqli_query($con,$query1) or die(mysqli_error($con));
    header('location: ../home.php');
}




?>