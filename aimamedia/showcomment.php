<?php
session_start();
$commentuserid = $_SESSION['mobile'];
include("connection.php");

$action = $_POST['action'];
if ($action == "showcomment") {
    $postid = $_POST['postid'];
    // echo $postid;
    $output = "<table class='w-100'>";
    $data = $conn->query("SELECT * FROM `comment` WHERE postid='$postid' and reply_postid=0");
    $total = mysqli_num_rows($data);
    if ($total > 0) {
        while ($result = mysqli_fetch_assoc($data)) {
            $message = $result['message'];
            $userid_comment = $result['userid'];
            // echo $userid;
            $commentid = $result['id'];
            $replycommentid = $result['reply_postid'];
            $data2 = $conn->query("SELECT * FROM `editprofile` WHERE userid='$userid_comment'");
            $total = mysqli_num_rows($data2);
            if ($total >= 1) {
                $result2 = mysqli_fetch_assoc($data2);
                $name = $result2['name'];
                $city = $result2['city'];
                $state = $result2['state'];
                $output .= "
                        <tr>
                            <td>
                                <div class='border '>
                                    <div class='d-flex justify-content-between'> 
                                        <div class='d-flex'>
                                            <div class='p-1'>
                                                <img src='' alt='no image found'
                                                    height='40px' width='40px' class='rounded-circle'>
                                            </div>
                                            <div class='mx-1'>
                                                <div class='d-flex'>
                                                    <div>
                                                        <span class='fw-bold'>$name</span> <span class='fw-bold'>$city $state</span>                                                
                                                    </div>
                                                    <div>";
                if ($commentuserid == $userid_comment) {
                    $output .= "
                                                        <div class='hover-icon position-relative text-center' style='width: 100px;'>
                                                            <svg class=''  width='20' height='30' viewBox='0 0 24 24'
                                                                xmlns='http://www.w3.org/2000/svg'>
                                                                <g fill='none' stroke='currentColor' stroke-width='2'>
                                                                    <circle cx='4' cy='12' r='1' />
                                                                    <circle cx='12' cy='12' r='1' />
                                                                    <circle cx='20' cy='12' r='1' />
                                                                </g>
                                                            </svg>
                                                            <div class='delet-post'>
                                                                <button class='' onclick='deletecomment($commentid)'>Delet comment</button>
                                                            </div>
                                                        </div>";
                }
                $output .= "
                                                    </div>
                                                   
                                                </div>
                                                
                                               
                                                <div>
                                                    $message
                                                </div>
                                                
                                                <div class='pt-1'>
                                                    <div class='d-flex px-1 align-items-center'>
                                                            <i id='commentlike$commentid' onclick='commentlike($commentid)' style='font-size: 18px; color:black;'
                                                            class='fa-solid fa-thumbs-up'></i>
                                                            <i style='font-size: 18px; margin: 0 25px; color:black;'
                                                            class='fa-solid fa-thumbs-down'></i>
                                                        <!--The data of reply() is going to comment.php-->
                                                        <div style='margin-left: 20px; font-size: 18px;' onclick='reply($commentid)'><i class='fa-regular fa-comment'></i>
                                                            reply
                                                        </div>
                                                    </div>
                                                    <div id='replymessage$commentid'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            }
        }
        $output .= "</table>";
        echo $output;
    }
}
