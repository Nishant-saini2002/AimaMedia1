<?php
    include("connection.php");
    $postid=$_POST['postid'];
    $commentid=$_POST['commentid'];
    $userid=$_POST['userid'];
        $data=$conn->query("DELETE FROM `comment` WHERE id='$commentid' and userid='$userid'");
        if ($data) {
            $data2=$conn->query("DELETE FROM `comment` WHERE reply_postid='$commentid'");
            if($data2){
                echo "All comments deleted";
            }
            else{
                echo "Reply not deleted";
            }

        }    
        else{
            echo "data not deleted ";
        }
    

?>