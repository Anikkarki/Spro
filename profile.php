<?php
session_start();
if(!isset($_SESSION['Name'])){
//   echo('hello');  
  header('location: login.php');
}
else{
?>

<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));


$user = $_SESSION['Name'];
$pass = $_SESSION['pass '];
$test_query = "SELECT * FROM user_info WHERE Name = '$user' AND pass = '$pass'";
$test_res =  mysqli_query($con,$test_query) or die(mysqli_error($con));
while ($arr = mysqli_fetch_array($test_res,MYSQLI_ASSOC)) {
//   echo $arr['Name'];
//   echo str_repeat('&nbsp;', 5);
//   echo $arr['description'];
  


?>

<html>

<head>
    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php include('portion/menu.php'); ?>

    <div class="user-data">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="card">
            <img src="img/pro.png" alt="profile" style="width:40%">
            <h1>User-name:<?php  echo $arr['Name']; ?></h1>
            <h1>Email: <?php  echo $arr['email']; ?> </h1>
            <p class="title">DESCRIPTION: <?php  echo $arr['description']; }?></p>
            <p>Links</p>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>

        </div>

    </div>

    <div class="inv-detail">
        <br>
        <nav><u>INVESTMENT DETAILS</u></nav>
        <table border="1">
            <tr>
                <td>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>




<?php
}
?>
