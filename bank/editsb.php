<!DOCTYPE html>
<html>
<head>
	<title>UPDATE SB</title>
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
</style>
<body>
<?php
$id=$_GET['id'];
include('dbcon.php');
$sql=mysqli_query($con,"SELECT * FROM `farmerviewsb` WHERE farmerid='$id'");
$res=mysqli_fetch_array($sql);
?>
<div class="container">
<form method="POST">
	<label>FIRST NAME</label>
	<input type="text" name="name" value="<?php echo $res['firstname']?>"><br> 
	<label>MIDDLE NAME</label>
	<input type="text" name="m1" value="<?php  echo $res['middlename']?>" ><br>
	<label>LAST NAME</label>
	<input type="text" name="m2" value="<?php echo $res['lastname']?>"><br>
	
	<input type="submit" name="add" value="edit"></input>
</form>
</div>
<?php
include('dbcon.php');
$id=$_GET['id'];
if(isset($_POST['add']))
{
	$n=$_POST['name'];
	$m1 = $_POST['m1'];
	$m2 = $_POST['m2'];
	

	$qry=mysqli_query($con,"UPDATE `farmerviewsb`SET `firstname`='$n',`middlename`='$m1',`lastname`='$m2' WHERE farmerid='$id'")or die(mysqli_error($con));
if($qry==true)
{
	echo "
	<script>
	alert('updated');
	window.location='disp1.php';
	</script>
	";
}
else
{
	echo "
	<script>
	alert('error');
	window.location='disp1.php';
	</script>
	";
}

}
?>
</body>
</html>
