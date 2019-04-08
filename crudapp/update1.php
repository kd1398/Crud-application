<?php
	include 'connection.php';
	if(isset($_POST['update']))
	{
		$a=$_POST['er_no'];
		$b=$_POST['fullname'];
		$c=$_POST['institute_name'];
		$d=$_POST['department_name'];
		$e=$_POST['scholarship'];
		$f=$_POST['scheme'];
		$g=$_POST['amount'];
		$cmd="update sch set fullname='$b',institute_name='$c',department_name='$d',scholarship='$e',scheme='$f',amount='$g' where er_no=$a";
		$result=mysql_query($cmd) or die(mysql_error($con));
		if($result)
		{
			echo "<script>alert('data updated');</script>";
			echo "<script>location.href='table.php';</script>";
		}
		else
		{
			echo "<script>alert('error');</script>";
		}
		
	}
?>
