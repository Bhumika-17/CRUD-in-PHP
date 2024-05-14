<?php
include("connection.php")?>

<html>
<body>
    <form action="" method="POST">
        Search by Sno : <input type="number" name="sno" placeholder="Enter Sno here to Search" required><br>
        <input type="submit" value="Search"><br>
    </form>

<?php
    include("connection.php");
    
    if(isset($_POST['sno'])){
        $Sno = $_POST['sno'];
    
        // Prepare the SQL statement to select data based on Sno
        $query = "SELECT * FROM data WHERE Sno = $Sno";
        $result = mysqli_query($conn, $query);
    
        if($result) {
            if(mysqli_num_rows($result) > 0) { 
                $resultdata = mysqli_fetch_assoc($result);
                echo "Sno : " . $resultdata['Sno'] . "<br>";
                echo "Name : " . $resultdata['Name'] . "<br>";
                echo "Age : " . $resultdata['Age'] . "<br>";
                // It's generally not recommended to display passwords in this context.
            } else {
                echo "No data found with this Sno";
            }
        } else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    }
    ?>


</body>
</html>
