<?php 
    session_start();
    error_reporting(0);
    include("connection.php");
    $action=$_POST['action'];

    if ($action == "find_comment_of_user") {
        $commentid=$_POST['commentid'];
        $data=$conn->query("SELECT * FROM comment WHERE id='$commentid'");
        $result=mysqli_fetch_assoc($data);
        $userid=$result['userid'];

        $data2=$conn->query("SELECT * FROM editprofile WHERE userid='$userid'");
        $result2=mysqli_fetch_assoc($data2);
        $name=$result2['name'];
        echo $name;
    }
    elseif ($action == "showreply") {
        $replycommentid=$_POST['replycommentid'];
        $output="";
        $data=$conn->query("SELECT * FROM comment WHERE reply_postid='$replycommentid'");
        $total=mysqli_num_rows($data);
        if($total > 0){
            while ($result=mysqli_fetch_assoc($data)) {
                $message=$result['message'];
                $userid=$result['userid'];
                $data2=$conn->query("SELECT * FROM editprofile WHERE userid=$userid");
                $result2=mysqli_fetch_assoc($data2);
                $replyname=$result2['name'];
                // echo $replyname;  
                $output.="
                    <div id='replybox$replycommentid'>
                        <div class=' p-2 d-flex ' style='margin-left: 15px;'>
                            <div>
                                <img src='' alt='' height='25px' width='25px' class='rounded rounded-circle'>
                            </div>
                            <div class='px-2 border mx-2 rounded rounded-4'>
                                <span class=' fw-bold'>$replyname</span>
                                <p class=''><span> $message</span></p>
                            </div>
                        </div>
                    </div>
                ";
            }
            echo "$output";
        }
    }
    elseif ($action == "commentlike") {
        $commentid=$_POST['commentid'];
        echo $commentid;
        $userid=$_SESSION['mobile'];
        $data=$conn->query("SELECT MAX(tlike) FROM commentlike WHERE commentid='$commentid'");
        $result=mysqli_fetch_assoc($data);
        $tlike=$result['MAX(tlike)'] + 1;
        // $data2=$conn->query("INSERT INTO `commentlike`(`id`, `userid`, `commentid`, `tlike`) VALUES (NULL,'$userid','$commentid','$tlike')");
        if($data2){
            echo "like successfully";
        }
        else {
            echo "like not like";
        }
    }

   

?>