<?php
session_start();
include_once '../database/database.php';	
if(isset($_SESSION["username"])){
    include '../layout/header.php';
}else{
    header("location:../login/login.php");
}
$id = '';
$name  = '';
$phone = '';
$email = ''; 
$pro = '';
$CCCC = '';
$hotel = '';


if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    if(isset($_POST['name'])) {$name = $_POST['name'];}
    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
    if(isset($_POST['professional'])) {$pro = $_POST['professional'];}
    if(isset($_POST['CCCC'])) {$CCCC = $_POST['CCCC'];}
    if(isset($_POST['hotel'])) {$hotel = $_POST['hotel'];}
    

    $sql_create = "INSERT INTO speaker (name, phone, email, professional,CCCC)
                VALUES ('$name','$phone','$email','$pro','$CCCC','$hotel')";
    $conn->exec($sql_create);
    $conn = null;
    header('location: http://localhost/conference/conference/speaker/display.php',true);
}

?>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" style="margin:0 auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm diễn giả</h3>
              </div>
              
              <form  action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
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
                <div class="form-group">
                <label for="exampleInputEmail1">Chuyên Ngành</label>
                  <input type="text" class="form-control"  placeholder="Chuyên ngành" name="professional" required>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Số căn cước công dân</label>
                  <input type="text" class="form-control"  placeholder="Số căn cước" name="CCCC" required>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Chuyên Ngành</label>
                  <input type="text" class="form-control"  placeholder="Khách sạn" name="hotel" required>
                </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="submit">Thêm</button>
                </div>
              </form>
            </div>
        </div>
      </div>
</section>
<?php include '../layout/footer.php'?>



