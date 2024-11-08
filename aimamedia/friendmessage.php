<?php
// session_start();
// include("connection.php");
// $userid=$_SESSION['mobile'];
// $databaseid=$_GET['id'];
// $data=$conn->query("SELECT * FROM editprofile WHERE id='$databaseid'");
// $total=mysqli_num_rows($data);
// if ($total == 1) {
//     $result=mysqli_fetch_assoc($data);
//     $profile_user_image=$result['image'];
//     $profile_user_name=$result['name'];
// }

?>
<!doctype html>
<html lang="en">

<head>
    <title>friend message send</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- my css link -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <div id="userid" style="display: none;">
        <?= $userid ?>
    </div>
    <header>
        <!-- place navbar here -->
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div>
                        <a href="search.php" class="me-3 text-primary text-decoration-none"><i style="font-size: 22px;"
                                class="fa-solid fa-arrow-left"></i></a>
                        <img src="../aimaimage/pexels-photo-1.webp" class="rounded rounded-circle" alt='no image found'
                            height="70px" width='70px'>
                        <span class="fw-bold fs-5 mx-3">
                            profile_user_name
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main>
        <div class="container border ">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class=" d-flex justify-content-center">
                        <div class='border rounded-circle' style='width: 120px; height: 120px;'>
                            <img src="../aimaimage/pexels-photo-1.webp" class="rounded rounded-circle"
                                alt='no image found' height="100%" width='100%'>
                        </div>
                    </div>
                    <h4 class="my-2 text-center text-capitalize">aima media</h4>
                    <p class="text-center p-0 m-0">You're friends on Aima media</p>
                </div>
            </div>
        </div>
    </main>
    <main>
        <!-- message box -->
        <div class="container border border-warning">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="" style="width: 250px;">
                        <p class="text-end w-100 m-0">12 Nov at 7:30 am</p>
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="../aimaimage/pexels-photo-1.webp" class="rounded rounded-circle"
                                    alt='no image found' height="40px" width='40px'>
                            </div>
                            <div>
                                <p class="ms-3 mt-3 px-3 py-1 round rounded-pill" style="background-color: #f2f2f2;">
                                    message </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="d-flex justify-content-end">
                        <div class="" style="width: 250px;">
                            <p class="text-start w-100 m-0">12 Nov at 7:30 am</p>
                            <div class="d-flex justify-content-end align-items-center">
                                <div>
                                    <p class="ms-3 mt-3 px-3 py-1 round rounded-pill"
                                        style="background-color: #f2f2f2;"> message </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <div class="position-sticky bottom-0 py-3">
        <div class="container my-3">
            <div class="d-flex ">
                <div class="rounded rounded-circle bg-danger">image</div>
                <div class=" mx-4 w-100">
                    <input class="form-control rounded-pill" onkeyup="press()" type="text" name="comment" id="message"
                        value="" placeholder="comment">
                </div>
                <button class="btn btn-primary" onclick="send()">SEND</button>
            </div>
        </div>
    </div>
    <script>
        function send() {
            var messagewrite = $("#message").val();
            var userid = $("#userid").text();

        }
    </script>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
</body>

</html>