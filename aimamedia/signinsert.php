<?php
// echo "yes";
include("connection.php");

$action = $_POST['action'];
// echo $action;
if ($action == "register") {
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['phone'];
    $password = $_POST['password'];
    // echo $username;
    $data = $conn->query("INSERT INTO `signup`(`id`, `username`, `lastname`, `mobile`, `password`) VALUES (NULL,'$username','$lastname','$mobile','$password')");
    if($data){
        echo 1;
    }
    else{
        echo "not sumbit data";
    }
}
else if ($action == "checkinfo") {
    $mobilelogin = $_POST['mobile'];
$password = $_POST['password'];
    $data = $conn->query("SELECT * FROM signup WHERE mobile='$mobilelogin' and password='$password'");
    $total = mysqli_num_rows($data);
    if ($total == 1) {
        echo 1;
    } else {
        echo 0;
    }
}

