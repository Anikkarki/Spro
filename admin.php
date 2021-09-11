<html>
<head>
    <title>Admin Section</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<!--blog section -->
   <div class="blog-write">
   <br>    
   <br>
   <form method="POST" action="core/admin_blog_process.php" >
   <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="title " style="height: 50px; width:800px; margin-left:20px;" name="title">
  <label for="floatingInput" style="margin-left:25px;">Blog title</label>
</div>
   <br>
   <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; width:800px; margin-left:20px;" name="content"></textarea>
  <label for="floatingTextarea2" style="margin-left:30px">Blog Content</label>
</div>
<input type="submit" name="submit" style="height: 30px; width:100px; margin-left:20px;  margin-top:20px;">
</form>
   </div>
   <!--blog section ends here-->

   <!--user table section -->

</body>
</html>