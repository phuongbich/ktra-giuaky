<?php
      include("../bg.php");
      include("header.php");
?>
<div class="bg-light" style=" padding:4% 0% 4% 12% ;">
            <form class="form-inline " style=" margin-left:0% ">
                  <button class="btn btn-outline-orange btn-warning mx-1 my-2 my-sm-0 " type="submit">
                      <a style="text-decoration: none"  class="text-white" href="http://localhost/ktra_giuaky/admin/">Home</a>
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/ktra_giuaky/admin/user.php">User</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-white  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-dark" href="http://localhost/ktra_giuaky/admin/cadres.php">Cadres</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/ktra_giuaky/admin/unit.php">Unit</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 mr-3 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/ktra_giuaky/admin/login.php">LogOut</a>  
                  </button>
            </form>
</div>
<h3 class="text-center mt-3"> Cadres Management</h3></div>  
      <div class="container">
        <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              <button type="button" class="btn btn-warning mb-3">
                  <a style="text-decoration: none" class="text-white" href="http://localhost/ktra_giuaky/admin/add-cadres.php">Add New Cadres</a> 
              </button>
          </div>
        </div>
      <table class="table table-striped mb-5">
        <thead>
            <tr class="text-white bg-dark">
              <th scope="col">#</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone number</th>
              <th scope="col">Address</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // Lặp lại dữ liệu và hiển thị ra bảng
            //Bước 2: Định nghĩa và thực hiện truy vấn
            $sql= "SELECT * FROM tbl_can_bo";
            $result = mysqli_query($conn, $sql);
            //Bước 3: Xử lý dữ liệu trả về
            if(mysqli_num_rows($result) > 0){  
              $i=1; 
              while($row = mysqli_fetch_assoc($result)){
          ?>
                <tr>
                     <th scope="row"><?php echo $i; ?></th>
                     <td><?php echo $row['name']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><?php echo $row['phone_number']; ?></td>
                     <td><?php echo $row['address']; ?></td>
                     <td><a href="update-cadres.php?id=<?php echo $row['id']; ?>"  ><i class="bi bi-capslock-fill mx-3"  ></i></a></td>
                     <td><a href="delete-cadres.php?id=<?php echo $row['id']; ?>" ><i class="bi bi-trash mx-3"></i></a></td>
                </tr>
          <?php
              $i++;
              }
            }
          ?> 
        </tbody>
      </table>
    </div>
<?php
      include("footer.php");
?>