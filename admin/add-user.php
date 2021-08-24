<?php
if(!empty($_POST)){
    $s_fullname = $s_username = $s_email = $s_password ='';
    if (isset($_POST['fullname'])){
        $s_fullname = $_POST['fullname'];
    }

    if (isset($_POST['username'])){
        $s_username = $_POST['username'];
    }

    if (isset($_POST['email'])){
        $s_email = $_POST['email'];
    }

    if (isset($_POST['password'])){
        $s_password = $_POST['password'];
    }

    //Nhập dữ liệu từ user-management.php gửi sang  theo phương thức GET
    include("../bg.php");

    //PHP: mặc định khi sử dụng theo phương thức GET, mọi giá trị lưu trong 1 biết SIÊU TOÀN CỤC ($_GET) > mảng
    //Giá trị truyền sang nằm sau dấu ? có dạng kty=value
    $id_insert = $_GET['id'];

    //BƯớc 2: Thực hiện câu truy vấn
    $sql = "insert into tbl_admin(full_name, user_name, email, pass_word) value ('$s_fullname', '$s_username','$s_email','$s_password') ";
    $result = mysqli_query($conn,$sql);

    //Bước 3: Xứ lý kết quả nếu mysqli_query xoá thành công => trả về true
    if($result == true){
        header('location:'.SITEURL.'/admin/user.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- version 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <form method="post" action=""><div class="container mt-5">
        <div class="row ">
			<div class="col-md-5 mx-auto ">
			    <div id="second">
			        <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Add Admin</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                           <div class="form-group ">
                                <label for="fullname" ><strong>Full name:</strong></label><br>
                                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Full Name">
                           </div>
                           <div class="form-group">
                                <label for="username" ><strong>Username:</strong></label><br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
                           </div>
                           <div class="form-group">
                                <label for="email" ><strong>Email:</strong></label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1"><strong>Password</strong></label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center mb-5 mt-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Add Admin</button>
                           </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
    </div> </form>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>
</html>
