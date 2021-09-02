<?php

?>
<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$q = "select * from user_info ";
$res = mysqli_query($con,$q) or die(mysqli_error($con));
$arr=mysqli_fetch_array($res,MYSQLI_ASSOC)
?>
<!DOCTYPE html>
<html>
<head>
  <title>Viewboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!--menu section start-->
<div class="topnav">
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a class="active" href="portfolio.php">Portfolio</a>
            <a href="login.php">login/signup</a>
        </div>
        <!--menu section finish-->

		<!-- this is to ask inpute-->
		<form method="post">
              
              
			  <p>
							  <label for="Name">First Name:</label>
							  <input type="text" name="Name" id="Name">
						  </p>

						  

						  <p>
							  <label for="email">Email Address:</label>
							  <input type="text" name="email" id="email">
						  </p>



			  <p>
							  <label for="discription">discription:</label>
							  <input type="text" name="discription" id="discription">
						  </p>
				
				
							
							
							
			  <p>
							  <label for="pass">pass:</label>
							  <input type="text" name="pass" id="pass">
						  </p>	
				
							
						  <input type="submit" value="Submit">
					  </form>
		<!-- this is to ask inpute-->



	<?php
	 
		$Name =  $_REQUEST['Name'];
		$email = $_REQUEST['email'];
        $discription = $_REQUEST['discription'];
        $pass =  $_REQUEST['pass'];
          
        // Performing insert query execution
        // here our table name is user_info
        $sql = "INSERT INTO user_info  VALUES ('',$Name', 
            '$email','$discription','$pass')";
          
        if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n $Name\n $email\n "
                . "$discription\n $pass\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>

<!-- main container <div> -->

<!-- end of content -->
</body>
</html>