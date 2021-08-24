<?php
     //Nhập dữ liệu từ user-management.php gửi sang  theo phương thức GET
     include("../bg.php");

     //PHP: mặc định khi sử dụng theo phương thức GET, mọi giá trị lưu trong 1 biết SIÊU TOÀN CỤC ($_GET) > mảng
     //Giá trị truyền sang nằm sau dấu ? có dạng kty=value
     $id_delete = $_GET['id'];

     //BƯớc 2: Thực hiện câu truy vấn
     $sql = "DELETE FROM tbl_admin WHERE id=$id_delete";
     $result = mysqli_query($conn,$sql);

     //Bước 3: Xứ lý kết quả nếu mysqli_query xoá thành công => trả về true
     if($result == true){
        
        //Chuyển hướng đến Quản lý Trang quản trị
         header('location:'.SITEURL.'/admin/user.php');
     }
?>