<?php
      include("../bg.php");
      include("header.php");
?>
<div class="bg-light" style=" padding:4% 0% 4% 12% ;">
            <form class="form-inline " style=" margin-left:0% ">
                  <button class="btn btn-outline-orange btn-white mx-1 my-2 my-sm-0 " type="submit">
                      <a style="text-decoration: none"  class="text-dark" href="http://localhost/ktra_giuaky/admin/">Home</a>
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/ktra_giuaky/admin/user.php">User</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/ktra_giuaky/admin/cadres.php">Cadres</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/ktra_giuaky/admin/unit.php">Unit</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 mr-3 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/ktra_giuaky/admin/login.php">LogOut</a>  
                  </button>
            </form>
</div>
<div class="container mb-4">
          <div class="row text-center mt-5 ">
               <div class="col-md-4  py-5 " style="border-radius:10px; background-color: #fc2516b7;;">
                    <h2>
                         <?php
                             $sql1 = "SELECT *FROM tbl_admin";
                             $result = mysqli_query($conn, $sql1);
                             $count_user = mysqli_num_rows($result);
                             echo $count_user;
                         ?>
                    </h2>
                    <a href="http://localhost/ktra_giuaky/admin/user.php" style="text-decoration: none" class="text-dark">User</a>
               </div>
               <div class="col-md-4 py-5" style="border-radius:10px; background-color:  #85dbebef;">
                    <h2>
                         <?php
                             $sql2 = "SELECT *FROM tbl_can_bo";
                             $result = mysqli_query($conn, $sql2);
                             $count_can_bo = mysqli_num_rows($result);
                             echo $count_can_bo;
                         ?>
                    </h2>
                    <a href="http://localhost/ktra_giuaky/admin/cadres.php" style="text-decoration: none" class="text-dark">Cadres</a>
               </div>
               <div class="col-md-4 py-5" style="border-radius:10px; background-color: #01ffb386;">
                    <h2>
                         <?php
                             $sql3 = "SELECT *FROM tbl_donvi";
                             $result = mysqli_query($conn, $sql3);
                             $count_donvi = mysqli_num_rows($result);
                             echo $count_donvi;
                         ?>
                    </h2>
                    <a href="http://localhost/ktra_giuaky/admin/unit.php" style="text-decoration: none" class="text-dark">Unit</a>
               </div>
          </div>
     </div>
<?php
      include("footer.php");
?>
