<?php
$id=$_GET['id'];
include('dbcon.php');
$sql=mysqli_query($con,"DELETE FROM `farmer` WHERE id='$id'");
if($sql==true)
{
	echo "
	<script>
	alert('deleted');
	window.location='login.php';
	</script>
	";
}
else
{
	echo "
	<script>
	alert('error');
	window.location='login.php';
	</script>
	";
}
?>