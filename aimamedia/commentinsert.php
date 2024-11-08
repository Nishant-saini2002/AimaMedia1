<?php
session_start();
include("connection.php");
$userid = $_SESSION['mobile'];
$postid = $_POST['postid'];
$comment = $_POST['comment'];
$post_commentid = $_POST['post_commentid'];
$data = $conn->query("INSERT INTO `comment`(`id`, `message`, `userid`, `postid`,`reply_postid`) VALUES (NULL,'$comment','$userid', '$postid','$post_commentid')");
if ($data) {
    echo 1;
} else {
    echo 0;
}
?>