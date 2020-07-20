<!DOCTYPE html>
<html>
<head>
	<title>Transfer SB</title>
</head>
<style>
button{
  font-size: 20px;
  background-color: white;
  border-color: bisque;
  color: white;
  margin-left: 100px 89px;
}
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
<h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspTransfer SB Account</h2>
<div class="container">
<form method="POST" method="GET">

<h3>Account Information</h3>
<label>ACCOUNT NUMBER</label>
<input type="text" name="i" required="required"><br></input>
<label>TRANSFER AMOUNT</label><br>
<input type="number" name="b" required="required"><br></input>
<label>TRANSFER ACCOUNT NUMBER</label><br>
<input type="number" name="tan" required="required"><br></input>
<input type ="submit" name="add" value="Transfer"></input>
</form>
</div>
<?php
include('dbcon.php');

if(isset($_POST["add"]))
{


	$a = $_POST['i'];
	$b = $_POST['b'];
  $c = $_POST['tan'];
	$sql=mysqli_query($con,"SELECT * FROM `accountsb` WHERE accountno='$a'");
  $sql1=mysqli_query($con,"SELECT * FROM `accountsb` WHERE accountno='$c'");
$res=mysqli_fetch_array($sql);
$res1=mysqli_fetch_array($sql1);
$ii=$res['balance'];
$iii=$res1['balance'];
if($ii>$b)
{
	$ll=$ii-$b;
  $lll=$iii+$b;
     $qry=mysqli_query($con,"INSERT INTO `withdrawsb`( `wsbamt`, `accountno`) VALUES('$b','$a')") or die(mysqli_error($con));
	$qry1=mysqli_query($con,"UPDATE `accountsb`SET `balance`='$ll'WHERE accountno='$a'")or die(mysqli_error($con));
  $qry2=mysqli_query($con,"UPDATE `accountsb`SET `balance`='$lll'WHERE accountno='$c'")or die(mysqli_error($con));
	if($qry==true)
	{
		echo "transfered";
	}
	else
	{
		echo "failed";
	}
}
else
{
  echo "insufficient balance";
}
}
?>
<br>
<br>
</tbody>
  </table>
  </div>
<div class="main">
<br>
<br>
<button><a href="flipcard.html" class="button">BACK</a></button>
</div>

</body>
</html>
