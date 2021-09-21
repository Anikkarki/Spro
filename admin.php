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
    <title>Admin Section</title>
</head>
<link href="css/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<!--blog section -->
   <u><div align="right"><a href="core/logout_process.php"  style="color:red;">Logout</a></div></u>
   <div class="blog-write">
  <br>
  <br>
  <h2 style="color:white; margin-left:10%">Write Blog </h2>
  <br>
   <form method="POST" action="core/admin_blog_process.php" >
   <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="title " style="height: 50px; width:800px; margin-left:20px;" name="B_title">
  <label for="floatingInput" style="margin-left:25px;">Blog title</label>
</div>
   <br>
   <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; width:800px; margin-left:20px;" name="B_content"></textarea>
  <label for="floatingTextarea2" style="margin-left:30px">Blog Content</label>
</div>
<input type="submit" name="submit" style="height: 30px; width:100px; margin-left:20px;  margin-top:20px;">
</form>
   </div>
   <!--blog section ends here-->
<br>
<br>
<hr>
<hr>
<Br>
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
<!-- Admin table or form-->
<div class="admin-add">
   <br>
   <br>
   <h2>Add Admin</h2>
<form method="POST" action="core/add_admin.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="pass" name="pass">
    </div>
  </div>
  <input type="submit" name="submit" style="height: 30px; width:100px; margin-left:20px;  margin-top:20px;">
</form>
<br>
</div>

   <bR>
   <!-- Admin table or form ends-->

<br>
<hr>
<hr>
<Br>

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
      <td><?php echo $arr['C_name']; }?></td>

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