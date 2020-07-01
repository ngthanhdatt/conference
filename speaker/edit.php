<?php
$id = '';
$name = '';
$phone = '';
$email = '';
$pro = '';
$CCCC = '';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_GET['id'])) {$id = $_GET['id'];}
    if(isset($_POST['name'])) {$name = $_POST['name'];}
    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
    if(isset($_POST['professional'])) {$pro = $_POST['professional'];}
    if(isset($_POST['CCCC'])) {$CCCC = $_POST['CCCC'];}

    include_once '../database/database.php';
    $sql = "UPDATE speaker  
            SET ID = '$id',
                name = '$name',
                phone = '$phone',
                email = '$email',
                professional = '$pro',
                CCCC = '$CCCC'
            WHERE ID = '$id'";
    $process = $conn->prepare($sql);
    $process->execute();
    $conn = null;
    header('location: http://localhost/conference/conference/speaker/display.php',true);

}
?>
<?php include '../layout/header.php'?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" style="margin:0 auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa diễn giả</h3>
              </div>
              
              <form  action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                <label for="exampleInputUsername">ID</label>
                <?php if(isset($_GET['id'])) {$id = $_GET['id']; echo $id;} ?>
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
                <div class="form-group">
                <label for="exampleInputName">Chuyên ngành</label>
                  <input type="text" class="form-control"  placeholder="Chuyên ngành" name="professional">
                </div>
                <div class="form-group">
                <label for="exampleInputName">Số căn cước công dân</label>
                  <input type="text" class="form-control"  placeholder="Số căn cước" name="CCCC">
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

