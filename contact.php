<?php
$id = '';
$name  = '';
$phone = '';
$email = '';
$ticker = '';


if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    include 'database/database.php';
    if(isset($_POST['name'])) {$name = $_POST['name'];}
    if(isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if(isset($_POST['email'])) {$email = $_POST['email'];}
    if(isset($_POST['ticker'])) {$ticker = $_POST['ticker'];}
    
    $sql_create = "INSERT INTO customer (name, phone, email, ticker)
                VALUES ('$name','$phone','$email','$ticker')";
    $conn->exec($sql_create);
    $admin_id = $conn->lastInsertId();
    $conn = null;
    $msg = "Đăng kí thành công";
    echo "<script type='text/javascript'>alert('$msg');</script>";
//     header('location: http://localhost/conference/conference/index.php',true);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Science Conference</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="statics/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="statics/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="statics/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="statics/vendors/linericon/style.css">
  <link rel="stylesheet" href="statics/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="statics/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="statics/css/magnific-popup.css">
  <link rel="stylesheet" href="statics/vendors/flat-icon/font/flaticon.css">

  <link rel="stylesheet" href="statics/css/style.css">
</head>
<body>

  <?php 
    include('nav.php');
  ?>

<section class="section-padding bg-gray">
    <div class="container">
      <div class="section-intro text-center pb-98px">
        <p class="section-intro__title">Join the event</p>
        <h2 class="primary-text">Choose Your Ticket</h2>
        <img src="statics/img/home/section-style.png" alt="">
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="text-center card-priceTable">
            <div class="priceTable-header">
              <h3>Normal</h3>
              <p>Attend only first day</p>
              <h1 class="priceTable-price"><span>$</span> 45.00</h1>
            </div>
            <ul class="priceTable-list">
              <li>
                <span class="position"><i class="ti-check"></i></span> Unlimited Entrance
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Comfortable Seat
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Paid Certificate
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> Day One Workshop
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> One Certificate
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="text-center card-priceTable">
            <div class="priceTable-header">
              <h3>Advance</h3>
              <p>Attend only first day</p>
              <h1 class="priceTable-price"><span>$</span> 50.00</h1>
            </div>
            <ul class="priceTable-list">
              <li>
                <span class="position"><i class="ti-check"></i></span> Unlimited Entrance
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Comfortable Seat
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Paid Certificate
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> Day One Workshop
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> One Certificate
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="text-center card-priceTable">
            <div class="priceTable-header">
              <h3>Ultimate</h3>
              <p>Attend only first day</p>
              <h1 class="priceTable-price"><span>$</span> 60.00</h1>
            </div>
            <ul class="priceTable-list">
              <li>
                <span class="position"><i class="ti-check"></i></span> Unlimited Entrance
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Comfortable Seat
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Paid Certificate
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> Day One Workshop
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> One Certificate
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>


  <section class="section-margin--large">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Nhập thông tin</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nhập họ tên của bạn</label>
                  <input class="form-control" name="name" id="name" type="text" placeholder="tên của bạn">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                <label>Nhập địa chỉ email</label>
                  <input class="form-control" name="email" id="email" type="email" placeholder="Địa chỉ email của bạn">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                <label>Nhập số điện thoại</label>
                  <input class="form-control" name="phone" id="phone" type="text" placeholder="Điện thoại">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="dropdown">
                <label for="ticker">Chọn loại vé</label>
                  <select name="ticker" id="ticker">
                    <option value="45.00" selected="selected">$45.00</option>
                    <option value="50.00">$50.00</option>
                    <option value="60.00">$60.00</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm" name="them">Đăng kí tham gia</button>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Ba Đình, Hà Nội</h3>
              <p>639 Hoàng Hoa Thám</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:0961003483">0123456789</a></h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">support@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

<?php include('footer.php');?>

    <script src="statics/vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="statics/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="statics/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="statics/vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
    <script src="statics/js/jquery.ajaxchimp.min.js"></script>
    <script src="statics/js/mail-script.js"></script>
    <script src="statics/js/countdown.js"></script>
    <script src="statics/js/jquery.magnific-popup.min.js"></script>	
    <script src="statics/js/main.js"></script>
</body>
</html>