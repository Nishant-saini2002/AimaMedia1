<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <section class="search_bar_box">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="all-india  d-flex justify-content-center align-items-center flex-column text-bg-dark py-1">
                    <p class="m-0 fs-5">All India Media Association</p>
                    <p class="m-0">(Trust Registration No. 393)</p>
                </div>
                <div class="all-india-1 bg-black d-flex justify-content-between align-items-center py-2">
                    <div class="ai_media  border border-warning ">
                        <p class=" border w-100 border-danger"> AIMA Media</p>
                    </div>
                    <div class="search">
                        <input class="rounded-pill px-3 py-1" type="text" name="" id="" placeholder="search">
                    </div>
                    <div class="">
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
                        <a href="" class="text-decoration-none text-white px-2">terms & condition</a>
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
        <header class="">
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
                            <a href="">Edit Profile</a>
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
                <div class="d-flex ">
                    <div
                        class="navbar-toggler-icon_inner d-flex align-items-center justify-content-center text-white w-25">
                        <i class="fa-solid fa-bars" data-bs-toggle="offcanvas" data-bs-target="#one"></i>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class=" w-75 text-center">
                            <img src="../../websiteimage/logo-aima12.png" width="100%" alt="no image found"
                                title="All India Media Association">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second_media_header shadow-lg">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="d-flex justify-content-center align-items-center py-2 light-color">
                        <div class="" style="width: 19%;">
                            <img src="./aimaimage/logo-aima12.png" alt="no image found"
                                title="All India Media Association" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section class="border border-dark">
        <div class="container py-2 position-relative">
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
                        <a href="">COMMITTEE</a>
                        <hr>
                        <a href="">Membership</a>
                        <hr>
                        <a href="">Profile Status</a>
                        <hr>
                        <a href="">Edit Profile</a>
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
                    <a href="">COMMITTEE</a>
                    <a href="">MEMBERSHIP</a>
                    <a href="">PROFILE STATUS</a>
                    <a href="">EDIT PROFILE</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-5 d-flex justify-content-center align-items-center flex-column"
            style="background-color: #f0f2f5; height: max-content !important;">
            <h4 class="text-center text-decoration-underline pb-2">NEW SING UP</h4>
            <P>(Typing in English Alphabet Only)</P>
            <div class="login p-3 px-2" style="width: 50%; background-color: white; height: max-content;">
                <div class="">
                    <!-- <form action=""> -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label fw-bold" for="login">Username *</label>
                                <input type="text" class="py-2 w-100" name="username" id="username" 
                                    title="please fill out this field." placeholder="Your Name" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label fw-bold" for="login">Userlast Name *</label>
                                <input type="text" class="py-2 w-100" name="lastname" id="lastname"
                                    title="please fill out this field." placeholder="Your Lastname" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label fw-bold" for="login">Create Login Id *</label>
                                <input type="tel" class="py-2 w-100" name="login" id="login" maxlength="10"
                                    title="please fill out this field." placeholder="mobile number" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label fw-bold" for="psw">Password *</label>
                                <input type="password" placeholder="Create password" maxlength="20" class="py-2 w-100"
                                    name="pass" id="psw" title="please fill out this field." >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label fw-bold" for="conpass">Confirm Password *</label>
                                <input type="password" placeholder="Confirm password" maxlength="20" class="py-2 w-100"
                                    name="confirmpass" id="confirm" title="please fill out this field." >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <p class="form-label fw-bold" for="" id="error"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group text-center mt-3">
                            <button class="next-btn py-2 px-4" onclick="sign()">Next</button>
                        </div>
                        <script>
                            function sign() {
                                var username = $("#username").val();
                                var lastname = $("#lastname").val();
                                var phone = $("#login").val();
                                var password = $("#psw").val();
                                var confirm = $("#confirm").val();
                                alert(username+""+lastname+""+phone+""+password+""+confirm);
                                
                                // $.post('signinsert.php',{
                                //     action:"register",
                                //     username :username,
                                //     lastname:lastname,
                                //     phone:phone,
                                //     password:password
                                // },function (data){
                                //     alert(data);
                                // });
                                if (phone == "" && password == "" && confirm == "" && username == "" && lastname == "") {
                                    document.getElementById("username").style.borderColor = "red";
                                    document.getElementById("lastname").style.borderColor = "red";
                                    document.getElementById("login").style.borderColor = "red";
                                    document.getElementById("psw").style.borderColor = "red";
                                    document.getElementById("confirm").style.borderColor = "red";
                                    document.getElementById("error").innerText = "please fill the complete form";
                                }
                                else {
                                    if (password == confirm && password != "" && confirm != "") {
                                        $.post(
                                            "signinsert.php",
                                            {
                                                action: "checkinfo",
                                                mobile: phone,
                                                password: password,
                                            },
                                            function (response) {
                                                if (response == 1) {
                                                    document.getElementById("error").innerText = "Credentials already found , Please type new credentials";
                                                }
                                                else {
                                                    alert('wrk');
                                                    $.post('signinsert.php',{
                                                            action:"register",
                                                            username :username,
                                                            lastname:lastname,
                                                            phone:phone,
                                                            password:password
                                                        },
                                                        function (data) {
                                                            if (data == 1) {
                                                                $("#username").val("");
                                                                $("#lastname").val("");
                                                                $("#login").val("");
                                                                $("#psw").val("");
                                                                $("#confirm").val("");
                                                                $("error").val("");
                                                                window.location.href= "login.php";
                                                                
                                                            }
                                                            else {
                                                                document.getElementById("error").innerText = "Some Error Occurred while inserting data";
                                                            }
                                                        }
                                                    )
                                                }
                                            }
                                        )
                                    }
                                    else {
                                        document.getElementById("psw").style.borderColor = 'red';
                                        document.getElementById("confirm").style.borderColor = 'red';
                                        document.getElementById("error").innerText = "please enter the same password and confirm password";
                                    }
                                }

                            }
                        </script>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
    <footer class="text-bg-dark">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="d-flex align-items-center pt-3">
                        <p style="width: 15px; height: 15px; line-height: 8px; padding-left: 2px;"
                            class="  border border-2 border-white   rounded-circle">c</p>
                        <p class="mx-1" style="font-family: 'Times New Roman', Times, serif;"> 2023 AIMA <span
                                style="color: orangered;" class="mx-1 fw-bold">|</span> Mady By AIMA </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>