<!DOCTYPE html>
<html>
<head>
  <title>Sign-up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br><br><br>
<!-- start of content -->
<h3 align="center"><u>Sign Up</u></h3>
<div class="post-container">
  <div class="post">
  <div align="center" class="post-title"><h2>Please Fill Up the Given Form</h2></div>
  <div class="login-style">
      <div class="filler"></div>
        <div class="filler"></div>
      <form method="POST" action="core/signup_process.php"  style="margin-left: 12%;">
        <br>
        <div class="login-user">Username: <br><input type="text" name="Name"></div><br>
        <div class="login-user">Email:<br>  <input type="text" name="email" placeholder="hello@hello.com"></div><br>
        <div class="login-pass">Password:<br>  <input type="password" name="pass"></div><br>
        <div class="login-pass">Re-enter Password: <br> <input type="password" name="repassword"></div><br>
        <input type="submit" name="btn" value="Add Member" style="margin-left:25%;">
      </form>
      <div class="filler"></div>
  </div>
  <div class="filler"></div>
  </div>
  </div>
<a href="login.php">Already have account</a>
<!-- main container <div> -->
</body>
</html>