<html>
<body>
<center>
<font color="black">
<table cellspacing="2" cellpadding="10" border="9px solid black">
			<th><font color="black">Er.no</th>
			<th><font color="black">Fullname</th>
			<th><font color="black">Institute name</th>
			<th><font color="black">Department name</th>
			<th><font color="black">Scholarship name</th>
			<th><font color="black">Scheme</th>
			<th><font color="black">Amount</th>
			<th><font color="black">Delete</th>
			<th><font color="black">Update</th>
		<?php
			include 'connection.php';
			$cmd="select * from sch";
			$result=mysql_query($cmd);
			while($row=mysql_fetch_array($result))
			{
				$a=$row['er_no'];
				$b=$row['fullname'];
				$c=$row['institute_name'];
				$d=$row['department_name'];
				$e=$row['scholarship'];
				$f=$row['scheme'];
				$g=$row['amount'];
		?>
		<tr>
			<td><font color="black"><?php echo $a;?></td>
			<td><font color="black"><?php echo $b;?></td>
			<td><font color="black"><?php echo $c;?></td>
			<td><font color="black"><?php echo $d;?></td>
			<td><font color="black"><?php echo $e;?></td>
			<td><font color="black"><?php echo $f;?></td>
			<td><font color="black"><?php echo $g;?></td>
			<td><a href="delete.php?er_no='<?php echo $a;?>'">Delete</td>
			<td><a href="edit.php?er_no='<?php echo $a;?>'">Update</td>
		</tr>
		<?php } ?>
</table>
</center>
</body>
</html>