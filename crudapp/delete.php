<?php
	include 'connection.php';
	$er_no=$_GET['er_no'];
	$cmd="delete from sch where er_no=$er_no";
	$result=mysql_query($cmd) or die(mysql_error($con));
	if($result)
	{
		echo "<script>alert('data is deleted');</script>";
		echo "<script>location.href='table.php';</script>";
	}
	else
	{
		echo "<script>alert('error in deleting');</script>";
	}
?>