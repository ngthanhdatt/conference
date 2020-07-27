<?php
session_start();
include_once '../database/database.php';	
if(isset($_SESSION["username"])){
    include '../layout/header.php';
}else{
    header("location:../login/login.php");
}
$stmtAdmin = $conn->prepare('SELECT * FROM admin');
$stmtAdmin->execute();
$stmtAdmin->setFetchMode(PDO::FETCH_ASSOC);
$resultAdmin = $stmtAdmin->fetchAll();

$stmtCus = $conn->prepare('SELECT * FROM customer');
$stmtCus->execute();
$stmtCus->setFetchMode(PDO::FETCH_ASSOC);
$resultCus = $stmtCus->fetchAll();

$stmtSpeak = $conn->prepare('SELECT * FROM speaker');
$stmtSpeak->execute();
$stmtSpeak->setFetchMode(PDO::FETCH_ASSOC);
$resultSpeak = $stmtSpeak->fetchAll();

$conn = null;
?>

<div class="content-wrapper">   
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo count($resultAdmin); ?></h3>

                <p>Số lượng Admin</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../admin/display.php" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo count($resultCus); ?></h3>

                <p>Số lượng khách tham dự</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../customer/display.php" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo count($resultSpeak); ?></h3>

                <p>Số lượng diễn giả</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="../speaker/display.php" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


           </div>
        </div>
    </section>
</div>
<?php include '../layout/footer.php'?>