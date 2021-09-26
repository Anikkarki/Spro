<?php
session_start();
if(!isset($_SESSION['name'])){
//   echo('hello');  
  header('location: admin_login.php');
}
else{
?> 

<?php 
$i = $_GET['U_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$q = "select * from user_info where U_ID = $i";
$res = mysqli_query($con,$q) or die(mysqli_error($con));
$arr=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Update</title>
  <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  	textarea{
		font-size: 14px;
		color: grey;
		font-family: Georgia Regular;
		border-radius: 12px;
		border: none;
		background: #f2f2f2;
	}
  </style>
</head>
<?php  include('portion/menu_admin.php'); ?>
<br><br><br>
<div class="container" style="border-radius: 10px 10px 0px 0px;">

<!-- start of content -->
<div class="post-container">
<div class="filler"></div>
<div align="center" class="post-title"><h2>Content Adding Page</h2></div>
<hr style="width: 80%; color: #f2f2f2;">
<div class="filler"></div>

<div class="login-style">
      <div class="filler"></div>
        <div class="filler"></div>
      <form method="POST" action="core/user_update_process.php">
        <div class="login-user"><input type="hidden" name="U_ID" value="<?php echo $arr['U_ID']?>"></div><br>
        <div class="login-user">Name  <input type="text" name="Name" value="<?php echo $arr['Name']?>"></div><br>
        <div class="login-user">Email<input type="email" name="email" value="<?php echo $arr['email']?>"></div><br> 
        <div class="login-user">Description<input type="description" name="description" value="<?php echo $arr['description']?>"></div><br>
        <div class="login-user">Pass<input type="password" name="pass" value="<?php echo $arr['pass']?>"></div><br> 
        <input type="submit" name="btn_post_return" value="Update" style="margin-left: 32%;"><br>
      </form>
  </div>
<!-- end of content -->

</body>
</html>

<?php
}
?>
