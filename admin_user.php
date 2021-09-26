<?php
session_start();
if(!isset($_SESSION['name'])){
//   echo('hello');  
  header('location: admin_login.php');
}
else{
?> 
<html>
<head>
    <title>Admin Section/All Users</title>
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php  include('portion/menu_admin.php'); ?>
<br>
<br>
<hr>
<hr>
 <!--user table section -->
 <h2>All Users </h2>
   <table class="table table-striped">
  <tr>
      <th>S.no</th>
      <th>Name</th>
      <th>email</th>
      <th>Action</th>
  </tr>
  <?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "SELECT * FROM user_info";
$result = mysqli_query($con,$query1)or die(mysqli_error($con));
while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

?>
  <tr>
      <td><?php echo $arr['U_ID']; ?></td>
      <td><?php echo $arr['Name']; ?></td>
      <td><?php echo $arr['email']; ?></td>
      <?php echo "<td><a href='user_update_page.php?U_ID=".$arr['U_ID']."'>EDIT</a></td>"; }?>
  </tr>
  

</table>

   <!--user table section ends here-->
<Br>
   <hr>
<hr>
<br>
</body>
</html>
<?php
}
?>