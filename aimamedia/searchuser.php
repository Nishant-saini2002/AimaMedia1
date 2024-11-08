<?php
    include("connection.php");
    $action=$_POST['action'];

    if ($action == "searchuser") {
        $username=$_POST['username'];

        $data=$conn->query("SELECT * FROM editprofile WHERE name LIKE'%$username%'");
        $total=mysqli_num_rows($data);
        $output="<table class='border border-1 shadow-lg' style='width:100%;'>";

        if ($total>0) {
            while ($result=mysqli_fetch_assoc($data)) {
                $databasename=$result['name'];
                $databaseid=$result['id'];
                $databaseimage=$result['image'];
                // echo $databaseid;
                $output.="
                    <tr>
                        <td>
                            <div class='container'>
                                    <div style='border-bottom: 2px solid silver;' class='d-flex justify-content-between align-items-center w-100'>
                                        <a href='request.php?id=$databaseid' class='text-decoration-none py-2 d-flex justify-content-between w-100 align-items-center'>
                                            <div class='d-flex align-items-center'>
                                                <img src='$databaseimage' alt='no image found' class='rounded rounded-circle' height='40px' width='40px'>
                                                <div class=''>
                                                    <span class='mx-2 fw-bold text-dark' style='font-size: 18px;'>$databasename</span>
                                                    <span class='mx-2 d-block text-dark'>Friend</span>
                                                </div>
                                            </div>
                                            <div>
                                                <i style='color: black; font-size: 18px;' class='fa-solid fa-arrow-right'></i>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                        </td>
                    </tr>
                ";
            }
            $output.="</table>";
        }
        echo $output;
    }

    
?>