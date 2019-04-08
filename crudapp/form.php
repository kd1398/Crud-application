<?php
 include 'connection.php';
 if(isset($_POST['submit']))
 {
	 $a=$_POST['er_no'];
	 $b=$_POST['fullname'];
	 $c=$_POST['institute_name'];
	 $d=$_POST['department_name'];
	 $e=$_POST['scholarship'];
	 $f=$_POST['scheme'];
	 $g=$_POST['amount'];
	 $cmd="insert into sch(er_no,fullname,institute_name,department_name,scholarship,scheme,amount) value('$a','$b','$c','$d','$e','$f','$g')";
	 $result=mysql_query($cmd) or die(mysql_error($con));
	 if($result)
	 {
		 echo "<script>alert('Data inserted successfully');</script>";
	 }
	 else
	 {
		 echo "<script>alert('Error in data insertion');</script>";
	 }
 }
?>
<html>
<body>
<form method="POST" action="table.php">
<table>
<tr>
<td>Er.No:</td>
<td><input type="number" name="er_no" ></td>
</tr>
<tr>
<td>Full Name:</td>
<td><input type="text" name="fullname"</td>
</tr>
<tr>
<td>Institute Name:</td>
<td><input type="text" name="institute_name"></td>
</tr>
<tr>
<td>Department Name:</td>
<td><input type="text" name="department_name"></td>
</tr>
<tr>
<td>Scholarship:</td>
<td><input type="text" name="scholarship"></td>
</tr>
<tr>
<td>Scheme:</td>
<td><input type="text" name="scheme"></td>
</tr>
<tr>
<td>Amount:</td>
<td><input type="text" name="amount"></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</body>
</html>