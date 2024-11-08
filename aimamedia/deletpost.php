<?php
    session_start();
    include("connection.php");
    $userid=$_SESSION['mobile'];
    $postid=$_POST['postid'];
    $data=$conn->query("DELETE FROM post WHERE id='$postid' and mobileno='$userid'");
    if($data){
        $data2=$conn->query("DELETE FROM comment WHERE postid='$postid'");
        if ($data2) {
            echo "data deleted successfully";
        }
        else{
            echo "code problem";
        }
    }
    else{
        echo "data not delet ";
    }
?>