<?php 
       session_start();
       $userid=$_SESSION['mobile'];
       include("connection.php");
       $action=$_POST['action'];

       if($action=="wholike"){
        $postid=$_POST['postid'];
        $data2=$conn->query("SELECT * FROM `wholike` WHERE postid='$postid' and userid='$userid'");
        $total=mysqli_num_rows($data2);
        if($total==1){
            // echo "<pre>";
            // print_r($data2);
            // echo "</pre>";
            echo "data found";
        }
        else{
            $data=$conn->query("INSERT INTO `wholike`(`whoid`, `postid`, `userid`) VALUES(NULL, '$postid','$userid')");
            if($data){
                echo 1;
            }
            else{
                echo 0;
            }
        }
        
       }
     

?>