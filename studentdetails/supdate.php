
<?php
$servername = "localhost";
$username = "20mca006";
$password = "2306";
$dbname = "20mca006";

$con = mysqli_connect($servername, $username, $password, $dbname);

$update = "UPDATE studentdet SET Name='alex' WHERE id=2";
if (mysqli_query($con, $update))
{
echo "New record updated successfully";
}
else
{
echo "Error: " . $update . "<br>" . mysqli_error($con);
}

?>