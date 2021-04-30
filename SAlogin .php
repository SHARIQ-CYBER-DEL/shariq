
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "xaamp";


?>

<!DOCTYPE html>
<html>
<head>
<title> SHARIQ TRAVELS THOUGHTS </title>
<style>

.he1{
	
	color:white;
	text-align:center;
	padding:20px;
    font-family:roman;
	font-size:14px;
	background-color:#0c426f;
	
}

.container {
  
  text-align: center;
  color: white;
  padding:17px;
  margin-top:99px;
}
.footer{
	background-color:#0c426f;

   height:55px;
   width:100%;
  display:inline;
 float:right;
 color:white;
 text-align:center;
 margin:10px;
 }
 body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 49%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  height:500px;
  margin-top:10px;
}
.search-container{
	margin-left:1089px;
	width:160px;
}
.cont{
	text-align:center;
	margin-top:-21px;
}
	
</style>
</head>
<body>


		  <header>
  <strong style="color:white;">
  <?php 

  ?>
  </strong>
</header>
</div>

</div>
<?php include 'head.php' ?>
<div class="cont">
<h1>LOG IN</h1>
  </div>
	
<div class="container">

  <form method="POST" >
    <label style="color:black"; for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name"><br>

    <label style="color:black"; for="lname">Password</label>
    <input type="text" id="pass" name="lastname" placeholder="Your password"><br>

    
    
    <input type="submit" value="Submit" name="submit" > </button>
  </form>
</div>


</div>
		  <div class="footer";

		  <footer>
		  
		  </footer>
		  </div> 
		  </body>
		  </html>
		  
		  <?php

$conn = mysqli_connect("localhost", "root", "", "xaamp");


if (isset($_POST['submit'])){

$firstname = $_POST['name'];
$password = $_POST['password'];

}

$mysqli = "INSERT INTO login(FirstName,password)
VALUES  ('firstname', 'password')";

if(mysqli_query($conn, $mysqli)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $mysqli. " . mysqli_error($conn);
}


?>
