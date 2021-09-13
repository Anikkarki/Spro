<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "paisa-op");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$invested_amount = $_REQUEST['invested_amount'];
		$C_name = $_REQUEST['C_name'];
		$pbp = $_REQUEST['pbp'];
		$max_pbp = $_REQUEST['max_pbp'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO investment_table(Name,invested_amount,pbp,max_pbp,C_name) VALUES ('$Name','$invested_amount','$pbp','$max_pbp','$C_name')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$Name\n $invested_amount\n "
				. "$pbp\n $max_pbp\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
