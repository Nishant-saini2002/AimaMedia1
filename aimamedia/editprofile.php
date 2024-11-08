<?php
session_start();
include("connection.php");
$userid=$_SESSION['mobile'];

// echo $userid;
    // $data3=$conn->query("SELECT * FROM editprofile WHERE userid='$userid'");
    // if (mysqli_num_rows($data3) == 1) {
    //     echo "<script>window.location.href = 'index.php'</script>";
    // }
    // else{

    
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
    <title>editprofile</title>
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
                <a href="#" class="text-dark  text-decoration-none p-2  fw-bold">EDIT PROFILE</a>
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
                                                <p class="fw-bold py-2 fs-5 text-dark"
                                                    style="text-transform: capitalize;">upload I-Card photo</p>
                                                <label for="uploadimage">
                                                    <img src="../AIMA/images/demo.png" cqasa0lass="w-25 rounded-3 my-3">
                                                </label>
                                                <input type="file" name="image" id="uploadimage">
                                            </div>
                                                <?php
                                                    $data=$conn->query("SELECT * FROM `signup` WHERE mobile='$userid'");
                                                    if (mysqli_num_rows($data) == 1) {
                                                        $result=mysqli_fetch_assoc($data);
                                                        $aimaid=$result['id'];
                                                    }
                                                ?>
                                            <div>
                                                <label class="fw-bold">AIMA Membership ID*</label>
                                                <input type="text" name="aimaid" id="aimaid" value="<?=$aimaid?>" class="w-100 fs-5 form-control" disabled>
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold"> Name*</label>
                                                <input type="text" name="name" id="name" class="w-100 fs-5 form-control">
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">Father's Name</label>
                                                <input type="text" name="fname" id="fathername" class="w-100 fs-5 form-control">
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">DOB</label>
                                                <input type="date" name="date" id="dob" class="w-100 fs-5 form-control">
                                            </div>
                                            <div class="my-3">
                                                <label for="" class="form-label fw-bold">Citizenship</label>
                                                <select class="form-select form-select-lg" name="citizen" id="citizen">
                                                    <option selected>Please Select</option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="NRI">NRI</option>
                                                </select>
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">Education Details </label>
                                                <textarea name="education" id="education" cols="90" rows=""
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">Blood group</label>
                                                <input type="text" name="blood" id="blood" class="w-100 fs-5 form-control">
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">Mobile</label>
                                                <input type="tel" name="mobile" maxlength="10" id="" value="<?=$_SESSION['mobile']?>" class="w-100 fs-5 form-control" disabled>
                                                <input type="tel" name="mobile" maxlength="10" id="mobile" value="<?=$_SESSION['mobile']?>" class="w-100 fs-5 form-control d-none" >
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">Email *</label>
                                                <input type="email" name="email" id="email" class="w-100 fs-5 form-control">
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">Address *</label>
                                                <input type="text" name="address" id="address" class="w-100 fs-5 form-control">
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">City *</label>
                                                <input type="text" name="city" id="city" class="w-100 fs-5 form-control">
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">State *</label>
                                                <select name="state" class="form-select" id="state">
                                                    <?php 
                                                        $indianStates = ['select' => '--selected option--',
                                                        'AR' => 'Arunachal Pradesh',
                                                        'AS' => 'Assam',
                                                        'BR' => 'Bihar',
                                                        'CT' => 'Chhattisgarh',
                                                        'GA' => 'Goa',
                                                        'GJ' => 'Gujarat',
                                                        'HR' => 'Haryana',
                                                        'HP' => 'Himachal Pradesh',
                                                        'JK' => 'Jammu and Kashmir',
                                                        'JH' => 'Jharkhand',
                                                        'KA' => 'Karnataka',
                                                        'KL' => 'Kerala',
                                                        'MP' => 'Madhya Pradesh',
                                                        'MH' => 'Maharashtra',
                                                        'MN' => 'Manipur',
                                                        'ML' => 'Meghalaya',
                                                        'MZ' => 'Mizoram',
                                                        'NL' => 'Nagaland',
                                                        'OR' => 'Odisha',
                                                        'PB' => 'Punjab',
                                                        'RJ' => 'Rajasthan',
                                                        'SK' => 'Sikkim',
                                                        'TN' => 'Tamil Nadu',
                                                        'TG' => 'Telangana',
                                                        'TR' => 'Tripura',
                                                        'UP' => 'Uttar Pradesh',
                                                        'UT' => 'Uttarakhand',
                                                        'WB' => 'West Bengal',
                                                        'AN' => 'Andaman and Nicobar Islands',
                                                        'CH' => 'Chandigarh',
                                                        'DN' => 'Dadra and Nagar Haveli',
                                                        'DD' => 'Daman and Diu',
                                                        'LD' => 'Lakshadweep',
                                                        'DL' => 'National Capital Territory of Delhi',
                                                        'PY' => 'Puducherry'];
                                                        foreach($indianStates as $state){
                                                            echo "<option>$state</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="w-100">
                                                <label class="fw-bold">Pincode *</label>
                                                <input type="tel" name="pincode" maxlength="6" id="pincode" class="w-100 fs-5 form-control">
                                            </div>
                                            <div class="text-center p-5 ">
                                                <!-- <button name="submit" onclick="submit()"
                                                    class="fs-5 btn bg-danger text-white">submit</button> -->
                                                    <button class="next-btn py-2 px-4" name="editprofile">Next</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php
                                    if (isset($_POST['editprofile'])) {
                                        $name = $_POST['name'];
                                        $fathername = $_POST['fname'];
                                        $dob = $_POST['date'];
                                        $citizen = $_POST['citizen'];
                                        $education = $_POST['education'];
                                        $blood = $_POST['blood'];
                                        $email = $_POST['email'];
                                        $mobile = $_POST['mobile'];
                                        $address = $_POST['address'];
                                        $city = $_POST['city'];
                                        $state = $_POST['state'];
                                        $pincode = $_POST['pincode'];
                                        $image = $_FILES['image'] ['name'];
                                        $tempname = $_FILES['image'] ['tmp_name'];
                                        $imageaddress = "./imageupload/".$image;
                                       
                                        $data2=$conn->query("SELECT * FROM `editprofile` WHERE aimaid='$aimaid'");
                                        $total=mysqli_num_rows($data2);
                                        if ($total==0) {
                                            $data=$conn->query("INSERT INTO `editprofile`(`id`, `aimaid`, `name`, `fathername`, `dob`, `citizen`, `education`, `blood`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `image`) VALUES (NULL,'$aimaid','$name','$fathername','$dob','$citizen','$education','$blood','$email','$mobile','$address','$city','$state','$pincode','$image')");
                                            if ($data) {
                                                echo "data successfully";
                                                move_uploaded_file($tempname , $imageaddress);
                                                echo "<script>window.location.href = 'post.php'</script>";

                                            }
                                            else{
                                                echo "data not successfully";
                                            }
                                        }
                                        else{
                                            echo "data already persent";
                                        }
                                    }
                                
                                ?>
                                <!-- <script>
                                    document.querySelector("#uploadform").addEventListener('submit', (e) => {
                                        const formData = new formData(e.target);
                                        e.preventDefault();
                                        for (item of formData) {
                                            console.log(item[0], item[1]);
                                        }
                                        $.ajax({
                                            url: "editprofiledata.php",
                                            type: "POST",
                                            data: formData,
                                            contentType: false,
                                            processData: false,
                                            success: function (data) {
                                                if (data == 1) {
                                                    alert("value is persent console log");
                                                }
                                                else {
                                                    alert("value is not fine");
                                                }
                                            }
                                        })
                                    })
                                </script> -->
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
<?php
// }
?>