<?php
$hostname="localhost";
$user="root";
$password="";
$dbname="practice";

$conn=mysqli_connect($hostname,$user,$password,$dbname);
if(!$conn)
{
  die("Coonection Failed".mysqli_connect_error());
}

$sql="SELECT * FROM myemp";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  echo "<table border=1>
  <tr>
  <th>student_name</th>
  <th>student_ID</th>
  <th>username</th>
  <th>password</th>
  <th>age</th>
  </tr>";
  while($row=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo"<td>".$row['student_name']."</td>";
  echo"<td>".$row['student_ID']."</td>";
  echo"<td>".$row['username']."</td>";
  echo"<td>".$row['password']."</td>";
  echo"<td>".$row['age']."</td>";
  echo "</tr>";
  }
  echo "</table>";
}
else
{
  echo "No record";
}
mysqli_close($conn);
?>
