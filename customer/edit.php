<?php
session_start();
include_once '../database/database.php';	
if(isset($_SESSION["username"])){
    include '../layout/header.php';
}else{
    header("location:../login/login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_GET['id'])) {$id = $_GET['id'];}
    if(isset($_POST['name'])) {$name = $_POST['name'];}
    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
    if(isset($_POST['ticker'])) {$ticker = $_POST['ticker'];}


    $sql = "UPDATE customer 
            SET ID = '$id',
                name = '$name',
                phone = '$phone',
                email = '$email',
                ticker = '$ticker'
            WHERE ID = '$id'";
    $process = $conn->prepare($sql);
    $process->execute();
    $conn = null;
    header('location: http://localhost/conference/conference/customer/display.php',true);

}
?>
<?php
  $id = $_GET['id'];
  $sql = "SELECT * FROM customer WHERE ID='$id'";
  $query = $conn->prepare($sql);
  $query->execute(array('ID' => $id));
   
  while($row = $query->fetch(PDO::FETCH_ASSOC))
  {
      $name = $row['name'];
      $phone = $row['phone'];
      $email = $row['email'];
      $ticker = $row['ticker'];
  }
?>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" style="margin:0 auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa khách tham dự</h3>
              </div>
              
              <form  action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                <label for="exampleInputUsername">ID</label>
                <?php if(isset($_GET['id'])) {$id = $_GET['id']; echo $id;} ?>
                  </div>  
                    <div class="form-group">
                <label for="exampleInputName">Tên đầy đủ</label>
                  <input type="text" class="form-control" value="<?php echo $name?>" name="name">
                </div>
                <div class="form-group">
                <label for="exampleInputPhone">Điện thoại</label>
                <input type="text" class="form-control"  value="<?php echo $phone?>" name="phone">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ Email</label>
                  <input type="email" class="form-control" value="<?php echo $email?>" name="email">
                </div>
                <div class="form-group">
                <label for="exampleInputName">Loại Vé</label>
                  <input type="text" class="form-control" value="<?php echo $ticker?>" name="ticker">
                </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="them">Thêm</button>
                </div>
              </form>
            </div>
        </div>
      </div>
</section>
<?php include '../layout/footer.php'?>

