<?php
session_start();
include("connection.php");
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
                            <a href="index.php">HOME</a>
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
                            <img src="../../websiteimage/logo-aima12.png" alt="no image found"
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
                    <a href="index.php">HOME</a>
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
    <?php
        $userid=$_SESSION['mobile'];
        $data=$conn->query("SELECT * FROM userinfo WHERE userid='$userid'");
        if (mysqli_num_rows($data)==1) {
            $result=mysqli_fetch_assoc($data);
            $username=$result['username'];
            $address=$result['address'];
            $city=$result['city'];
            $state=$result['state'];
            $pincode=$result['pincode'];
        }
        else {
            $username="";
            $address="";
            $city="";
            $state="";
            $pincode="";
        }
    ?>
    <div>
        <p id="usermobile" style="display: none;">
            <?=$_SESSION['mobile']?>
        </p>
    </div>
    <section>
        <div class=" px-4  py-5 d-flex justify-content-center align-items-center flex-column" style="background-color: #f0f2f5; height: max-content !important;">
            <h4 class="text-center text-decoration-underline pb-2">USER INFO</h4>
            <P>(Typing in English Alphabet Only)</P>
            <div class="login p-3 px-2" style="width: 50%; background-color: white; height: max-content !important;">
                <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="userid">USER ID *</label>
                                    <input type="tel" class="py-2 w-100" value="<?= $_SESSION['mobile'];?>" name=""
                                        id="userid" maxlength="10" required disabled>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="username">User Name *</label>
                                    <input type="text" placeholder="Enter User Name" value="<?=$username?>" maxlength="50" class="py-2 w-100"
                                        name="username" id="username" title="please fill out this field.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="address">Address *</label>
                                    <input type="text" placeholder="Enter Your Address" value="<?=$address?>" maxlength="100"
                                        class="py-2 w-100" name="address" id="address"
                                        title="please fill out this field.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="City">City *</label>
                                    <input type="text" placeholder="Enter Your City" value="<?=$city?>" maxlength="100" class="py-2 w-100"
                                        name="City" id="City" title="please fill out this field.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="state">State *</label>
                                    <input type="text" placeholder="Enter Your State" value="<?=$state?>" maxlength="100" class="py-2 w-100"
                                        name="state" id="state" title="please fill out this field.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="pincode">Pincode *</label>
                                    <input type="tel" placeholder="Enter Your Pincode" value="<?=$pincode?>" maxlength="6" class="py-2 w-100"
                                        name="pincode" id="pincode" title="please fill out this field.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="file" name="profileimage" id="">
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
                                <button class="next-btn py-2 px-4" name="userpost" onclick="userpost()">Next</button>
                            </div>

                        </div>
                    <script>
                        function userpost(){
                            var usermobile =$("#usermobile").text();
                            // alert(usermobile);
                            var username=$("#username").val();
                            var address=$("#address").val();
                            var city=$("#City").val();
                            var state=$("#state").val();
                            var pincode=$("#pincode").val();
                            var profile=$("#profileimage").val();
                            // print_r(profile);
                            if (username!="" && address!="" && city!="" && state!="" && pincode!="") {
                                $.post(
                                    "userinsertdata.php",
                                    {
                                        action: "checkinfo",
                                        mobile : usermobile
                                    },
                                    function (response) {
                                        alert(response);
                                        if (response==1) {
                                            // document.getElementById("error").innerText="Credentials already found , Please type new credentials";
                                            $.post(
                                                "userinsertdata.php",
                                                {
                                                    action : "update",
                                                    user: username,
                                                    add: address,
                                                    city: city,
                                                    state: state,
                                                    pincode: pincode,
                                                    // updateprofile: profile,
                                                },
                                                function (response) {
                                                    alert(response)
                                                    if (response==1) {
                                                        document.getElementById("error").innerText="Record Updated successfully";
                                                        document.getElementById("usernupdatedame").style.borderColor="black";
                                                        document.getElementById("address").style.borderColor="black";
                                                        document.getElementById("City").style.borderColor="black";
                                                        document.getElementById("state").style.borderColor="black";
                                                        document.getElementById("pincode").style.borderColor="black";
                                                    }
                                                    else{
                                                        alert("Record doesnot Updated Successfully");
                                                    }
                                                }
                                            )
                                        }  
                                        else{
                                            $.post(
                                                "userinsertdata.php",
                                                {
                                                    action: "insert_userinfo",
                                                    userid:usermobile,
                                                    user: username,
                                                    add: address,
                                                    city: city,
                                                    state: state,
                                                    pin: pincode,
                                                    // insertprofile: profile,
                                                },
                                                function (response) {
                                                     if(response=="data successfully"){
                                                        alert("Record Submitted");
                                                     }
                                                     else{
                                                        alert("Record not Submitted");

                                                     }
                                                    // window.location="loginpage.php";
                                                }
                                            )  
                                        }
                                    }
                                )
                            }
                            else{
                                document.getElementById("username").style.borderColor="red";
                                document.getElementById("address").style.borderColor="red";
                                document.getElementById("City").style.borderColor="red";
                                document.getElementById("state").style.borderColor="red";
                                document.getElementById("pincode").style.borderColor="red";
                                document.getElementById("error").innerText="please fill all details";
                            }
                        }
                    </script>
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