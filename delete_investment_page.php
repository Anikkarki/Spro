<?php
session_start();
if(!isset($_SESSION['Name'])){
//   echo('hello');  
  header('location: login.php');
}
else{
?> 
<?php 
$i = $_GET['Inv_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$q = "select * from investment_table where Inv_ID = $i";
$res = mysqli_query($con,$q) or die(mysqli_error($con));
$arr=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Investment delete</title>
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
<body>
<br><br><br>
<div class="container" style="border-radius: 10px 10px 0px 0px;">

<!-- start of content -->
<div class="post-container">
<div class="filler"></div>
<div align="center" class="post-title"><h2>Do you want to delete this data?</h2></div>
<hr style="width: 80%; color: #f2f2f2;">
<div class="filler"></div>

<div class="login-style">
      <div class="filler"></div>
        <div class="filler"></div>
      <form method="POST" action="core/delete_investment_process.php">
        <div class="login-user"><input type="hidden" name="Inv_ID" value="<?php echo $arr['Inv_ID']?>"></div><br>
        <div class="login-user">Name  <input type="text" name="Name" value="<?php echo $arr['Name']?>"></div><br>
        <div class="login-user">Invested amount  <input type="number" name="invested_amount" value="<?php echo $arr['invested_amount']?>"></div><br> 
        <div class="login-user">Total returned amount  <input type="number" name="sum_retn" value="<?php echo $arr['sum_retn']?>"></div><br> 
        <div class="login-user">return amount  <input type="number" name="return_amount" value="<?php echo $arr['return_amount']?>"></div><br>
        <input type="submit" name="btn_post_return" value="delete" style="margin-left: 32%;" class="btn btn-danger"><br>
      </form>
  </div>
<!-- end of content -->

</body>
</html>

<?php
}
?>
