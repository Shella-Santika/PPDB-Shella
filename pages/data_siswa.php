<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <!-- partial:../../partials/_sidebar.html -->
    
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
      <li class="nav-item">
          <a class="nav-link" href="../admin.php">
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
              <li class="nav-item"> <a class="nav-link" href="registrasi.php">Registrasi</a></li>
              <li class="nav-item"> <a class="nav-link" href="input_gelombang.php">Input Gelombang</a></li>
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
              <li class="nav-item"> <a class="nav-link" href="daftar_baru.php">Daftar Baru</a></li>
              <li class="nav-item"> <a class="nav-link" href="data_siswa.php">Data Siswa</a></li>
              <li class="nav-item"> <a class="nav-link" href="data_kaos.php">Data Kaos</a></li>
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
              <li class="nav-item"> <a class="nav-link" href="transaksi.php">Transaksi</a></li>
              <li class="nav-item"> <a class="nav-link" href="data_pembayaran.php">Data Pembayaran</a></li>
              
            </ul>
            
          </div>
          <li class="nav-item">
          <a class="nav-link" href="pages/logout.php">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Log Out</span>
          </a>
        </li>
      </ul>
    </nav>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="../index.html"><img src="../images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../images/logo-mini.svg" alt="logo"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, Sheil Santka</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
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
                      <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
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
                      <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
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
                      <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
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
                <img src="../images/faces/face5.jpg" alt="profile"/>
                <span class="nav-profile-name">Eleanor Richardson</span>
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
      <!-- main-panel ends -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Registrasi </h3>
            
            
          </div>


          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                      <thead style="background-color:#BACD92;">
                        <tr align="center">
                          <th> No Pendaftaran </th>
                          <th> Tanggal </th>
                          <th> Nama </th>
                          <th> Asal Sekolah </th>
                          <th> Jurusan </th>
                          <th> Action </th>

                        </tr>
                      </thead>
                      <?php
                      include '../koneksi.php';
                    
                  

                      $query = "SELECT * FROM data_siswa ORDER BY id ASC";
                      $result = mysqli_query($koneksi, $query);
                      if (!$result) {
                        die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                      }

                      $no = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $edit_modal_id = "editModal" . $row['id']; // ID modal yang unik
                      ?>
                        <tbody style="background-color:white;">
                          <td style="text-align: center;"><?php echo $row['no_pendaftaran']; ?></td>
                          <td><?php echo $row['tanggal']; ?></td>
                          <td><?php echo $row['nama_siswa']; ?></td>
                          <td><?php echo $row['asal_sekolah']; ?></td>
                          <td><?php echo $row['jurusan']; ?></td>
                          <td style="text-align: center;">
                            <button type="button" class="btn btn-warning mdi mdi-tooltip-edit" data-toggle="modal"  data-target="#<?php echo $edit_modal_id; ?>"></button>
                            <a title="hapus" class="btn btn-danger mdi mdi-delete" style="font-size: 20px;" href="proses/pros_hapus_siswa.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"></a>&nbsp;
                          </td>
                        </tbody>

                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation" action="proses/pros_edit_baru.php" method="post">
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <label for="firstName">No Pendaftaran</label>
                                      <input type="text" class="form-control" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="">
                                      <div class="invalid-feedback">
                                        Valid first name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Tanggal</label>
                                      <input type="text" class="form-control" name="tanggal" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="" readonly>
                                      <input type="hidden" name="id" value="<?php echo $row['tanggal']; ?>" />
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Nama Siswa</label>
                                      <input type="text" class="form-control" name="nama_siswa" id="lastName" placeholder="" value="<?php echo $row['nama_siswa']; ?>" required="">
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Asal Sekolah</label>
                                      <input type="text" class="form-control" name="asal_sekolah" id="lastName" placeholder="" value="<?php echo $row['asal_sekolah']; ?>" required="">
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                      </div>
                                   <div class="col-md-12 bm-3">
                                    <label for="country">Jurusan </label>
                                     <select class="custom-select d-block w-100" name="jurusan" id="country" required="">
                                      <option value="">Pilih...</option>
                                      <option <?php if ($row['jurusan'] == 'REKAYASA PERANGKAT LUNAK') echo 'selected'; ?>> REKAYASA PERANGKAT LUNAK</option>
                                      <option <?php if ($row['jurusan'] == 'AKUTANSI KEUANGAN LEMBAGA') echo 'selected'; ?>> AKUTANSI KEUANGAN LEMBAGA</option>
                                      <option <?php if ($row['jurusan'] == 'MANAJEMEN PERKANTORAN') echo 'selected'; ?>> MANAJEMEN PERKANTORAN</option>
                                      <option <?php if ($row['jurusan'] == 'DESAIN KOMUNIKASI VISUAL') echo 'selected'; ?>> DESAIN KOMUNIKASI VISUAL</option>
                                      <option <?php if ($row['jurusan'] == 'PEMASARAN') echo 'selected'; ?>> PEMASARAN</option>
                      </select>
                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                      
                                    </div>
                      </div>
                      </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      <?php
                        $no++;
                      }
                      ?>



                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- TUTUP NAVBAR ISI -->



          <!-- partial:../../partials/_footer.html -->

          <!-- FOOTER -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Reyz</span>
            </div>
          </footer>
          <!-- TUTUP FOOTER -->


          <!-- partial -->
        </div>
      </div>
    </div>
    
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
