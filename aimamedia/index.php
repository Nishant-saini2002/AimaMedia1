<?php
session_start();
include("connection.php");
if (isset($_SESSION['mobile'])) {
    $mobileno = $_SESSION['mobile'];
} else {
    header("Location:loginpage.php");
}
if (isset($_POST['logout'])) {
    session_unset();
    echo $_SESSION['mobile'];
    header("location:loginpage.php");
}
include("indexheader.php");
?>
<input type="text" name="" id="userid" value="<?php echo $_SESSION['mobile']; ?>" style="display:none;">
<section>
    <div id="all_post">
        <script>
            var userid = document.getElementById("userid").value;
            // alert(userid);
            showallpost();
            function showallpost() {
                $.post(
                    "showallpost.php",
                    {
                        action: "showallpost",
                        userid: userid
                    },
                    function (data) {
                        $("#all_post").html(data);
                    }
                );
            }
        </script>
    </div>
</section>
</body>

</html>