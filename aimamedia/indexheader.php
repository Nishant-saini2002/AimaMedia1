<?php
    // session_start();
    include("connection.php");
    $userid=$_SESSION['mobile'];
    // echo $userid;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIMA Media - Latest News in Hindi, Latest News Today, All India Media Association, Media, Press Club Cards
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        body {
            background-color: #f2f2f2 !important;
        }

        /* ::selection {
            color: rgb(101, 220, 22) !important;
            background: wheat !important;
        } */

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 760px) {
            .swiper-button-next {
                right: 20px;
                transform: rotate(90deg);
            }

            .swiper-button-prev {
                left: 20px;
                transform: rotate(90deg);
            }
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <button name="logout">Logout</button>
    </form>
    <input type="text" name="" id="userid" value="<?=$_SESSION['mobile']?>">
    <section class="search_bar_box">
        <div class="row">
            <div class="col-sm-12 col-md-12 bg-black shadow-lg col-lg-12">
                <div
                    class="all-india  d-flex justify-content-center align-items-center flex-column position-sticky top-0 text-bg-dark py-1">
                    <p class="m-0 fs-5 fw-bold">All India Media Association</p>
                    <p class="m-0">(Trust Registration No. 393)</p>
                </div>
                <div class="all-india-1  d-flex justify-content-between align-items-center py-2">
                    <div class="ai_media">
                        <p class=" p-0 m-0 w-100 "> AIMA Media</p>
                    </div>
                    <div class="search">
                        <input class="rounded-pill px-3 py-1" type="text" name id placeholder="search">
                    </div>
                    <div class>
                        <i class="fa-solid fa-magnifying-glass" style="margin:0  10px !important;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container-fluid py-3 shadow-lg" style="background-color: black;">
            <div class="container">
                <div class="row">
                    <div class="text-capitalize terms col-lg-6">
                        <a href="" class="text-decoration-none text-white px-2">about</a>
                        <a href="" class="text-decoration-none text-white px-2">terms
                            & condition</a>
                        <a href="" class="text-decoration-none text-white px-2">contact</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="making-life-1 text-end">
                            <a href="" class="px-2"><i id="facebook" class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="px-2"><i id="twitter" class="fa-brands fa-twitter"></i></a>
                            <a href="" class="px-2"> <i id="google" class="fa-brands fa-google-plus-g"></i></a>
                            <a href="" class="px-2"><i id="youtube" class="fa-brands fa-youtube"></i></a>
                            <a href="" class="px-2"><i id="insta" class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <header class>
            <div class="meida-header py-2">
                <div>
                    <div id="one" class="offcanvas offcanvas-start ">
                        <div class="offcanvas-header">
                            <h1 class="offcanvas-title"></h1>
                            <button class="btn btn-close" data-bs-dismiss="offcanvas"></button>
                        </div>
                        <div class="offcanvas-body">
                            <a href="">HOME</a>
                            <hr>
                            <a href="">News Upload</a>
                            <hr>
                            <a href="">About Us</a>
                            <hr>
                            <a href="">Members</a>
                            <hr>
                            <a href="">Join Us</a>
                            <hr>
                            <a href="">Membership</a>
                            <hr>
                            <a href="">Gallery</a>
                            <hr>
                            <a href="">Profile Status</a>
                            <hr>
                            <?php
                            
                            $data=$conn->query("SELECT * FROM `editprofile` WHERE mobile='$userid'");
                            if (mysqli_num_rows($data) > 0) {
                                echo "
                                <a href='updateprofile.php'>UPDATE PROFILE</a>
                                ";
                            }else{
                                echo "
                                <a href='editprofile.php'>Edit PROFILE</a>
                                ";
                            }

                            
                            
                            
                            ?>
                            <!-- <a href="">Edit Profile</a> -->
                            <hr>
                            <div class="making-life-1 mt-5">
                                <a href=""><i id="facebook" class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i id="twitter" class="fa-brands fa-twitter"></i></a>
                                <a href=""> <i id="google" class="fa-brands fa-google-plus-g"></i></a>
                                <a href=""><i id="youtube" class="fa-brands fa-youtube"></i></a>
                                <a href=""><i id="insta" class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div
                        class="navbar-toggler-icon_inner d-flex align-items-center justify-content-center text-white w-25">
                        <i class="fa-solid fa-bars" data-bs-toggle="offcanvas" data-bs-target="#one"></i>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class=" w-75 text-center">
                            <img src="./aimaimage/logo-aima12.png" width="100%" alt="no image found"
                                title="All India Media Association">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second_media_header">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="d-flex justify-content-center align-items-center py-2 light-color">
                        <div class style="width: 19%;">
                            <img src="./aimaimage/logo-aima12.png" alt="no image found"
                                title="All India Media Association" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section class="box_home_menu py-4 shadow-lg">
        <div class="container  position-relative">
            <div class="d-flex ">
                <div id="two" class="offcanvas offcanvas-start" style="width: 70vw !important;">
                    <div class="offcanvas-header">
                        <h1 class="offcanvas-title"></h1>
                        <button class="btn btn-close" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <a href="">HOME</a>
                        <hr>
                        <a href="">News Upload</a>
                        <hr>
                        <a href="">About Us</a>
                        <hr>
                        <a href="">Members</a>
                        <hr>
                        <a href="">Join Us</a>
                        <hr>
                        <a href="">Membership</a>
                        <hr>
                        <a href="">Gallery</a>
                        <hr>
                        <a href="">Profile Status</a>
                        <hr>
                        <?php
                            
                            $data=$conn->query("SELECT * FROM `editprofile` WHERE mobile='$userid'");
                            if (mysqli_num_rows($data) > 0) {
                                echo "
                                <a href='updateprofile.php'>UPDATE PROFILE</a>
                                ";
                            }else{
                                echo "
                                <a href='editprofile.php'>Edit PROFILE</a>
                                ";
                            }
                            
                            
                            
                            ?>
                        <hr>
                        <div class="making-life-1 mt-5">
                            <a href=""><i id="facebook" class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i id="twitter" class="fa-brands fa-twitter"></i></a>
                            <a href=""> <i id="google" class="fa-brands fa-google-plus-g"></i></a>
                            <a href=""><i id="youtube" class="fa-brands fa-youtube"></i></a>
                            <a href=""><i id="insta" class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <i class="fa-solid fa-bars" data-bs-toggle="offcanvas" data-bs-target="#two"
                    style="font-size: 20px;"></i>
                <div class="mx-5 menu-tags-link">
                    <a href="">HOME</a>
                    <a href="">ABOUT US</a>
                    <a href="">MEMBERS</a>
                    <a href="">JOIN US</a>
                    <a href="">MEMBERSHIP</a>
                    <a href="">GALLERY</a>
                    <a href="">PROFILE STATUS</a>
                    <?php
                            
                            $data=$conn->query("SELECT * FROM `editprofile` WHERE mobile='$userid'");
                            if (mysqli_num_rows($data) > 0) {
                                echo "
                                <a href='updateprofile.php'>UPDATE PROFILE</a>
                                ";
                            }else{
                                echo "
                                <a href='editprofile.php'>Edit PROFILE</a>
                                ";
                            }

                            
                            
                            
                            ?>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 ">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12 ">
                    <div>
                        <a href="#"
                            class="border border-dark border-1 text-bg-dark px-4 py-2 d-inline-block rounded-pill text-decoration-none ">समाचार</a>
                        <a href="#"
                            class="border border-dark border-1 text-dark  px-4 py-2 d-inline-block rounded-pill text-decoration-none mx-2">मनोरंजन</a>
                        <a href="#"
                            class="border border-dark border-1 text-dark  px-4 py-2 d-inline-block rounded-pill text-decoration-none  mx-2">खेल
                            कूद</a>
                        <a href="#"
                            class="border border-dark border-1 text-dark px-4 py-2 d-inline-block rounded-pill text-decoration-none mx-2 ">स्वास्थ्य</a>
                        <a href="#"
                            class="border border-dark border-1 text-dark px-4 py-2 d-inline-block rounded-pill text-decoration-none mx-2 ">समस्याएं</a>
                        <a href="#"
                            class="border border-dark border-1 text-dark px-4 py-2 d-inline-block rounded-pill text-decoration-none mx-2 ">धर्म-संसार</a>
                        <a href="#"
                            class="border border-dark border-1 text-dark px-4 py-2 d-inline-block rounded-pill text-decoration-none  mx-2">कला</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <div class=" py-3 ">
                        <p class="text-center"><a href="#" class=" text-dark mx-1 fw-bold" style="font-size: 15px;">MOST
                                ACTIVE MEMBERS </a> <span
                                style=" border-right: 4px solid silver; margin: 0 10px;"></span><a href="#"
                                class=" text-dark mx-1 fw-bold" style="font-size: 15px;">DISTRICT COMMITTEES</a>
                        </p>
                        <div class="border">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div id="userid" style="">
        
    </div> -->

    <section>
        <div class="container my-3">
            <div class="d-flex ">
                <div class="round bg-danger">
                    <!-- <p>hello</p> -->
                </div>
                <div class=" mx-4 w-100">
                    <!-- <a href="post.php" class="text-decoration-none"> -->
                    <input class="form-control rounded-pill" type="" name="" value="" placeholder="अपने विचार लिखें...."
                        onclick="writepost()">
                    <!-- </a> -->
                </div>
                <script>
                    function writepost() {
                        

                        var userid = $("#userid").val();
                        alert(userid);
                        if(userid!="") {
                            $.post("checkuser.php", {
                                action: "userexists",
                                userid: userid
                                },
                                function (data) {
                                    alert(data);
                                    if (data == "userexists") {
                                        $.post("checkuser.php", {
                                            action: "checkuserin_editprofile",
                                            userid: userid
                                        },
                                            function (data) {
                                                
                                                if (data == 1) {
                                                    window.location.href = "post.php";
                                                }
                                                else {
                                                    window.location.href = "editprofile.php";
                                                }
                                            }
                                        );
                                    }
                                    else {
                                        window.location.href = "editprofile.php";
                                    }
                                }
                            );
                        }else{  
                            alert ("kuch bhi nahi");
                        }

                    }
                </script>
                <style>
                    .form-control {
                        box-shadow: none !important;
                        border-radius: none !important;
                        padding: 10px 15px !important;

                    }

                    .round {
                        width: 40px !important;
                        height: 40px !important;
                        border-radius: 50% !important;
                    }
                </style>
            </div>
        </div>
    </section>
</body>

</html>