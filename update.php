<?php
include('connection.php');

if(isset($_GET['sno'])){
    $Sno = $_GET['sno'];

    //fetching from database;
    $query = "SELECT * FROM data WHERE Sno='$Sno'";
    $result = mysqli_query($conn, $query);
    $resultdata = mysqli_fetch_assoc($result);

    if($resultdata) {
?>
<html><head><body>
    <h1>Update Data</h1><br>

    <form action="" method="POST">
        Sno : <input type="number" name="sno" value="<?php echo $resultdata['Sno'];?>" disabled> <br>
        Name : <input type="text" name="name" value="<?php echo $resultdata['Name']; ?>" required> <br>
        Age : <input type="number" name="age" value="<?php echo $resultdata['Age']; ?>" required> <br>
        Password : <input type="password" name="password" value="<?php echo $resultdata['Password']; ?>" required> <br>
        <input type="submit" name="submit" value="update">
    </form>
<?php
    } else {
        echo "No data found with this Sno";
        exit;
    }
}

if(isset($_POST['submit'])){
	$Sno = $_GET['sno'] ?? null;
    $Name = $_POST['name'];
    $Age = $_POST['age'];
    $Password = $_POST['password'];

    $query = "UPDATE data SET Name='$Name', Age='$Age', Password='$Password' WHERE Sno='$Sno'";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Value updated Successfully!";
    } else {
        mysqli_error($conn);
        echo "Error updating data";
    }
}
?>
<html><body><br><br>

</body></html>
