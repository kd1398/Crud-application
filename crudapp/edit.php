<?php
	
	$er_no=$_GET['er_no'];
	include 'connection.php';
	$cmd="select * from sch where er_no=$er_no";
	$result=mysql_query($cmd) or die(mysql_error($con));
	$row=mysql_fetch_array($result);
?>
<html>
<body>
<form method="POST" action="update1.php">
<table>
<tr>
<td>Er.No:</td>
<td><input type="number" name="er_no" value="<?php echo $row['er_no'];?>"></td>
</tr>
<tr>
<td>Full Name:</td>
<td><input type="text" name="fullname" value="<?php echo $row['fullname'];?>"</td>
</tr>
<tr>
<td>Institute Name:</td>
<td><input type="text" name="institute_name" value="<?php echo $row['institute_name'];?>"></td>
</tr>
<tr>
<td>Department Name:</td>
<td><input type="text" name="department_name" value="<?php echo $row['department_name'];?>"></td>
</tr>
<tr>
<td>Scholarship:</td>
<td><input type="text" name="scholarship" value="<?php echo $row['scholarship'];?>"></td>
</tr>
<tr>
<td>Scheme:</td>
<td><input type="text" name="scheme" value="<?php echo $row['scheme'];?>"></td>
</tr>
<tr>
<td>Amount:</td>
<td><input type="text" name="amount" value="<?php echo $row['amount'];?>"></td>
</tr>
<tr>
<td><input type="submit" name="update" value="update"></td>
</tr>
</table>
</body>
</html>