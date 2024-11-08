<?php
    include("connection.php");
    $action=$_POST['action'];
    if ($action == "userexists") {
        $userid=$_POST['userid'];
        $data=$conn->query("SELECT * FROM editprofile WHERE mobile='$userid'");
        $total=mysqli_num_rows($data);
        if ($total == 1) {
            echo "userexists";
        }
        else{
            echo "user does not exists";
        }
    }
    elseif ($action == "checkuserin_editprofile") {
        $userid = $_POST['userid'];
        $data=$conn->query("SELECT * FROM editprofile WHERE mobile='$userid'");
        $total=mysqli_num_rows($data);
        if ($total == 1) {
            echo 1;
        }
        else {
            echo 0;
        }
    }

?>