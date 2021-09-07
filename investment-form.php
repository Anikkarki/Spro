<html>
    <head>
        <title>table</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function validateForm() {
  let x = document.forms["tblForm"]["Name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  
}
</script>
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

            <br>
            <br>
    <form action="insert.php"  name="tblForm" method="post" onsubmit="return validateForm()">

            <p>
                <label for="Name"> Name:</label>
                <input type="text" name="Name" id="Name" required> 
            </p>
  
            <p>
                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount" required>
            </p>
        
            <p>
                <label for="C_name">category:</label>
                <input type="dropdown" name="C_name" id="C_name" required>
            </p>

            <p>
                <label for="pbp">Payback Period</label>
                <input type="date" name="pbp" id="pbp" required>
            </p>

            <p>
                <label for="max_pbp">Max Payback Period:</label>
                <input type="date" name="max_pbp" id="max_pbp">
            </p>

            <input type="submit" value="Submit">
</form>
</body>
    </html>