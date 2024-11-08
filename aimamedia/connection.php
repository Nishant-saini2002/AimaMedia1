<?php
$servername="localhost";
$username="root";
$password="";
$dbname="aima";
$conn=mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
    // echo "data successfully";
}
else {
    echo "error";
}
?>