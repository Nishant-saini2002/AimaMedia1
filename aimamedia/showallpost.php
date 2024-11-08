<?php
session_start();
// error_reporting(0);
include("connection.php");
$mobile = $_SESSION['mobile'];
//  echo $mobile;
$action = $_POST['action'];
if ($action == "showallpost") {
    $data = $conn->query("SELECT * FROM post");
    $total = mysqli_num_rows($data);
    if ($total > 0) {
        while ($result = mysqli_fetch_assoc($data)) {
            $id = $result['id'];

            $category = $result['category'];
            // echo $category;
            $headline = $result['headline'];
            $message = $result['message'];
            $mobileno = $result['mobileno'];
            // echo $mobileno;
            $photo = $result['image'];
            // $video = $result['video'];
            $postdate = $result['postdate'];
            $posttime = $result['posttime'];

        $data2=$conn->query("SELECT * FROM `editprofile` WHERE mobile='$mobile'");
        $result2=mysqli_fetch_assoc($data2);
            $usename=$result2['name'];
            $city =$result2['city'];
            $state=$result2['state'];

            // echo $username;
        


?>
            <div class="container py-2">
                <div class="row border border-dark border-2 rounded-2 bg-white py-3">
                    <div class="col-md-12 col-lg-12">
                        <div class=" d-flex justify-content-between align-items-center">
                            <div class="d-flex">
                                <div class="border rounded-circle" style="width: 50px; height: 39px;">
                                    <!-- <img src="../aimaimage/logo-aima12.png" alt="no image found" width="100%"> -->
                                </div>
                                <div class="px-2">
                                    <h5 class="m-0"> <span>
                                            <?= $username ?>
                                        </span> <span>
                                            <?= $city ?>
                                        </span> <span>
                                            <?= $state ?>
                                        </span></h5>
                                    <p class="m-0"><span>
                                            <?= $postdate ?>
                                        </span> / <span>
                                            <?= $posttime ?>
                                        </span>
                                    </p>
                                    <p>
                                        <?= $id ?>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <style>
                                    .delet-post {
                                        display: none;
                                        /* border: 2px solid black; */
                                        position: absolute;
                                        width: 100%;
                                        /* padding: 5px; */
                                    }

                                    .delet-post li {
                                        list-style-type: none;
                                        text-align: center;
                                    }

                                    .delet-post button {
                                        margin: 0 0 7px 0px !important;
                                        padding: 5px 5px !important;
                                        width: 100%;
                                        display: block;
                                        background-color: lightskyblue;
                                        color: white;
                                        border: none;
                                    }

                                    .hover-icon:hover .delet-post {
                                        display: block !important;
                                    }
                                </style>
                                <?php
                                // only show delete post jisne comment dali hai 
                                $output = "<table>";
                                if ($mobile == $mobile) {
                                    $output .= "
                        <tr>
                            <td>
                                <div class='hover-icon position-relative text-center' style='width: 100px;'>
                                    <svg class='' width='30' height='50' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'>
                                        <g fill='none' stroke='currentColor' stroke-width='2'>
                                            <circle cx='4' cy='12' r='1' />
                                            <circle cx='12' cy='12' r='1' />
                                            <circle cx='20' cy='12' r='1' />
                                        </g>

                                    </svg>
                                    <div class='delet-post'>
                                        <button class='' onclick='deletpost($id)'>Delet Post</button>
                                        <button class='' onclick='edit()'>Edit Profile</button>
                                    </div>
                                </div>";
                                }
                                $output .= "</table>";
                                echo $output;

                                ?>
                                <a href="updatepost.php">
                                    <input class="mt-3" type="image" name id="rpt1_LinkButton1_0" class="ml-2"
                                        src="./aimaimage/info-icon.png" style="height:25px;width:30px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="userid" style="display: none;">
                        <?= $userid ?>
                    </div>
                    <div id="postid<?= $id ?>" style="display: none;">
                        <?= $id ?>
                    </div>
                    <script>
                        function edit() {
                            var userid = $("#userid").val();
                            var postid = $("#postid").val();
                            alert(userid);
                            alert(postid);
                            $.post(
                                "editprofile.php", {

                                }
                            )
                        }
                        // delete post only postuser
                        function deletpost(x) {
                            var postid = x;
                            var userid = $("#userid").text();
                            // alert(str_postid);
                            // var postid = $(str_postid).text();
                            alert(postid);
                            $.post(
                                "deletpost.php", {
                                    postid: postid,
                                },
                                function(data) {
                                    alert(data);
                                    if (data == "data deleted successfully") {
                                        alert("data deleted");
                                        showallpost();

                                        function showallpost() {
                                            $.post(
                                                "showallpost.php", {
                                                    action: "showallpost",
                                                    userid: userid
                                                },
                                                function(data) {
                                                    $("#all_post").html(data);
                                                }
                                            );
                                        }
                                    } else {
                                        alert("data not deleted");
                                    }
                                }
                            );
                        }
                    </script>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="pt-3">
                            <p>
                                <a href="#" class="text-decoration-none text-dark">
                                    <?= $headline; ?>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="text-decoration-none text-dark">
                                    <?= $message; ?>
                                </a>
                            </p>
                            <p class="text-end m-0 text-decoration-none">
                                <a href="comment.php">read
                                    more..</a>
                            </p>
                        </div class="m-0 p-0">
                        <div style="text-align:center">
                            <img name="image" src="<?= " imageupload/" . $photo ?>" class="back-img-1" style="width:100%;height:60vh
                !important;">
                        </div>
                        <div class="border py-2 px-3 d-flex justify-content-between">
                            <!-- <div style="font-size: 25px;"><i id="nocolorlike<?= $id ?>" onclick="nocolor(<?= $id ?>)" class="fa-regular fa-thumbs-up"></i></div> -->
                            <div class="likeiconcolor"><i style="font-size: 25px; color:black;" id="likebtn<?= $id ?>"
                                    onclick="likebtn(<?= $id ?>)" class="fa-solid fa-thumbs-up"></i>
                                <span id="tlike<?= $id ?>"></span>
                            </div>
                            <div style="font-size: 25px;"><a href="comment.php?postid=<?= $id ?>" class="text-dark"><i
                                        class="fa-regular fa-comment"></i></a></div>
                            <div style="font-size: 25px;"><i class="fa-solid fa-share-nodes"></i></div>
                        </div>
                        <!-- <style>
                            .likeiconcolor i {
                                /* display: none; */
                            }
                        </style> -->
                        <script>
                            function nocolor(id) {
                                var nocolorid = "nocolorlike" + id;
                                var likebtnid = "likeme" + id;
                                document.getElementById(nocolorid).style.display = "none";
                                document.getElementById(likebtnid).style.display = "block";
                            }

                            function likebtncolor() {

                                alert("i am working");
                                var postid = document.getElementById('postid').innerHTML;

                                // alert(postid);  
                                var likebtnid = "likeme" + postid;
                                alert(likebtnid);
                                // var tlike = "tlike" + id;
                                $.post("wholike.php", {
                                        postid: id,
                                        action: "wholike"
                                    },

                                    function(data) {
                                        alert(data);
                                        if (data == "data found") {
                                            document.getElementById(likebtnid).style.color = "blue";
                                        } else {
                                            document.getElementById(likebtnid).style.color = "black";
                                        }
                                    });
                            }

                            function likebtn(id) {
                                var likebtnid = "likeme" + id;
                                var tlike = "tlike" + id;
                                document.getElementById('likebtnid').style.color = "blue";
                                $.post(
                                    "wholike.php", {
                                        action: "wholike",
                                        postid: id,
                                    },
                                    function(data) {
                                        if (data == "data found") {
                                            document.getElementById('likebtnid').style.color = "blue";
                                        } else {
                                            $.post(
                                                "totallike.php", {
                                                    action: "showtotallikes",
                                                    postid: id,
                                                },
                                                function(data) {
                                                    if (data == 1) {
                                                        $.post(
                                                            "totallike.php", {
                                                                action: "nooflikes",
                                                                postid: id,
                                                            },
                                                            function(data) {
                                                                document.getElementById('tlike').innerHTML = data;
                                                            }
                                                        )
                                                    } else {}
                                                }
                                            )
                                        }
                                    }
                                )
                            }
                        </script>
                    </div>

                </div>

            </div>
<?php
        }
    } else {
        echo "no post found";
    }
}
?>