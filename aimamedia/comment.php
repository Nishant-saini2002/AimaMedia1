<?php
session_start();
include ("connection.php");
$postid = $_GET['postid'];
$userid = $_SESSION['mobile'];
// echo $userid;
// echo $postid;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comment page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="/websiteimage/one.png">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        body {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div id="postid" style="display: none;">
        <?= $postid ?>
    </div>
    <div id="userid" style="display: none;">
        <?= $userid ?>
    </div>

    <?php
    $data = $conn->query("SELECT * FROM post WHERE id='$postid'");
    $total = mysqli_num_rows($data);
    if ($total > 0) {
        while ($result = mysqli_fetch_assoc($data)) {
            $photo = $result['image'];
            $posttime = $result['posttime'];
            $postdate = $result['postdate'];
            $postheadline = $result['headline'];
            $postmessage = $result['message'];
            $userid = $result['mobileno'];


        }
    }

    $data3 = $conn->query("SELECT * FROM editprofile WHERE userid='$userid'");
    $total3 = mysqli_num_rows($data3);
    if ($total3 > 0) {
        while ($result3 = mysqli_fetch_assoc($data3)) {
            $name = $result3['name'];
            $city = $result3['city'];
            $state = $result3['state'];
        }
    }
    // replycomment show query select commentid
    $userid = $_SESSION['mobile'];
    $data4 = $conn->query("SELECT * FROM comment WHERE userid='$userid'");
    $total4 = mysqli_num_rows($data4);

    if ($total > 0) {
        while ($result4 = mysqli_fetch_assoc($data4)) {
            $commentid = $result4['id'];
            $replypostid = $result4['reply_postid'];
        }
    }
    ?>
    <div class="container py-2">

        <div class="row  py-3">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class=" d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <div class="border rounded-circle" style="width: 50px; height: 39px;">
                            <!-- <img src="../aimaimage/logo-aima12.png" alt="no image found" width="100%"> -->
                        </div>
                        <div class="px-2">
                            <h5 class="m-0">
                                <?= $name ?><span>
                                </span> <span>
                                    <?= $city ?>
                                </span> <span>
                                    <?= $state ?>
                                </span>
                            </h5>
                            <p class="m-0"><span>
                                </span>
                                <?= $posttime ?>/
                                <?= $postdate ?> <span>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div id="commentid" style="display: none;">
                        <?= $commentid ?>
                    </div>
                    <div>
                        <!-- <button class="btn btn-primary" type="button" > -->
                        <div class=" d-flex ">
                            <div class="hover-icon position-relative text-center" style="width: 100px;">
                                <svg class="" width="30" height="50" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="4" cy="12" r="1" />
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="20" cy="12" r="1" />
                                    </g>
                                </svg>
                                <div class="delet-post">
                                    <button class="" onclick="deletpost($commentid)">Delet Post</button>
                                    <button class="" onclick="edit()">Edit Profile</button>
                                </div>
                            </div>
                            <a href="updatepost.php">
                                <input class="mt-3" type="image" name id="rpt1_LinkButton1_0" class="ml-2"
                                    src="../aimaimage/info-icon.png" style="height:25px;width:30px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="postid">

            </div>
            <div class="container">
                <div class="border border-dark border-2 rounded-3 p-3 bg-white">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="pt-3">
                            <p>
                                <a href="#" class="text-decoration-none text-danger fw-bold">
                                    <?= $postheadline ?>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="text-decoration-none text-dark">
                                </a>
                            </p>
                            <p class=" m-0 " class="mb-3" style="text-align: justify !important;">
                                <a href="" class="text-decoration-none text-dark" style="line-height: 30px; ">
                                    <?= $postmessage ?>
                                </a>
                            </p>
                        </div class="m-0 p-0">
                        <div style="text-align:center">
                            <img name="image" src="<?= " imageupload/" . $photo ?>" class="" style="width:100%;height:60vh
                            !important;">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div><i style="font-size: 18px; color:black;" class="fa-solid fa-thumbs-up"></i></div>
                            <div style="font-size: 18px;"><i class="fa-regular fa-comment"></i></div>
                        </div>
                        <div class="">
                            <div class="">
                                <!-- comment  show -->
                                <div id="allcomments"></div>
                                <script>
                                    function showcommentAfterAdd() {
                                        var postid = $("#postid").text();
                                        var userid = $("#userid").text();
                                        $.post(
                                            "showcomment.php",
                                            {
                                                action: "showcomment",
                                                postid: postid,
                                                userid: userid,
                                            },
                                            function (data) {
                                                $("#allcomments").html(data);
                                            }
                                        )
                                    }
                                    var postid = $("#postid").text();
                                    var userid = $("#userid").text();
                                    $.post("showcomment.php", {
                                        action: "showcomment",
                                        userid: userid,
                                        postid: postid
                                    },
                                        function (data) {
                                            $("#allcomments").html(data);
                                        });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid bg-white position-sticky bottom-0 shadow-lg py-3">
        <div class="container my-3">
            <div class="d-flex ">
                <div class="rounded rounded-circle bg-danger">image</div>
                <div class=" mx-4 w-100">
                    <input class="form-control rounded-pill" type="text" name="comment" id="message" value=""
                        placeholder="comment">

                </div>
                <div id="post_commentid" style="display: none;">hello</div>
                <button class="btn btn-primary" onclick="send()">SEND</button>
            </div>
        </div>
    </div>

    <script>
        // comment reply show

        function reply(commentid) {
            var commentid = commentid;
            var replymessage = "#replymessage" + commentid;
            // alert(replymessage);

            // alert(commentid);

            // ye reply pe click karne per jho bhi user reply comment karga uska naam input per show karayega  
            $.post(
                'commentreply.php',
                {
                    action: 'find_comment_of_user',
                    commentid: commentid
                },
                function (data) {
                    alert(data);
                    if (data != '') {
                        document.getElementById('message').placeholder = '@' + data;
                        document.getElementById('post_commentid').innerText = commentid;
                    }
                }
            );

            $.post(
                'commentreply.php',
                {
                    action: 'showreply',
                    replycommentid: commentid
                },
                function (data) {
                    if (data != 0) {
                        $(replymessage).html(data);
                    }
                }
            )
        }

        // comment and reply_comment delete

        function deletecomment(commentid) {

            var postid = $('#postid').text();
            var userid = $('#userid').text();

            $.post(
                'deletecomment.php',
                {
                    commentid: commentid,
                    postid: postid,
                    userid: userid
                },
                function (data) {
                    alert(data);
                    showcommentAfterAdd();
                }
            )
        }

        // commentlike and show

        function commentlike(commentid) {
            var commentid = 'commentlike' + commentid;
            // var tlike='tlike'+commentid;
            document.getElementById(commentid).style.color = 'blue';
            $.post(
                'commentreply.php',
                {
                    action: 'commentlike',
                    commentid: commentid
                },
                function (data) {
                    alert(data);
                }
            )
        }
    </script>
    <script>
        // comment send or check kar raha hai ki editprofile pe user hai ya nahi 
        function send() {
            var userid = $("#userid").text();
            // alert(userid);
            var message = $("#message").val();
            var postid = $("#postid").text();
            var post_commentid = $("#post_commentid").text();
            $.post(
                "commentcheckuser.php",
                {
                    action: "commentuserexists",
                    userid: userid
                },
                function (data) {
                    // alert(data);
                    if (data == "comment_user_exists") {
                        $.post(
                            "commentcheckuser.php",
                            {
                                action: "commentcheckuserin_editprofile",
                                userid: userid
                            },
                            function (data) {
                                alert(data);
                                if (data == 1) {
                                    $.post(
                                        "commentinsert.php",
                                        {
                                            comment: message,
                                            postid: postid,
                                            post_commentid: post_commentid
                                        },
                                        function (response) {
                                            if (response == 1) {
                                                $("#message").val("");
                                                showcommentAfterAdd();
                                            }
                                            else {
                                                alert("comment error");
                                            }
                                        }
                                    )
                                }
                                else {
                                    window.location.href = "editprofile.php";
                                }
                            }
                        )
                    }
                    else {
                        window.location.href = "editprofile.php";
                    }
                }
            )
        }
    </script>
</body>

</html>