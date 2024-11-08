<?php
session_start();
include("connection.php");
$userid=$_SESSION['mobile'];
// echo $userid;
$data=$conn->query("SELECT * FROM `signup` WHERE mobile='$userid'");
if (mysqli_num_rows($data) == 1) {
    $result=mysqli_fetch_assoc($data);
    $aimaid=$result['id'];
    $data2=$conn->query("SELECT * FROM editprofile WHERE aimaid='$aimaid'");
        $result2=mysqli_fetch_assoc($data2);
            
            $name = $result2['name'];
            $fathername = $result2['fathername'];
            $dateofbirth = $result2['dob'];
            $citizenship = $result2['citizen'];
            $education = $result2['education'];
            $blood = $result2['blood'];
            $userid = $result2['mobile'];
            $email = $result2['email'];
            $image = $result2['image'];
            $address = $result2['address'];
            $city = $result2['city'];
            $state = $result2['state'];
            $pincode = $result2['pincode'];
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" href="index.css">
    <title>update Profile</title>
</head>

<body class="bg-light">
    <div class="row">
        <div class="col-sm-12 bg-dark px-5">
            <div class="d-flex justify-content-around aling-items-center">
                <div class="x3 p-2">
                    <a href="about.php" class="text-white p-2  text-decoration-none font-weight-bold">about</a>
                    <a href="terms &conditions.php" class="text-white p-2  text-decoration-none">Terms&Conditions</a>
                    <a href="contact.php" class="text-white p-2  text-decoration-none">Contact</a>
                </div>
                <div class="bg-">
                    <i class="fa-brands fa-facebook-f text-white p-1 "></i>
                    <i class="fa-brands fa-twitter text-white p-1"></i>
                    <i class="fa-brands fa-google text-white p-1"></i>
                    <i class="fa-brands fa-youtube text-white p-1"></i>
                    <i class="fa-brands fa-instagram text-white p-1"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center fs-1 bg-light grey">
            <span class="fw-bold">AIMA</span>
            <span class="text-danger fw-bold">MEDIA</span>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-12 d-flex justify-content-around aling-items-center bg-white">
            <div>
                <a href=""><i class="fa-solid fa-bars"></i></a>
            </div>
            <div class="x4">
                <a href="#" class="text-dark text-decoration-none p-2 fw-bold">COMMITTEE</a>
                <a href="#" class="text-dark  text-decoration-none p-2  fw-bold">ADD MEMBER</a>
                <a href="#" class="text-dark  text-decoration-none p-2  fw-bold">MY MEMBER LIST</a>
                <a href="editprofile.php" class="text-dark  text-decoration-none p-2  fw-bold">EDIT PROFILE</a>
                <a href="updateprofile.php" class="text-dark  text-decoration-none p-2  fw-bold">UPDATE PROFILE</a>
                <a href="#" class="text-dark  text-decoration-none p-2  fw-bold">ADD NEWS</a>
                <a href="#" class="text-dark  text-decoration-none p-2  fw-bold">UPLOADED NEWS</a>
                <a href="#" class="text-dark  text-decoration-none p-2  fw-bold">PAY NOW</a>
                <a href="#" class="text-dark  text-decoration-none p-2  fw-bold">CHANGE PASSWORD</a>
                <a href="#" class="text-dark  text-decoration-none p-2  fw-bold">LOGOUT</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 p-3 ">
            <div class=" w-100 d-flex justify-content-center">
                <div class="bg-white w-50">
                    <div class="p-5 ">
                        <h6 class=" text-center fw-bold text-decoration-underlime">COMPLETE YOUR INFORMATION</h6>
                    </div>
                    <div class="bg-white m-4 shadow p-3">
                        <div class="accordion " id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Personal Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <form action="" method="post" id="uploadform" enctype="multipart/form-data">
                                    <div class="accordion-body">
                                        <div>
                                            <p class="fw-bold py-2 fs-5 text-dark" style="text-transform: capitalize;">
                                                upload I-Card photo</p>
                                            <label for="uploadimage">
                                                <!-- <img src="../AIMA/images/demo.png" cqasa0lass="w-25 rounded-3 my-3"> -->
                                            </label>
                                            <input type="file" name="image" id="uploadimage">
                                        </div>
                                        
                                        <div>
                                            <label class="fw-bold">AIMA Membership ID*</label>
                                            <input type="text" name="aimaid" id="aimaid" value="<?=$aimaid?>"
                                                class="w-100 fs-5 form-control" disabled>
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold"> Name*</label>
                                            <input type="text" name="name" id="name" value="<?=$name?>"
                                                class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">Father's Name</label>
                                            <input type="text" name="fname" id="fathername" value="<?=$fathername?>"
                                                class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">DOB</label>
                                            <input type="date" name="dateofbirth" id="dob" value="<?=$dateofbirth?>"
                                                class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="my-3">
                                            <label for="" class="form-label fw-bold">Citizenship</label>
                                            <select class="form-select form-select-lg" name="citizen" id="citizen"
                                                value="<?=$citizenship?>">
                                                <option selected>Please Select</option>
                                                <option value="Indian">Indian</option>
                                                <option value="NRI">NRI</option>
                                            </select>
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">Education Details </label>
                                            <textarea name="Education" id="education" type="text"
                                                value="<?=$education?>" cols="90" rows=""
                                                class="form-control"></textarea>
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">Blood group</label>
                                            <input type="text" name="blood" id="blood" value="<?=$blood?>"
                                                class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">Mobile</label>
                                            <input type="tel" name="mobile" maxlength="10" id="mobile"
                                                value="<?=$userid?>" class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">Email *</label>
                                            <input type="email" name="email" id="email" value="<?=$email?>"
                                                class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">Address *</label>
                                            <input type="text" name="address" id="address" value="<?=$address?>"
                                                class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">City *</label>
                                            <input type="text" name="city" id="city" value="<?=$city?>"
                                                class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">State *</label>
                                            <input type="text" name="state" id="state" value="<?=$state?>"
                                                class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="w-100">
                                            <label class="fw-bold">Pincode *</label>
                                            <input type="tel" name="pincode" maxlength="6" value="<?=$pincode?>"
                                                id="pincode" class="w-100 fs-5 form-control">
                                        </div>
                                        <div class="text-center p-5 ">
                                            <!-- <button name="submit" onclick="submit()"
                                                    class="fs-5 btn bg-danger text-white">submit</button> -->
                                            <button class="next-btn py-2 px-4" name="updateprofile"
                                            >update</button>
                                        </div>
                                    </div>
                                    
                                    </form>
                                </div>
                                <?php
                                    if (isset($_POST['updateprofile'])) {
                                        $name=$_POST['name'];
                                        $fname=$_POST['fname'];
                                        $dob=$_POST['dateofbirth'];
                                        $citizen=$_POST['citizen'];
                                        $Education=$_POST['Education'];
                                        $Bloodgroup=$_POST['blood'];
                                        $Mobile=$_POST['mobile'];
                                        $Email=$_POST['email'];
                                        $Address=$_POST['address'];
                                        $City=$_POST['city'];
                                        $state=$_POST['state'];
                                        $pincode=$_POST['pincode'];
                                        $imagename=$_FILES['image']['name'];
                                        $tempname=$_FILES['image']['tmp_name'];
                                        $imageaddress = "./imageupload/".$imagename;
                                        move_uploaded_file($tempname, $imageaddress);
                                        $updatedata=$conn->query("UPDATE `editprofile` SET `name`='$name',`fathername`='$fname',`dateofbirth`='$dob',`citizenship`='$citizen',`education`='$Education',`blood`='$Bloodgroup',`userid`='$Mobile',`email`='$Email',`image`='$imagename',`address`='$Address',`city`='$City',`state`='$state',`pincode`='$pincode' WHERE aimaid='$aimaid'");
                                        if ($updatedata) {
                                            echo "data is updated successfully";
                                            // header("Location:post.php");
                                            echo "<script>window.location.href = 'post.php';</script>";
                                        }
                                        else{
                                            echo "data is not updated successfully";
                                        }
                                    }
                                ?>
                                <style>
                                    .accordion-item {
                                        background-color: #d3d3d3;
                                        color: white;
                                    }
                                </style>

                                <div class="accordion " id="accordionExample">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                Your Media Connection
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                This is the first item's accordion body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Socail Media URL
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse "
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                This is the first item's accordion body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Accept Terms & Conditions
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                This is the first item's accordion body.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>