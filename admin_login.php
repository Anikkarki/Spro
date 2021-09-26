<?php 
  if(isset($_COOKIE['userNameApp'])){
  $user = $_COOKIE['userNameApp'];
  die("found");
}
else {
  $user = '';
 // die("not found");
 // die($_COOKIE['userNameApp']);
}
?>

<html>
    <head>
        <title>admin login</title>
        <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<br><br><br>
<!-- start of content -->
<div class="post-container">
  <div align="center" class="post">
  <div align="center" class="post-title"><h2>Admin Log-in</h2></div>
  <div class="login-style">

      <form method="POST" action="core/admin_login_process.php">
        <div class="login-user">Username:  <input type="text" name="name" value='<?php echo "$user"; ?>'></div><br>
        <div class="login-pass">Password:  <input type="password" name="pass"></div><br>
        <div class="remember-btn"><input type="checkbox" name="remember_me" value="remember_me">Remember Me</div><br>
        <input type="submit" name="btn_login" value="Log-in"><br>
      </form>

  </div>
  </div>
  </div>

</div>
</div>
</body>
</html>