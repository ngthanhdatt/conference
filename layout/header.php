
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../statics/admin/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../statics/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../statics/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../statics/admin/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="header">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <form class="form-inline ml-3" method="post" action="display_search.php">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" name="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block"><?php echo '' .$_SESSION["username"].'';?></a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview  menu-open" >
            <a class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quản Lý
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin/display.php" class="nav-link">
                  <p>Danh sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/add.php" class="nav-link">
                  <p>Thêm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Khách dự
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../customer/display.php" class="nav-link">
                  <p>Danh sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../customer/add.php" class="nav-link">
                  <p>Thêm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                  Diễn giả                  
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../speaker/display.php" class="nav-link">
                  <p>Danh sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../speaker/add.php" class="nav-link">
                  <p>Thêm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                  Đăng xuất                 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../login/logout.php" class="nav-link">
                  <p>Đăng xuất</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
</div>