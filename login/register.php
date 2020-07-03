<?php
$id = '';
$username  = '';
$password = '';
$name = '';
$email = '';
$phone = '';


if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    include '../database/database.php';
    if(isset($_POST['username'])) {$username = $_POST['username'];}
    if(isset($_POST['password'])) {$password = $_POST['password'];}
    if(isset($_POST['name'])) {$name = $_POST['name'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    
    $sql_create = "INSERT INTO admin (username, password, name, phone, email)
                VALUES ('$username', '$password','$name', '$phone', '$email')";
    $conn->exec($sql_create);
    $admin_id = $conn->lastInsertId();
    $conn = null;
    $msg = "Đăng kí thành công";
    echo "<script type='text/javascript'>alert('$msg');</script>";
    header('location: http://localhost/conference/conference/admin/display.php',true);
}

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng nhập vào trang ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../statics/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../statics/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../statics/admin/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a>Admin</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Tên đăng nhập" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Tên đầy đủ" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Điện thoại">
          <div class="input-group-append">
            <div class="input-group-text">  
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">           
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="../statics/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../statics/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../statics/admin/js/adminlte.min.js"></script>

</body>
</html>

