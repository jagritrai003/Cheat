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
	  
$sql = 'INSERT INTO emp4(name,salary) VALUES ("sonoo", 9000)';  
if(mysqli_query($conn, $sql)){  
echo "Record inserted successfully";  
}
else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
	  
mysqli_close($conn);  
?>  
