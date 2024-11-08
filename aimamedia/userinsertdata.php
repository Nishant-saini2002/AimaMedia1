<?php
    session_start();
    include("connection.php");
    $action=$_POST['action'];
    if ($action=="checkinfo") {
        $userid=$_POST['mobile'];
        $data=$conn->query("SELECT * FROM userinfo WHERE userid='$userid'");
        $total=mysqli_num_rows($data);
        if ($total==1) {
            echo 1;
        }
        else {
            echo 0;
        }
    }
    elseif ($action=="update") {
        $userid=$_SESSION['mobile'];
        $username=$_POST['user'];
        $address=$_POST['add'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pincode=$_POST['pincode'];
        $profileupdate=$_POST['updateprofile'];
        $data=$conn->query("UPDATE `userinfo` SET `username`='$username',`address`='$address',`city`='$city',`state`='$state',`pincode`='$pincode' WHERE `userid`='$userid'");
        
        if ($data) { 
           echo 1;
        }
        else {
            echo "data not updated";
        }
    } 
    elseif($action=="insert_userinfo") {
        $userid=$_SESSION['mobile'];
        $username=$_POST['user'];
        $address=$_POST['add'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pincode=$_POST['pin'];
        // $profielinsert=$_POST['insertprofile'];
        $data=$conn->query("INSERT INTO `userinfo`(`userid`,`username`, `address`, `city`, `state`, `pincode`) VALUES ('$userid','$username','$address','$city','$state','$pincode')");
        if ($data) {
            echo "data successfully";
        }
        else {
            echo "error";
        }
    }
    else {
        echo "data not submit";
    }
?>