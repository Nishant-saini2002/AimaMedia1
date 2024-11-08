<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style>
    #click {
        display: none;
    }

    .image span i {
        font-size: 30px;
    }
</style>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row mx-2">
            <div class="col-lg-4">
                <div class="d-flex  justify-content-between py-2">
                    <div class="d-flex align-items-center ">
                        <a href="index.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" stroke="#ea580c" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m11 5l-7 7l7 7m-7-7h16" />
                            </svg>
                        </a>
                        <!-- <i class="fa-solid fa-arrow-left"></i> -->
                        <h6 class="mx-3 text-uppercase fw-semibold">Update Post</h6>
                    </div>
                    <button class="btn bg-dark text-white text-uppercase py-2 px-3" name="submitme"
                        id="postbtn">post</button>
                </div>
                <!-- <input type="tel" name="mobile" id="mobile" style="width:100%; padding:15px;" placeholder="Please enter your mobileno."> -->
                <hr>
                <div class="">
                    <div class="">
                        <input  type="radio" name="समाचार" id="समाचार" value="समाचार">
                        <label  for="समाचार">समाचार</label>
                        <input  type="radio" name="समाचार" id="समाचार1" value="मनोरंजन">
                        <label  for="समाचार1">मनोरंजन</label>
                        <input  type="radio" name="समाचार" id="समाचार2" value="खेल कूद">
                        <label  for="समाचार2">खेल कूद</label>
                        <input  type="radio" name="समाचार" id="समाचार3" value="स्वास्थ्य">
                        <label  for="समाचार3">स्वास्थ्य</label>
                    </div>
                    <div class="my-2">
                        <input onclick="clickme()" type="radio" name="समाचार" id="समाचार4" value="समस्याएं">
                        <label for="समाचार4">समस्याएं</label>
                        <input  type="radio" name="समाचार" id="समाचार5" value="धर्म-संसार">
                        <label  for="समाचार5">धर्म-संसार</label>
                        <input  type="radio" name="समाचार" id="समाचार6" value="कला">
                        <label  for="समाचार6">कला</label>
                    </div>
                    <div id="click">
                        <input type="text" name="" id="" placeholder="Enter Subject Here"
                            class="w-100 form-control  fs-5 text-secondary text-capitalize my-3">
                    </div>

                    <div class=" d-flex justify-content-center">
                        <div style="width: 88%;">
                            <input type="text" class="form-control fw-bold fs-5 text-secondary text-capitalize my-3"
                                placeholder="headline...." name="headline" id="headline">
                            <textarea class="border rounded-2 p-1" style="width: 100%; outline: none; border:none;"
                                name="message" id="message" cols="42" rows="7" class="text-capitalize fs-4"
                                placeholder="type your post..."></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div>
                    <span class="image">
                        <label for="photos">
                            <span class="my-2 d-inline-block">
                                <i class="fa-solid fa-image"></i>
                                <span class="fw-bold fs-5 mx-2 text-capitalize">photo</span>
                            </span>
                            <span class="d-block">only 5 photos</span>
                        </label>
                        <input type="file" name="photo" id="photos" style="display: none;" multiple>
                    </span>
                </div>
                <div class="mt-3">
                    <span class="image">
                        <label for="videos">
                            <span class="my-2  d-inline-block">
                                <i class="fa-solid fa-video"></i>
                                <span class="fw-bold fs-5 mx-2 text-capitalize">video</span>
                            </span>
                            <span class="d-block">Max: Size 10MB</span>
                        </label>
                        <input type="file" name="video" id="videos" style="display: none;">
                    </span>
                </div>
                <a href="#" class="text-danger d-block pt-2">Video Compressor</a>
            </div>
        </div>
    </form>
</body>

</html>