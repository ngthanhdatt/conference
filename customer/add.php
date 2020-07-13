<?php
$id = '';
$name  = '';
$phone = '';
$email = ''; $emailErr = "";
$ticker = '';

include '../database/database.php';


if(isset($_POST['submit'])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST"){   
    if(isset($_POST['name'])) {$name = $_POST['name'];}
    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
    if(isset($_POST['ticker'])) {$ticker = $_POST['ticker'];}
    


    $sql_create = "INSERT INTO customer (name, phone, email, ticker)
                VALUES ('$name','$phone','$email','$ticker')";
    $conn->exec($sql_create);
    $conn = null;
    header('location: http://localhost/conference/conference/customer/display.php',true);
  }
}

?>
<?php include '../layout/header.php'?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" style="margin:0 auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm khách tham dự</h3>
              </div>
              
              <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
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
                <label for="exampleInputEmail1">Loại vé</label>
                  <input type="text" class="form-control"  placeholder="Loại vé" name="ticker" required>
                </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Thêm</button>
                </div>
              </form>
            </div>
        </div>
      </div>
</section>
<?php include '../layout/footer.php'?>



