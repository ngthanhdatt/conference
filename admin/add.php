<?php
$id = '';
$username = ''; 
$password = ''; 
$name  = ''; 
$phone = ''; 
$email = ''; 

include '../database/database.php';


if(isset($_POST['submit'])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST"){   
    if(isset($_POST['username'])) {$username = $_POST['username'];}

    if(isset($_POST['password'])) {$password = $_POST['password'];}
    
    if(isset($_POST['name'])) {$name = $_POST['name'];}

    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
  }  
    $sql_create = "INSERT INTO admin (username, password, name, phone, email)
                VALUES ('$username', '$password', '$name','$phone','$email')";
    $conn->exec($sql_create);
    $conn = null;
    header('location: http://localhost/conference/conference/admin/display.php',true);

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
              
              <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="card-body">
                <div class="form-group">
                <label for="exampleInputUsername">Tên Đăng Nhập</label>
                <input type="text" class="form-control"  placeholder="Tên đăng nhập" name="username" required>
                  </div>      
                  <div class="form-group">
                <label for="exampleInputPassword1">Mật Khẩu</label>
                  <input type="password" class="form-control"  placeholder="Mật khẩu" name="password" required>
               </div>
                    <div class="form-group">
                <label for="exampleInputName">Tên đầy đủ</label>
                  <input type="text" class="form-control"  placeholder="Tên đầy đủ" name="name" required>
                </div>
                <div class="form-group">
                <label for="exampleInputPhone">Điện thoại</label>
                <input type="text" class="form-control"  placeholder="Điện thoại" name="phone" required>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ Email</label>
                  <input type="email" class="form-control"  placeholder="Email" name="email" required>
                </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                </div>
              </form>
            </div>
        </div>
      </div>
</section>
<?php include '../layout/footer.php'?>



