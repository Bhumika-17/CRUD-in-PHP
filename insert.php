<?php
include("connection.php"); // importing the connection file 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INSERT DATA PAGE</title>
</head>
<body>
<h1>Insert Data</h1><br>
<form action="" method="GET">
	Enter No : <input type="text" name="sno" required><br>
	Enter Name : <input type="text" name="name" required><br>
	Enter Age : <input type="number" name="age" required><br>
	Enter Password : <input type="password" name="password" required><br>
	<input type="submit" name="submit" value="Insert Data">
</form>

<?php
if(isset($_GET['submit'])){
	$Sno = $_GET['sno'];
	$Name = $_GET['name'];
	$Age = $_GET['age'];
	$Password = $_GET['password'];

	if($Sno!="" && $Name!="" && $Age!="" && $Password!=""){
		$query="insert into data values('$Sno', '$Name', '$Age', '$Password')";
		$result = mysqli_query($conn, $query);
		if($result){
			echo "Data Submitted Sucessfully!";
		}
	}
}
?>



</body>
</html>
