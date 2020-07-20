<<!DOCTYPE html>
<html>
<head>
	<title>Deposit 108</title>
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
<h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspDeposit 108 Account</h2>
<div class="container">
<form method="POST" method="GET">

<h3>ACCOUNT INFORMATION</h3>
<label>ACCOUNT NUMBER</label>
<input type="text" name="i" required="required"><br></input>
<label>AMOUNT</label>
<input type="number" name="b" required="required"><br></input>
<input type ="submit" name="add" value="Deposit"></input>
</form>
</div>
<?php
include('dbcon.php');

if(isset($_POST["add"]))
{


	$a = $_POST['i'];
	$b = $_POST['b'];
	$sql=mysqli_query($con,"SELECT * FROM `account108` WHERE acc108no='$a'");
$res=mysqli_fetch_array($sql);
$ii=$res['balance108'];
	$ll=$ii+$b;
     $qry=mysqli_query($con,"INSERT INTO `deposit108`( `d108amt`, `acc108no`) VALUES('$b','$a')") or die(mysqli_error($con));
	$qry1=mysqli_query($con,"UPDATE `account108`SET `balance108`='$ll'WHERE acc108no='$a'")or die(mysqli_error($con));
	if($qry==true)
	{
		echo"deposited";
	}
	else
	{
		echo "failed";
	}
}
?>

<div class="container">
<table border="1">
  <thead>
    <tr> FARMER 108 ACCOUNT </th>
    <th>FIRST NAME</th>

      <th>MIDDLE NAME</th>
      <th>LAST NAME</th>
      <th>FARMERID</th>
      <th>DEPOSIT AMOUNT</th>
      <th>ACCOUNT NUMBER</th>
      
      
    </tr>
  </thead>
      
<tbody>
<?php
     include('dbcon.php');

if(isset($_POST["add"]))
{


  $a = $_POST['i'];
  $r = mysqli_query($con,"SELECT * FROM depositview108 where `acc108no`='$a'");
  while($res = mysqli_fetch_array($r))
  {
    echo'
    <tr>
    <td>'.$res['firstname'].'</td>
    <td>'.$res['middlename'].'</td>
    <td>'.$res['lastname'].'</td>
    <td>'.$res['farmerid'].'</td>
    <td>'.$res['d108amt'].'</td>
    <td>'.$res['acc108no'].'</td>
    
    
    </tr>
    ';
  }
}

  ?>
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
