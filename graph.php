<?php
session_start();
if(!isset($_SESSION['Name'])){
//   echo('hello');  
  header('location: login.php');
}
else{
?>
<?php 
$i = $_POST['Inv_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$q = "select * from investment_table ";
$res = mysqli_query($con,$q) or die(mysqli_error($con));
$dataPoints=array(array("y" =>  0 , "label" =>  ''));
?>

 
 <?php 
  while ($arr=mysqli_fetch_array($res,MYSQLI_ASSOC)) {
 
 

array_push($dataPoints,array("y" =>  $arr['invested_amount']  , "label" =>  $arr['Name'] ));
  }
?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Invested Graph"
	},
	axisY: {
		title: "Invested amount"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 70vh; width: 90%;"></div>
<script src="mini.js"></script>
</body>
</html>  

<?php
}
?>                            