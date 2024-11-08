<?php
session_start();
include("connection.php");
$databaseid = $_GET['id'];
$data = $conn->query("SELECT * FROM editprofile WHERE id='$databaseid'");
$total = mysqli_num_rows($data);
if ($total != "") {
    $result = mysqli_fetch_assoc($data);
    $profile_username = $result['name'];
    $profile_image = $result['image'];
    $profile_city = $result['city'];
    $profile_state = $result['state'];
    $profile_aimaid = $result['aimaid'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>request page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./index.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style>
    .user_back_image {
        background: lightgreen;
        height: 60vh;
        position: relative !important;
    }

    .user_back_image :first-child {
        height: 60px;
        width: 60px;
        right: 30px;
        bottom: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .user_face_profile {
        position: absolute;
        bottom: 30%;
        left: 100px;
    }

    .user_image {
        height: 250px;
        width: 250px;
    }

    #camera_icon {
        font-size: 22px;
    }

    .camera_man_focus_karo {
        position: absolute;
        right: 0;
        bottom: 10px;
    }

    @media screen and (max-width: 600px) {
        #camera_icon {
            font-size: 15px;
        }

        .user_face_profile {
            left: 25px !important;
        }

        .user_image {
            height: 150px;
            width: 150px;
        }

        .user_back_image :first-child {
            height: 40px;
            width: 40px;
            right: 20px;
            bottom: 35px;
        }

        .camera_man_focus_karo {
            position: absolute;
            right: -6%;
            bottom: -6px;
        }
    }
</style>

<body>
    <div class="container-fluid  user_back_image">
        <div class="position-absolute">
            <form action="">
                <label for="camera" class="text-bg-dark rounded-circle  ">
                    <i class="fa-solid fa-camera" id="camera_icon"></i>
                </label>
                <input type="file" name="" id="camera" style="display: none;">
            </form>
        </div>
    </div>
    <div class="user_face_profile">
        <div class="user_image rounded-circle border border-white border-5">
            <img class="rounded-circle" src="<?= "imageupload/" . $profile_image ?>" alt="no image found" height="100%"
                width="100%">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="camera_2"
                    class="d-flex justify-content-center align-items-center rounded-circle text-bg-dark camera_man_focus_karo"
                    style=" height: 50px; width: 50px;">
                    <i class="fa-solid fa-camera" name="updateimage" id="camera_icon"></i>
                    <input type="file" name="requestimage" id="camera_2" style="display: none;">
                </label>
            </form>

            <?php
            if (isset($_Post['updateimage'])) {
                echo "i am working updateimage";
                $imagename = $_FILES['requestimage']['name'];
                $tempimagename = $_FILES['requestimage']['tmp_name'];

                echo $imagename;
                echo $tempimagename;
                $imageaddress = "./imageupload/" . $imagename;
                move_uploaded_file($tempimagename, $address);
            }

            ?>
        </div>
    </div>
    <div class="container mt-4">
        <div>
            <h4 class="pt-5">
                <?= $profile_username ?>
            </h4>
        </div>
        <div class="">
            <div class="">
                <div class=" py-1 px-4 btn text-bg-primary" style="max-width: max-content;">
                    <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="white"
                            d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z" />
                    </svg>
                    <span style="font-weight: 500;">Friends</span>
                </div>
                <a href="friendmessage.php?id=<?= $databaseid ?>"
                    class="text-decoration-none text-bg-primary mx-2 btn  py-1 px-4">
                    <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g id="feMessanger0" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                            <g id="feMessanger1" fill="white">
                                <path id="feMessanger2"
                                    d="m12.942 14.413l-2.56-2.66L5.45 14.48l5.406-5.736l2.56 2.66l4.93-2.727l-5.405 5.736ZM11.899 2C6.432 2 2 6.144 2 11.257c0 2.908 1.434 5.503 3.678 7.2V22l3.378-1.874c.9.252 1.855.388 2.843.388c5.468 0 9.9-4.145 9.9-9.257c0-5.113-4.432-9.257-9.9-9.257Z" />
                            </g>
                        </g>
                    </svg>
                    <span style="font-weight: 500;">Message</span>
                </a>
                <div class=" btn py-1 px-3" style="background-color:lavender;">
                    <div class="w-100 d-flex align-items-center">
                        <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#000000"
                                d="M7 12a2 2 0 1 1-4.001-.001A2 2 0 0 1 7 12zm12-2a2 2 0 1 0 .001 4.001A2 2 0 0 0 19 10zm-7 0a2 2 0 1 0 .001 4.001A2 2 0 0 0 12 10z" />
                        </svg>
                    </div>
                </div>

            </div>
            <hr>
            <a href="#" class="d-block text-decoration-none text-dark-emphasis">
                <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="black"
                        d="M7 12a2 2 0 1 1-4.001-.001A2 2 0 0 1 7 12zm12-2a2 2 0 1 0 .001 4.001A2 2 0 0 0 19 10zm-7 0a2 2 0 1 0 .001 4.001A2 2 0 0 0 12 10z" />
                </svg>
                <span class="mx-2" style="font-weight: 600;">See Bheem About info</span>
            </a>
        </div>
    </div>


    <div class="container">
        <div>
            <span class="btn rounded-pill text-white"
                style="background-color: lightgreen; width: 85px; font-weight: 400;">Post</span>
            <span class="btn rounded-pill text-white mx-3"
                style="background-color: lightgreen; width: 85px; font-weight: 400;">Videos</span>
        </div>
    </div>
    <?php
    $databaseid = $_GET['id'];
    // echo $databaseid;
    $data = $conn->query("SELECT * FROM editprofile WHERE id='$databaseid'");
    $total = mysqli_num_rows($data);
    if ($total != "") {
        $result = mysqli_fetch_assoc($data);
        $profile_username = $result['name'];
        $profile_image = $result['image'];
        $profile_city = $result['city'];
        $profile_state = $result['state'];
        $profile_aimaid = $result['aimaid'];
        $profile_userid = $result['userid'];
        $output = "";
        $data2 = $conn->query("SELECT * FROM post WHERE mobileno='$profile_userid' ORDER BY id DESC");
        // print_r( $data2);
        $total2 = mysqli_num_rows($data2);
        if ($total2 > 0) {
            while ($result2 = mysqli_fetch_assoc($data2)) {
                $showid = $result2['id'];
                $showcategory = $result2['category'];
                $showheadline = $result2['headline'];
                $showmessage = $result2['message'];
                $showimage = $result2['image'];
                $showvideo = $result2['video'];
                $showposttiem = $result2['posttime'];
                $showpostdate = $result2['postdate'];

                $output .= "
                <div class='container py-2'>
    
                    <div class='row  py-3'>
                        <div class='col-sm-12 col-md-12 col-lg-12'>
                            <div class=' d-flex justify-content-between align-items-center'>
                                <div class='d-flex'>
                                    <div class='border mb-5 rounded-circle' style='width: 50px; height: 39px;'>
                                        <img src='imageupload/$profile_image' alt='no image found' width='100%'> 
                                    </div>
                                    <div class='px-2'>
                                        <h5 class='m-0'>
                                            $profile_username<span>
                                            </span> <span>
                                            $profile_city
                                            </span> <span>
                                                $profile_state
                                            </span>
                                        </h5>
                                        <p class='m-0'><span>
                                            </span>
                                            $showposttiem/
                                            $showpostdate <span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div id='commentid' style='display: none;'>commentid</div>
                                <div>
                                    <!-- <button class='btn btn-primary' type='button' > -->
                                    <div class=' d-flex '>
                                        <div class='hover-icon position-relative text-center' style='width: 100px;'>
                                            <svg class='' width='30' height='50' viewBox='0 0 24 24'
                                                xmlns='http://www.w3.org/2000/svg'>
                                                <g fill='none' stroke='currentColor' stroke-width='2'>
                                                    <circle cx='4' cy='12' r='1' />
                                                    <circle cx='12' cy='12' r='1' />
                                                    <circle cx='20' cy='12' r='1' />
                                                </g>
                                            </svg>
                                            <div class='delet-post'>
                                                <button class='' onclick='deletpost()'>Delet Post</button>
                                                <button class='' onclick='edit()'>Edit Profile</button>
                                            </div>
                                        </div>
                                        <a href='updatepost.php'>
                                            <input class='mt-3' type='image' name id='rpt1_LinkButton1_0' class='ml-2'
                                                src='../aimaimage/info-icon.png' style='height:25px;width:30px;'>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id='postid'>
            
                        </div>
                        <div class='container'>
                            <div class='border border-dark border-2 rounded-3 p-3 bg-white'>
                                <div class='col-sm-12 col-md-12 col-lg-12'>
                                    <div class='pt-3'>
                                        <p>
                                            <a href='#' class='text-decoration-none text-danger fw-bold'>
                                                $showheadline
                                            </a>
                                        </p>
                                        <p>
                                            <a href='#' class='text-decoration-none text-dark'>
                                            </a>
                                        </p>
                                        <p class=' m-0 ' class='mb-3' style='text-align: justify !important;'>
                                            <a href='' class='text-decoration-none text-dark' style='line-height: 30px; '>
                                                $showmessage
                                            </a>
                                        </p>
                                    </div class='m-0 p-0'>
                                    <div style='text-align:center'>
                                        <img name='image' src='imageupload/$showimage'class=''
                                        style='width:100%;height:60vh
                                        !important;'>
                                    </div>
                                    <div class='d-flex justify-content-between'>
                                        <div><i style='font-size: 18px; color:black;' class='fa-solid fa-thumbs-up'></i></div>
                                        <div style='font-size: 18px;'><i class='fa-regular fa-comment'></i></div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";

            }
        }
        echo "$output";
    }
    ?>
</body>



</html>