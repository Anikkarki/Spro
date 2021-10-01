<!DOCTYPE html>
<html>
<head>
  <title>Sign-up</title>
  <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-signup">
<!-- start of content -->
<div class="post-container">
  <div class="post">
  <div class="login-style">
      <form method="POST" class="form-signup" action="core/signup_process.php" >
        <h3 align="center"><u>Sign Up</u></h3>
        <br>
        <div class="login-user">Username: <br><input type="text" name="Name"></div>
        <br>
        <div class="login-user">Email:<br>  <input type="text" name="email" placeholder="hello@hello.com"></div>
        <br>
        <div class="login-pass">Password:<br>  <input type="password" name="pass"></div>
        <br>
        <div class="login-pass">Re-enter Password: <br> <input type="password" name="repassword"></div>
        <br>
        <input class="btn btn-success btn-block" type="submit" name="btn" value="Add Member">
        <br>
        <a href="login.php">Already have account</a>
        <br>
      </form>
  </div>
  </div>
  </div>
</div>
</body>
</html>