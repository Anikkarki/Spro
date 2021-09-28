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
<!--blog section -->
<hr>
<hr>
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
<br><hr>
<hr>
   <!--  previous blog-->
   <div>
   <table class="table table-bordered border-primary">
  <tr>
   <th>Blog Title </th>
   <th>Action</th>
</tr>
<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "SELECT * FROM blog";
$result = mysqli_query($con,$query1)or die(mysqli_error($con));
while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

?>
  <tr>
      <td><?php echo $arr['B_title']; ?></td>
      <?php echo "&nbsp;<td><a href='blog_update_page.php?B_ID=".$arr['B_ID']."'>EDIT</a> &nbsp;&nbsp; <a href='blog_delete_page.php?B_ID=".$arr['B_ID']."'>DELETE</a></td>"; }?>
  </tr>
   </table>
   </div>
   
<!-- previous blog table ends here-->


<br>
<br>
<hr>
<hr>
<Br>
  


</body>
</html>

<?php
}
?>