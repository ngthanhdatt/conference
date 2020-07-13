<?php
include_once '../database/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_GET['id'])) {$id = $_GET['id'];}
    if(isset($_POST['name'])) {$name = $_POST['name'];}
    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
    if(isset($_POST['professional'])) {$pro = $_POST['professional'];}
    if(isset($_POST['CCCC'])) {$CCCC = $_POST['CCCC'];}
    if(isset($_POST['hotel'])) {$CCCC = $_POST['hotel'];}

    $sql = "UPDATE speaker  
            SET ID = '$id',
                name = '$name',
                phone = '$phone',
                email = '$email',
                professional = '$pro',
                CCCC = '$CCCC',
                hotel = '$hotel'
            WHERE ID = '$id'";
    $process = $conn->prepare($sql);
    $process->execute();
    $conn = null;
    header('location: http://localhost/conference/conference/speaker/display.php',true);
}
?>
<?php
  $id = $_GET['id'];
  $sql = "SELECT * FROM speaker WHERE ID='$id'";
  $query = $conn->prepare($sql);
  $query->execute(array('ID' => $id));
   
  while($row = $query->fetch(PDO::FETCH_ASSOC))
  {
      $name = $row['name'];
      $phone = $row['phone'];
      $email = $row['email'];
      $pro = $row['professional'];
      $CCCC = $row['CCCC'];
      $hotel = $row['hotel'];
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
                  <input type="text" class="form-control" name="name" value="<?php echo $name?>">
                </div>
                <div class="form-group">
                <label for="exampleInputPhone">Điện thoại</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $phone?>">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ Email</label>
                  <input type="email" class="form-control"  name="email" value="<?php echo $email?>">
                </div>
                <div class="form-group">
                <label for="exampleInputName">Chuyên ngành</label>
                  <input type="text" class="form-control" name="professional" value="<?php echo $pro?>">
                </div>
                <div class="form-group">
                <label for="exampleInputName">Số căn cước công dân</label>
                  <input type="text" class="form-control" name="CCCC" value="<?php echo $CCCC?>">
                </div>
                <div class="form-group">
                <label for="exampleInputName">Khách sạn</label>
                  <input type="text" class="form-control" name="hotel" value="<?php echo $hotel?>">
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

