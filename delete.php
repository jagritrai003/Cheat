<?php  
$host = 'localhost:3306';  
$user = '';  
$pass = '';  
$dbname = 'test';  
	  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
	  
$id=2;  
$sql = "delete from emp4 where id=$id";  
if(mysqli_query($conn, $sql)){  
echo "Record deleted successfully";  
}
else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  
