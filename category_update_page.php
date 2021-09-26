<?php
session_start();
if(!isset($_SESSION['name'])){
//   echo('hello');  
  header('location: admin_login.php');
}
else{
?> 

<?php 
$i = $_GET['C_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$q = "select * from category where C_ID = $i";
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
      <form method="POST" action="core/category_update_process.php">
        <div class="login-user"><input type="hidden" name="C_ID" value="<?php echo $arr['C_ID']?>"></div><br>
        <div class="login-user">Name  <input type="text" name="C_name" value="<?php echo $arr['C_name']?>"></div><br>
        <input type="submit" name="btn_post_return" value="Update" style="margin-left: 32%;"><br>
      </form>
  </div>
<!-- end of content -->

</body>
</html>

<?php
}
?>
