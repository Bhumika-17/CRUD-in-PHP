<?php
include("connection.php");

if(isset($_GET['sno'])){
	$Sno = $_GET['sno'];
	$query = "DELETE FROM data WHERE Sno='$Sno'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<br><br>Data of Sno $Sno deleted Sucessfully!";
	}else{
		echo "Error deleting data";
	}
}
?>
<html><body><br><br>
