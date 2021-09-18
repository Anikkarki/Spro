<?php
session_start();
if(!isset($_SESSION['Name'])){
//   echo('hello');  
  header('location: login.php');
}
else{
?> 

<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" href="porstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- 
        <script type = "text/javascript">  
         function ediDb() {  
            alert("You are Successfully Called the JavaScript function");  
         }  
</script>   -->
        
    </head>
<?php include('portion/menu.php'); ?>
        <hr>
        <br>
        <a href="investment-form.php"><div class="button-inv-add"><button type="button">add investment</button></div></a>
        <br>
        <br>
        <!--Show investment -->
        <div>
        <h2>Investment </h2>
   <table class="table table-striped">
  <tr>
      <th>Name</th>
      <th>Invested Amount</th>
      <th>Category</th>
      <th>Payback Period</th>
      <th>Action</th>
  </tr>
  <?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));
$query1 = "SELECT * FROM investment_table";
$result = mysqli_query($con,$query1)or die(mysqli_error($con));
while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

?>
  <tr>
      <td><?php echo $arr['Name']; ?></td>
      <td><?php echo $arr['invested_amount']; ?></td>
      <td><?php echo $arr['C_name']; ?></td>
      <td><?php echo $arr['pbp']; ?></td>
      <!-- <td> <input type="submit" name="Action" value="Action" onclick="ediDb()"></td> -->
     <?php echo "<td><a href='return_update_page.php?Inv_ID".$arr['Inv_ID']."'>Action</a></td>"; }?>
  </tr>
  

</table>



        </div>
        <!--Show investment stop-->
    </body>
</html>

<?php 
}
?>
