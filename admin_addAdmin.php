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
<hr>
<hr>
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
</body>
</html>
<?php
}
?>