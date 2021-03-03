<?php
$servername="localhost";
$username="20mca006";
$password="2306";
$dbname="20mca006";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if  (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO student (firstname , lastname )
VALUES ('anu' , 'joy')";
$sql = "INSERT INTO student (firstname, lastname )
VALUES ('manu', 'mathew')";
if (mysqli_query($conn, $sql))
 {
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
