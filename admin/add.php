<?php
$id = '';
$username = '';
$password = '';
$name  = '';
$phone = '';
$email = '';


if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    include '../database/database.php';
    if(isset($_POST['username'])) {$username = $_POST['username'];}
    if(isset($_POST['password'])) {$password = $_POST['password'];}
    if(isset($_POST['name'])) {$name = $_POST['name'];}
    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
    


    $sql_create = "INSERT INTO admin (username, password, name, phone, email)
                VALUES ('$username', '$password', '$name','$phone','$email')";
    $conn->exec($sql_create);
    $admin_id = $conn->lastInsertId();
    $conn = null;
    header('location: http://localhost/baitap3/admin/display.php',true);
}

?>
<?php include '../layout/header.php'?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" style="margin:0 auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm quản lý</h3>
              </div>
              
              <form  action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                <label for="exampleInputUsername">Tên Đăng Nhập</label>
                <input type="text" class="form-control"  placeholder="Tên đăng nhập" name="username">
                  </div>      
                  <div class="form-group">
                <label for="exampleInputPassword1">Mật Khẩu</label>
                  <input type="password" class="form-control"  placeholder="Mật khẩu" name="password">
               </div>
                    <div class="form-group">
                <label for="exampleInputName">Tên đầy đủ</label>
                  <input type="text" class="form-control"  placeholder="Tên đầy đủ" name="name">
                </div>
                <div class="form-group">
                <label for="exampleInputPhone">Điện thoại</label>
                <input type="text" class="form-control"  placeholder="Điện thoại" name="phone">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ Email</label>
                  <input type="email" class="form-control"  placeholder="Email" name="email">
                </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="them">Submit</button>
                </div>
              </form>
            </div>
        </div>
      </div>
</section>
<?php include '../layout/footer.php'?>



