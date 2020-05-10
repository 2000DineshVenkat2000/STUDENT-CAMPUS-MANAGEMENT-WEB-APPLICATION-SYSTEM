<?php
mysql_connect('localhost','root','','scms');
 // mysql_select_db("scms");
$query="select * from foodtable";
$result=mysql_query($query);
?>

<html>
<head><center><h1>
	Food Order Table</h1></center></head>
<body>
	<table>
		<tr></tr>
			<t>
			<th>Place</th>
			<th>Time</th>
			<th>Menu</th>
			<th>Quantity</th>
			</t>
		<?php
		while($rows=mysql_fetch_assoc($result))
		{
		?>
		   <tr>
		   	<td><?php echo $rows['place']; ?></td>
		   	<td><?php echo $rows['time']; ?></td>
		   	<td><?php echo $rows['menu']; ?></td>
		   	<td><?php echo $rows['quantity']; ?></td>
		   </tr>
		   <?php
		}
        ?>
    </table>
</body>
</!DOCTYPE html>
<html>
