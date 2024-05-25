<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sheila Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-info badge-pill">2</div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-book-multiple-variant"></i>
            <span class="menu-title">Data Master</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/registrasi.php">Registrasi</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/input_gelombang.php">Input Gelombang</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#daftar" aria-expanded="false" aria-controls="daftar">
            <i class="mdi mdi-tooltip-edit"></i>
            <span class="menu-title">Pendaftaran</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="daftar">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/daftar_baru.php">Daftar Baru</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/data_siswa.php">Data Siswa</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/data_kaos.php">Data Kaos</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#pem" aria-expanded="false" aria-controls="pem">
            <i class="mdi mdi-credit-card"></i>
            <span class="menu-title">Pembayaran</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="pem">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/transaksi.php">Transaksi</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/data_pembayaran.php">Data Pembayaran</a></li>
              
            </ul>
            
          </div>
          <li class="nav-item">
          <a class="nav-link" href="pages/logout.php">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Log Out</span>
          </a>
        </li>
        </li>
        <ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, Pendaftaran Shella</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Apr 26, 2024 - Apr 20, 2024</h4>
            </li>
            <li class="nav-item dropdown mr-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown mr-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="images/faces/face5.jpg" alt="profile"/>
                <span class="nav-profile-name">Shella Santika</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-plus-circle-outline"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-web"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-clock-outline"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
     
      
      <div class="main-panel">
        <div class="content-wrapper">
        <?php
$query = "SELECT COUNT(*) AS total_siswa FROM data_siswa";
$result = mysqli_query($koneksi, $query);

if (!$result) {
  die ("Query Error: " . mysqli_error($koneksi));
}

$row = mysqli_fetch_assoc($result);
$total_siswa = $row['total_siswa'];

$koneksi->close();
?>
          <div class="row">
            <div class="col-12 col-xl-6 grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                   
                  </div>
                </div>



                <div class="col-md-6 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h3><?php echo $row['total_siswa'];?></h3>
                      <div class="d-flex align-items-center justify-content-between flex-wrap">
                     Jumlah Pendaftar  
                      </div>
                     
                      
                    </div>
                  </div>
                </div>

                
                <div class="col-md-6 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h3>5</h3>
                      <div class="d-flex align-items-center justify-content-between flex-wrap">
                        Jumlah Jurusan
                      </div>        
          
                    </div>
</div>
</div>
<?php
          include 'koneksi.php';
          $query_tanggal = "SELECT tanggal FROM data_bayar ORDER BY tanggal DESC LIMIT 1";
          $result_tanggal = mysqli_query($koneksi,$query_tanggal);
          if (!$result_tanggal) {
            die ("Query error: " . mysqli_error($koneksi));
          }
          $row_tanggal =mysqli_fetch_assoc($result_tanggal);
          $tanggal = $row_tanggal['tanggal'];
          $query = "SELECT SUM(bayar - kembalian)AS total_income FROM data_bayar WHERE tanggal = '$tanggal'";
          $result = mysqli_query($koneksi, $query);

          if(!$result){
            die ("Query error: " . mysqli_error($koneksi));
          }
          $row = mysqli_fetch_assoc($result);
          $total_income=$row['total_income'];
          ?>
          <div class="col-md-6 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h3><?php echo number_format($total_income,0,',','.');?></h3>
                      <div class="d-flex align-items-center justify-content-between flex-wrap">
                        Income Perhari
                      </div>        
          
          </div>


        
         
            <?php
            include 'koneksi.php';

            $query = "SELECT SUM(bayar - kembalian)AS total_pengurangan FROM data_bayar";
            $result = mysqli_query($koneksi, $query);
            if (!$result) {
              die ("Query error: " . mysqli_error($konksi));
            }
            $row = mysqli_fetch_assoc($result);
            $total_pengurangan = $row['total_pengurangan'];
            $koneksi->close();
            ?>
            <div class="d-sm-flex-justify-content-center justify-content-sm-between">
            <span class="d-block text-center text-sm-left d-sm-inline-block" style="font: size 20px;"></span>
            </div>
          

          </div>
          <!-- row end -->
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <footer class="footer">
          <div style="background-color:#BACD92; widht:20px; height:50px; align-items:center; color:black;" class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class=" d-block text-center text-sm-left d-sm-inline-block" style="font-size:30px;">Rp.<?php echo number_format($total_pengurangan,0,',','.');?></span>
          </div>
        </footer>
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>