<?php
session_start();
if(!isset($_SESSION['Name'])){
//   echo('hello');  
  header('location: login.php');
}
else{
?> 

<!DOCTYPE html>
<html>

    <head>

        <title>Home</title>
        <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="hstyle.css">
        <style>

        </style>
    </head>
    <?php  include('portion/menu.php'); ?>
    <div class="container">
    <br>
    <iframe src="img/giphy.gif" width="500" height="280" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
    <?php 
      $user = $_SESSION['Name'];
      $pass = $_SESSION['pass '];
      echo "<h2> Welcome ".$user.".  Whats up?</h2><br>";

      $con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
      mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
      $test_query = "SELECT * FROM blog";
      $test_res =  mysqli_query($con,$test_query) or die(mysqli_error($con));
      while ($arr = mysqli_fetch_array($test_res,MYSQLI_ASSOC)) {
        // echo $arr['B_ID'];
        // echo $arr['B_title'];

    ?>
      
        <div class="article-show">
        <?php
         $title = "SELECT * FROM blog";
         $result = mysqli_query($con,$title) or die(mysqli_error($con));
        ?>
        <div class="row">
          <div class="leftcolumn">
            <div class="card">
              <h2> <?php echo $arr['B_title']; ?></h2>
              <h3><?php echo $arr['B_content']; ?></h3>
              <h5><?php echo $arr['B_date']; ?></h5>
            </div>
          </div>
  
        </div>
        <?php
          }
        ?> 
        </div>
    </body>
</html>

<?php
}
?>