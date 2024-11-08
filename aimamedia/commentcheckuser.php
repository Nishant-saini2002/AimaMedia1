<?php
    include("connection.php");
    $action=$_POST['action'];
    if ($action == "commentuserexists") {
        $userid=$_POST['userid'];

        $data=$conn->query("SELECT * FROM editprofile WHERE userid='$userid'");
        $total=mysqli_num_rows($data);
        if ($total == 1) {
            echo "comment_user_exists";
        }
        else{
            echo "comment_user_error";
        }
    }
    elseif ($action == "commentcheckuserin_editprofile") {
        $userid=$_POST['userid'];
        $data=$conn->query("SELECT * FROM editprofile WHERE userid='$userid'");
        $total=mysqli_num_rows($data);
        if ($total == 1) {
            echo 1;
        }
        else{
            echo 0;
        }
    }


?>