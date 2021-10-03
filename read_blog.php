<?php
session_start();
if(!isset($_SESSION['Name'])){
//   echo('hello');  
  header('location: login.php');
}
else{
?> 
<?php 
$i = $_POST['B_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$q = "select * from blog where B_ID = $i";
$comm="select * from comment where B_ID = $i";
$res1 = mysqli_query($con,$comm) or die(mysqli_error($con));

$res = mysqli_query($con,$q) or die(mysqli_error($con));
$arr=mysqli_fetch_array($res,MYSQLI_ASSOC);
/*change*/

?>
<!DOCTYPE html>
<html>
<head>
  <title>Blog</title>
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
<div align="center" class="post-title"><h2>Hope you have good time reading.</h2></div>
<hr style="width: 80%; color: #f2f2f2;">
<div class="filler"></div>

<div class="form-signup">
     
        <div class="login-user"><input type="hidden" name="B_ID" value="<?php echo $arr['B_ID']?>"></div><br>
        <div class="login-user">TITLE : <h1><?php echo $arr['B_title'] ?></h1></div>
        <div class="login-user">Content : <h1><?php echo $arr['B_content'] ?></h1></div>
        
  </div>
<!-- end of content -->
<div class="form-signup">
<form method="POST" action="core/add-com.php">

    <textarea class="form-control"  rows="5"  name="com" > </textarea><br>
    <input type="hidden" name="B_ID" value="<?php echo $arr['B_ID']?>">
    <input type="submit" name="btn_post_return" value="Comment" style="margin-left: 32%;"><br>
  </form>
</div>

<div class="form-signup" name="show-pre-com">
<h1>Previous Comments</h1>

<?php 
  while ($arrhere=mysqli_fetch_array($res1,MYSQLI_ASSOC)) {
?> 
  <div class="prev-comment"><p type="text" name="com" ><?php echo $arrhere['com']?></p></div>  
<?php
  }
?>

</div>

</body>
</html>

<?php
}
?>
