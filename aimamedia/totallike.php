<?php 
    session_start();
    $userid=$_SESSION['mobile'];
    include("connection.php");
    $action=$_POST['action'];

    if($action=="showtotallikes"){
        $postid=$_POST['postid'];
        $data2=$conn->query("SELECT MAX(totallike) from tlike where postid='$postid'");
        $result=mysqli_fetch_assoc($data2);
        $totallike=$result['MAX(totallike)'] + 1;
        $data=$conn->query("INSERT INTO `tlike`(`id`, `postid`, `totallike`) VALUES(NULL, '$postid','$totallike')");
        if($data){
            echo 1;
        }
        else{
            echo 0;
        }
    }
    else if($action=="nooflikes"){
        $postid=$_POST['postid'];
        $data=$conn->query("SELECT MAX(totallike) FROM `tlike` WHERE postid='$postid'");
        $result=mysqli_fetch_assoc($data);
        $totallike=$result['MAX(totallike)'];
        echo $totallike; 
    }
?>