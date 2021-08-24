<?php
     include("../bg.php");
     if(isset($_POST['sbmLogin'])){
        $email = $_POST['email'];
        $pass  = $_POST['pass_word'];

        //bước 2: Thực hiện truy vấn
        $sql = "SELECT * FROM tbl_admin WHERE email='$email' AND pass_word='$pass'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            header('location:'.SITEURL.'/admin/index.php');
        }
        else{
            header('location:'.SITEURL.'/admin/login.php');
        }
     }
?>