<html>
    <head>
        <title>table</title>
        <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
        $conn = mysqli_connect("localhost", "root", "", "paisa-op");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
    ?>

<?php include('portion/menu.php'); ?>
            <br>
            <br>
            <div class="container">
               <u> <h1>Fill Your Investment Details Here</h1></u>
                <hr><hr>
                <br>
    <form action="insert.php"  name="tblForm" method="post" >

            <p>
                <label for="Name"> Name:</label>
                <input type="text" name="Name" id="Name" required> 
            </p>
            <hr>
            <br>
            <p>
                <label for="amount">Amount:</label>
                <input type="number" name="invested_amount" id="amount" required>
            </p>
        
            <hr>
            <br>

            <p>
            <label for="C_name">Category : </label>
            <?php
                $query = "SELECT * FROM category";
                $results = mysqli_query($conn,$query) or die(mysqli_error($conn));
            ?>
<select name="C_name" id="C_name">
    <!-- <option value="rigatoni"></option>
    <option value="dave"></option>
    <option value="pumpernickel"></option>
    <option value="reeses"></option> -->
    <?php
     while($arr = mysqli_fetch_array($results,MYSQLI_ASSOC)) {
        echo "<option value=".$arr['C_name'].">".$arr['C_name']."</option>";
    }
?>
    
  
</select>
            </p>
            <hr>
            <br>
            <p>
                <label for="pbp">Payback Period</label>
                <input type="date" name="pbp" id="pbp" required>
            </p>

            <hr>
            <br>
            <p>
                <label for="max_pbp">Max Payback Period:</label>
                <input type="date" name="max_pbp" id="max_pbp">
            </p>

            <input type="submit" value="Submit" class="btn btn-success">
</form>
</div>
</body>
    </html>