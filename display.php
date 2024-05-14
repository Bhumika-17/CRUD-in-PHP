<?php
include("connection.php");

$query = "SELECT * FROM data";
$result = mysqli_query($conn, $query);
$rows = mysqli_num_rows($result);

if($rows!=0){
?>
<html><body>
<h1>Display Data</h1><br>
<table border="2" align="center">
	<tr>
		<th>Sno</th>
		<th>Name</th>
		<th>Age</th>
		<th>Password</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<?php
while($resultdata = mysqli_fetch_assoc($result)){
	?>
	 <tr>
	 	<td><?php echo $resultdata['Sno'];?></td>
	 	<td><?php echo $resultdata['Name'];?></td>
	 	<td><?php echo $resultdata['Age'];?></td>
	 	<td><?php echo $resultdata['Password'];?></td>
	 	<td>
	 		<a href='update.php?sno=<?php echo$resultdata['Sno']?>'>Update</a>
	 	</td>

	 	<td><a href="delete.php?sno=<?php echo $resultdata['Sno']?>">Delete</a></td>
	 </tr>
	 <?php
}
?>


</table><br><br>


</body>
</html>
<?php 
}
else{
	echo "No record found";
}


