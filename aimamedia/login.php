<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
</head>
<style>
    form label {
        display: block !important;
    }

    form input {
        width: 100% !important;
        /* border: none; */
        outline: none;
        /* padding: 20px !important; */
    }

    .form-group {
        margin-bottom: 10px;
    }

    form button {
        border: none;
        background-color: orangered;
        color: white;
    }
    form button:hover{
        background-color: #333;
    }

    @media screen and (max-width: 600px) {
        .login {
            width: 100% !important;
        }

    }
    @media screen and (min-width: 600px) and (max-width: 992px) {
        .login {
            width: 100% !important;
        }
        form label{
            font-size: 22px !important;
            
        }
        form input{
            margin-bottom: 10px ;
        }
        form button{
            margin-top: 15px !important;
            font-size: 25px;
            padding: 20px 15px;
        }
        form a,p{
            /* margin-top: 10px !important; */
            font-size: 16px !important;
            
        }
    }
</style>

<body>
    <section>
        <div class=" px-4 d-flex justify-content-center align-items-center"
            style="background-color: #f0f2f5; height: 100vh !important;">
            <div class="w-25 login p-3 px-2" style="background-color: white; height: max-content;">
                <h4 class="text-center text-decoration-underline pb-2">Login Here</h4>
                <div class="" >
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="">Enter User ID (Mobile No.)</label>
                                    <input type="text" class="py-2" name="mobile" maxlength="10" id="mobile" title="please fill out this field.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="">Enter Password</label>
                                    <input type="password" class="py-2" name="pass" id="pass" title="please fill out this field.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="py-2 w-100" name="loginbtn">Login </button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="" class="text-dark fw-bold">Forgot Password ?</a>
                            <p>OR</p>
                            <a href="signuppage.php" class="text-dark fw-bold">New User Sign Up</a>
                        </div>
                    </form>
                </div>
                <?php
                    if(isset($_POST['loginbtn'])){
                        $mobile=$_POST['mobile'];
                        $pass=$_POST['pass'];
                        $data=$conn->query("SELECT * FROM signup WHERE mobile='$mobile' and password='$pass'");
                        $total=mysqli_num_rows($data);
                        echo $total;
                        if($total==1){
                            $_SESSION['mobile']=$mobile;
                            header("Location:index.php");
                        }
                        else{
                            echo "No data found";
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</body>

</html>