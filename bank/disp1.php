<!DOCTYPE html>
<html>
<head>
	<title>FARMER INFORMATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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

</style>
<body>
<br>
<br>
<br>
<form method="GET" >
<label>FARMER ID</label>
<input type="text" name="id" required="required"><br></input>
<input type ="submit" name="add"  value="submit"></input>
</form>
<br>
<br>

<div class="container">
<table border="1">
	<thead>
		<tr> FARMER SB ACCOUNT </th>
		<th>FIRST NAME</th>

			<th>MIDDLE NAME</th>
			<th>LAST NAME</th>
			<th>FARMERID</th>
			<th>ACCOUNT NUMBER</th>
			<th>BALANCE</th>
			
		</tr>
	</thead>
			
<tbody>

<?php
     include('dbcon.php');

    if(isset($_GET["add"]))
{
	$a = $_GET['id'];

	$r = mysqli_query($con,"SELECT * FROM farmerviewsb where `farmerid`='$a'");
	while($res = mysqli_fetch_array($r))
	{
		echo'
		<tr>
		<td>'.$res['firstname'].'</td>
		<td>'.$res['middlename'].'</td>
		<td>'.$res['lastname'].'</td>
		<td>'.$res['farmerid'].'</td>
		<td>'.$res['accountno'].'</td>
		<td>'.$res['balance'].'</td>
		
		</tr>
		';
	}
}
	?>

	
	</tbody>
	</table>
	
<table border="1">
	<thead>
		<tr> FARMER 108 ACCOUNT </th>
		<th>FIRST NAME</th>

			<th>MIDDLE NAME</th>
			<th>LAST NAME</th>
			<th>FARMERID</th>
			<th>ACCOUNT NUMBER</th>
			<th>BALANCE</th>
			
		</tr>
	</thead>
			
<tbody>
</div>
<?php
     include('dbcon.php');

    if(isset($_GET["add"]))
{
	$a = $_GET['id'];

	$r = mysqli_query($con,"SELECT * FROM farmerview108 where `farmerid`='$a'");
	while($res = mysqli_fetch_array($r))
	{
		echo'
		<tr>
		<td>'.$res['firstname'].'</td>
		<td>'.$res['middlename'].'</td>
		<td>'.$res['lastname'].'</td>
		<td>'.$res['farmerid'].'</td>
		<td>'.$res['acc108no'].'</td>
		<td>'.$res['balance108'].'</td>
		
		</tr>
		';
	}
}
	?>
	</tbody>
  </table>
  </div>

	
</body>
</html>