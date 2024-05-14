<?php
$conn = mysqli_connect("localhost", "root", "","bhumika");

if($conn){
	echo "Connection Established";
}else{
	echo "Connection Failed";
}

?>


<br>
<a href="insert.php">Insert Data Page</a><br>
<a href="search.php">Search Data Page</a><br>
<a href="display.php">Display Data Page</a><br><br>

