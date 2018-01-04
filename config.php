<?php
$servername="localhost";
$username="root";
$password="incorrect";
$dbname="mydb";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("Connection has failed !" . $conn->connect_error);

}
//echo "Successfully connected !";
?>
