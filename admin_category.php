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
    <title>Admin Section/Write Blog</title>
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php  include('portion/menu_admin.php'); ?> 

<br>
<br>
<hr>
<hr>
   
   <!-- Category form-->
   <div>
   <table class="table table-bordered border-primary">
  <tr>
   <th>Category</th>
   <th>Action</th>
</tr>
<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "SELECT * FROM category";
$result = mysqli_query($con,$query1)or die(mysqli_error($con));
while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

?>
  <tr>
      <td><?php echo $arr['C_name']; ?></td>
      <?php echo "<td><a href='category_update_page.php?C_ID=".$arr['C_ID']."'>EDIT</a></td>"; }?>
  </tr>
   </table>
   </div>
   <hr>
   <hr>
   <form action="core/submit-cat.php" method="POST" >
      <input type="text" name="C_name">
      <input type="submit" name="btn" value="Add Category" >
</form>
   <!-- Category form ends-->
   </body>
</html>

<?php
}
?>