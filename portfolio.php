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
        <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="porstyle.css">
       
<!-- 
        <script type = "text/javascript">  
         function ediDb() {  
            alert("You are Successfully Called the JavaScript function");  
         }  
</script>   -->
        
    </head>
    <?php include('portion/menu.php'); ?>
<div class="container">
<br>        
<hr>
        <a href="investment-form.php"><div class="button-inv-add"><button type="button" class="btn btn-primary">add investment</button></div></a>
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
      <th>Return Amount</th>
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
      <td><?php echo $arr['sum_retn']; ?></td>
      <!-- <td> <input type="submit" name="Action" value="Action" onclick="ediDb()"></td> -->
     <?php echo "<td><a href='return_update_page.php?Inv_ID=".$arr['Inv_ID']."'>EDIT</a> <a href='delete_investment_page.php?Inv_ID=".$arr['Inv_ID']."'> Delete</a></td>"; }?>
  </tr>
  

</table>



        </div>
        <!--Show investment stop-->
<br>
<br>
<br>
<br>
<hr>
<hr>

        <!-- Suggestion from admin -->
        <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">
       Content From Maximum Category total is shown.
       <?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'paisa-op') or die(mysqli_error($con));

$test_query = "SELECT * FROM category where c_total>99";
$test_res =  mysqli_query($con,$test_query) or die(mysqli_error($con));
while ($arr = mysqli_fetch_array($test_res,MYSQLI_ASSOC)) {

?>
 <h1>category-name to invest in :<?php  echo $arr['C_name']; ?></h1>
  <p>Most of our user with similar intrest and investment detail like your's are investing in this category and gaining much money </p>
<?php } ?>
    </div>
    
  </div>
</div>
        <!-- Suggestion from admin ends -->
<br><br>
        <!-- Total Returns -->
        <div class="col">
      <div class="p-3 border bg-light">
        Total return of the individual invester.
      </div>

    </div>
        <!-- Total Returns ends -->
</div>
    </body>
</html>

<?php 
}
?>
