<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connect Successfull";
}
else
{
	echo "<script>alert('Error in connection');</script>";
}
$db=mysql_select_db("data");
if($db)
{
	echo "Database Access Successfull";
}
else
{
	echo "<script>alert('Error in database access');</script>";
}
?>