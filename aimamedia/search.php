<?php
session_start();
// include("indexheader.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="/websiteimage/one.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<style>
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

<body>
    <form action="" method="post">
        <button name="logout">Logout</button>
    </form>
    <div id="userid" style="display:none;">
        <span>
            <?= $_SESSION['mobile'] ?>
        </span>
    </div>
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
                            <a href="editprofile.php" id="editprofile">EDIT PROFILE</a>
                            <a href="updateprofile.php" id="updateprofile">UPDATE PROFILE</a>
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
                            <img src="../aimaimage/logo-aima12.png" width="100%" alt="no image found"
                                title="All India Media Association">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second_media_header shadow-lg">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="d-flex justify-content-center align-items-center py-2 light-color">
                        <div class style="width: 19%;">
                            <img src="../aimaimage/logo-aima12.png" alt="no image found"
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
                        <a href="editprofile.php" id="editprofile">EDIT PROFILE</a>
                        <a href="updateprofile.php" id="updateprofile">UPDATE PROFILE</a>
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
                    <!-- <div onclick="update()" style="display:inline;"> -->
                    <a href="editprofile.php" id="editprofile">EDIT PROFILE</a>
                    <a href="updateprofile.php" id="updateprofile">UPDATE PROFILE</a>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-3">

            <div class=" w-100">
                <div class="border border-danger bg-white rounded-pill d-flex align-items-center">
                    <input class="form-control rounded-start-pill border-0" style="width: 95%;" id="searchuser"
                        onclick="opensearchbar()" onkeyup="showsearchdata()" placeholder="search your friend name">
                    <i style="margin: 0 13px 0 10px; display: none; color: blue;" id="xmark-icon" onclick="xmark()"
                        class="fa-solid fa-xmark"></i>
                </div>
            </div>
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
            <div style="display:none;" id="opensearchbar">
                <div class="w-100 border">
                    <div class="d-flex justify-content-between flex-column shadow-lg p-3">
                        <div class="d-flex justify-content-between">
                            <span class="text-uppercase fw-bold">recent</span>
                            <span class="text-info text-uppercase">see all</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#6b7280"
                                        d="M16 30a14 14 0 1 1 14-14a14 14 0 0 1-14 14Zm0-26a12 12 0 1 0 12 12A12 12 0 0 0 16 4Z" />
                                    <path fill="#6b7280" d="M20.59 22L15 16.41V7h2v8.58l5 5.01L20.59 22z" />
                                </svg>
                                <span>bagga ji</span>
                            </div>
                            <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#000000"
                                    d="M7 12a2 2 0 1 1-4.001-.001A2 2 0 0 1 7 12zm12-2a2 2 0 1 0 .001 4.001A2 2 0 0 0 19 10zm-7 0a2 2 0 1 0 .001 4.001A2 2 0 0 0 12 10z" />
                            </svg>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#6b7280"
                                        d="M16 30a14 14 0 1 1 14-14a14 14 0 0 1-14 14Zm0-26a12 12 0 1 0 12 12A12 12 0 0 0 16 4Z" />
                                    <path fill="#6b7280" d="M20.59 22L15 16.41V7h2v8.58l5 5.01L20.59 22z" />
                                </svg>
                                <span>rajat bhai</span>
                            </div>
                            <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#000000"
                                    d="M7 12a2 2 0 1 1-4.001-.001A2 2 0 0 1 7 12zm12-2a2 2 0 1 0 .001 4.001A2 2 0 0 0 19 10zm-7 0a2 2 0 1 0 .001 4.001A2 2 0 0 0 12 10z" />
                            </svg>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div>
                                <svg width="28" height="28" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#6b7280"
                                        d="M16 30a14 14 0 1 1 14-14a14 14 0 0 1-14 14Zm0-26a12 12 0 1 0 12 12A12 12 0 0 0 16 4Z" />
                                    <path fill="#6b7280" d="M20.59 22L15 16.41V7h2v8.58l5 5.01L20.59 22z" />
                                </svg>
                                <span>sir ji</span>
                            </div>
                            <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#000000"
                                    d="M7 12a2 2 0 1 1-4.001-.001A2 2 0 0 1 7 12zm12-2a2 2 0 1 0 .001 4.001A2 2 0 0 0 19 10zm-7 0a2 2 0 1 0 .001 4.001A2 2 0 0 0 12 10z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        function showsearchdata() {
            $("#showabout").show();
        }
        // search history box open and xmark icon open
        function opensearchbar() {
            $("#opensearchbar").show();
            $("#xmark-icon").show();
        }
        // search history box close and xmark icon close
        function xmark() {
            $("#opensearchbar").hide();
            $("#xmark-icon").hide();
            $("#searchuser").val("");
        }
        // search karte samhe data ko show kar rahe hai.

        function showsearchdata() {
            var username = $("#searchuser").val();
            console.log(username);

            $.post("searchuser.php",
                {
                    action: "searchuser",
                    username: username
                }, function (data) {
                    // alert(data);
                    if (data != "") {
                        console.log("userfound");
                        $("#opensearchbar").html(data);
                    }
                    else {
                        console.log("user not found");
                        $("#opensearchbar").html(data);
                    }
                }

            )
        }
        // function showdata() {
        //     var username = $("#searchuser").val();

        //     $.post("searchuser.php",
        //         {
        //             action: "searchuser",
        //             username: username
        //         }, function (data) {
        //             // alert(data);
        //             if (data != "") {
        //                 // console.log("userfound");
        //                 $("#opensearchbar").html(data);

        //             }
        //             else {
        //                 $("#opensearchbar").html();
        //             }
        //         });
        // }
    </script>
</body>

</html>