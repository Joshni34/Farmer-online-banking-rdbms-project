<!DOCTYPE html>
<html>
<head>
	 <title>SB ACCOUNT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #ffe4c4;
  padding: 20px;
}
.main{
	text-align: center;
}
.main a{
	text-decoration-line: none;
	font-weight: bold;
}
.main a:hover{
	color: green;
}
</style>
<body >
<h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspCreate SB Account</h2>
<div class="container">

<form method="POST" method="GET">
<h3>Farmer Information</h3>
<label>FARMER ID</label>
<input type="text" name="id" required="required"><br></input>
<label>FIRST NAME</label>
<input type="text" name="fn" required="required"><br></input>
<label>MIDDLE NAME</label>
<input type="text" name="mn" required="required"><br></input>
<label>LAST NAME</label>
<input type="text" name="ln" required="required"><br></input>
<label>FATHER NAME</label>
<input type="text" name="ffn" required="required"><br></input>
<label>ADDRESS</label>
<input type="text" name="a" required="required"><br></input>
<label>AADHAR NUMBER</label>
<input type="text" name="an" required="required"><br></input>

<h3>NOMINEE</h3>
<label>AADHAR NUMBER</label>
<input type="text" name="i" required="required"><br></input>
<label>NOMINEE NAME</label>
<input type="text" name="nn" required="required"><br></input>
<label>RELATIONSHIP</label>
<input type="text" name="r" required="required"><br></input>
<label>MOBILE NUMBER</label>
<input type="number" name="mmn" required="required"><br></input>
<input type ="submit" name="add" value="insert"></input>
</form>
</div>
<?php
include('dbcon.php');
if(isset($_POST["add"]))
{
	$a = $_POST['id'];
	$b = $_POST['fn'];
	$c = $_POST['mn'];
	$d = $_POST['ln'];
	$e = $_POST['ffn'];
	$f = $_POST['a'];
	$g = $_POST['an'];

	
	

	$i = $_POST['i'];
	$j = $_POST['nn'];
	$k= $_POST['r'];
	$l = $_POST['mmn'];
	


	$qry=mysqli_query($con,"INSERT INTO `farmer`( `farmerid`, `firstname`,`middlename`,`lastname`,`fathername`,`address`,`aadhar`) VALUES('$a','$b','$c','$d','$e','$f','$g')") or die(mysqli_error($con));
	$qry1=mysqli_query($con,"INSERT INTO `accountsb`( `farmerid`) VALUES('$a')") or die(mysqli_error($con));
	$qry2=mysqli_query($con,"INSERT INTO `dependent`( `did`, `dname`,`relationship`,`mobile`,`farmerid`) VALUES('$i','$j','$k','$l','$a')") or die(mysqli_error($con));
	if($qry==true && $qry1==true && $qry2==true )
	{
		echo"inserted";
	}
	else
	{
		echo "failed";
	}
}
?>
<br>
<br>
<div class="main">
<a href="flipcard.html" class ="btn btn-link btn-lg " role="button">BACK</a>

<br>
<br>
</div>

</body>
</html>
