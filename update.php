<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_POST['submit']))
{
$ecode = $_POST['cd'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
//create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
 {
die("Connection failed: " . mysqli_connect_error());
}


$sql="UPDATE emp SET salary=salary+5001 WHERE code='$ecode'";
if (mysqli_query($conn, $sql)) 
{
echo "Record update successfully";
} 
else
 {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
