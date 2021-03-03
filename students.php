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
$sql = "INSERT INTO students (name,branch,mark)
VALUES ('anu','mca',75)";
$sql = "INSERT INTO students (name,branch,mark)
VALUES ('veena','mba',84)";
$sql = "INSERT INTO students (name,branch,mark)
VALUES ('seema','mca',70)";
$sql = "INSERT INTO students (name,branch,mark)
VALUES ('albin','mtech',60)";

if(mysqli_multi_query($conn,$sql)){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>