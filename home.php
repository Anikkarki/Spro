  
<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$test_query = "SELECT * FROM blog";
$test_res =  mysqli_query($con,$test_query) or die(mysqli_error($con));
while ($arr = mysqli_fetch_array($test_res,MYSQLI_ASSOC)) {
  echo $arr['id'];
  echo $arr['noi'];
  
}

?>

<!DOCTYPE html>
<html>

    <head>

        <title>

        </title>
        <link rel="stylesheet" href="hstyle.css">
        <style>

        </style>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="portfolio.php">Portfolio</a>
        </div>
        
        <div class="article-show">
        <?php
         $title = "SELECT * FROM blog";
         $result = mysqli_query($con,$title) or die(mysqli_error($con));
        ?>
        <?php
        //  while ($arr = mysqli_fetch_array($title,MYSQLI_ASSOC)) {
        ?>
        <div class="row">
          <div class="leftcolumn">
            <div class="card">
              <h2><?php ?></h2>
              <h5>Title description, Dec 7, 2017</h5>
              <p>Some text..</p>
            </div>
            <div class="card">
              <h2>TITLE HEADING</h2>
              <h5>Title description, Sep 2, 2017</h5>
              <p>Some text..</p>
            </div>
          </div>
  
        </div>
        <?php
          // }
        ?> 
    </body>
</html>