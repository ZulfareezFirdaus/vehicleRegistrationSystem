<?php
    session_start();
    include('../dbconn.php');
    
    if(!isset($_SESSION['username'])){
        header("Location: ../");
    }
    else{
        
        $sql = "SELECT * FROM staff WHERE staff_username = '".$_SESSION['username']."' ";
        $query = mysqli_query($dbconn,$sql);
        $data = mysqli_fetch_assoc($query);
        
        $sql_lelaki = "SELECT * FROM student WHERE student_gender = 'Lelaki' ";
        $query_lelaki = mysqli_query($dbconn,$sql_lelaki);
        $count_lelaki = mysqli_num_rows($query_lelaki);
        
        $sql_puan = "SELECT * FROM student WHERE student_gender = 'Perempuan' ";
        $query_puan = mysqli_query($dbconn,$sql_puan);
        $count_puan = mysqli_num_rows($query_puan);
        
        $sql_stafflelaki = "SELECT * FROM staff WHERE staff_gender = 'Lelaki' ";
        $query_stafflelaki = mysqli_query($dbconn,$sql_stafflelaki);
        $count_stafflelaki = mysqli_num_rows($query_stafflelaki);
        
        $sql_staffpuan = "SELECT * FROM staff WHERE staff_gender = 'Perempuan' ";
        $query_staffpuan = mysqli_query($dbconn,$sql_staffpuan);
        $count_staffpuan = mysqli_num_rows($query_staffpuan);
        
        $sql_studveh = "SELECT * FROM student_vehicle ";
        $query_studveh = mysqli_query($dbconn,$sql_studveh);
        $count_studveh = mysqli_num_rows($query_studveh);
        
        $sql_techveh = "SELECT * FROM teacher_vehicle ";
        $query_techveh = mysqli_query($dbconn,$sql_techveh);
        $count_techveh = mysqli_num_rows($query_techveh);
    }

?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Sekolah Menengah Teluk Gadung</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../Dashboard/properties/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../Dashboard/properties/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../Dashboard/properties/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../Dashboard/properties/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../Dashboard/properties/assets/css/demo.css" />
    <link rel="stylesheet" href="../Dashboard/properties/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../Dashboard/properties/assets/vendor/libs/apex-charts/apex-charts.css" />

    <script src="../Dashboard/properties/assets/vendor/js/helpers.js"></script>
    <script src="../Dashboard/properties/assets/js/config.js"></script>
</head>

    <!-- Menu -->
    
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                    <img src="../images/icon-01.png" width="19%">
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">SMKTG</span>
                </a>
                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none"><i class="bx bx-chevron-left bx-sm align-middle"></i></a>
            </div>
            <div class="menu-inner-shadow"></div>
            <!-- Side Panel -->
            <ul class="menu-inner py-1">
                <!-- Laman Utama -->
                <li class="menu-item active">
                    <a href="index.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Laman Utama</div>
                    </a>
                </li>
                <!-- Pendaftaran -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Pendaftaran</span></li>   
                <li class="menu-item">
                    <a href="Pendaftaran/Pelajar/" class="menu-link ">
                        <i class="menu-icon tf-icons bx bx-cycling"></i>
                        <div data-i18n="Account Settings">Kenderaan Pelajar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="Pendaftaran/Staff/" class="menu-link ">
                        <i class="menu-icon tf-icons bx bx-car"></i>
                        <div data-i18n="Account Settings">Kenderaan Staff</div>
                    </a>
                </li>
                <!-- Rekod -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Rekod</span></li>
                <li class="menu-item">
                    <a href="cards-basic.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-list-ul"></i>
                        <div data-i18n="Basic">Kenderaan Pelajar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="icons-boxicons.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-list-ul"></i>
                        <div data-i18n="Boxicons">Kenderaan Staff</div>
                    </a>
                </li>
                <!-- Laporan -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span></li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-line-chart"></i>
                        <div data-i18n="Form Elements">Jantina</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="forms-basic-inputs.html" class="menu-link">
                            <div data-i18n="Basic Inputs">Basic Inputs</div>
                        </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-input-groups.html" class="menu-link">
                            <div data-i18n="Input groups">Input groups</div>
                        </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-line-chart"></i>
                        <div data-i18n="Form Layouts">Tingkatan</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="form-layouts-vertical.html" class="menu-link">
                                <div data-i18n="Vertical Form">Vertical Form</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="form-layouts-horizontal.html" class="menu-link">
                                <div data-i18n="Horizontal Form">Horizontal Form</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Tambah Ahli -->
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">ahli (admin)</span>
                </li>
                <li class="menu-item">
                    <a href="AhliBaru/" class="menu-link ">
                        <i class="menu-icon tf-icons bx bx-user-plus"></i>
                        <div data-i18n="Account Settings">Tambah Ahli</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link ">
                        <i class="menu-icon tf-icons bx bx-list-ul"></i>
                        <div data-i18n="Account Settings">Senarai Ahli</div>
                    </a>
                </li>
                <!-- Carian -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Carian</span></li>
                <li class="menu-item">
                    <a href="icons-boxicons.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-search"></i>
                        <div data-i18n="Boxicons">Carian Kenderaan</div>
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Right Panel -->
        <div class="layout-page">
            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)"><i class="bx bx-menu bx-sm"></i></a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">
                        <i class="bx bx-user fs-4 lh-0"></i>
                        <span class="welcome-text">Selamat Datang <b><?php if($data['staff_name'] == ""){ echo'Pengguna Baru';}else{ echo $data['staff_name']; } ?></b></span>
                    </div>
                </div>
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="../Dashboard/properties/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="../Dashboard/properties/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block"><?php if($data['staff_position'] == ""){ echo'Pengguna Baru';}else{ echo $data['staff_position']; } ?></span>
                                    <small class="text-muted"><?php if($data['staff_'] == ""){ echo'Pengguna Baru';}else{ echo $data['staff_name']; } ?></small>
                                </div>
                            </div>
                        </a></li>
                        <li><div class="dropdown-divider"></div></li>
                        <li><a class="dropdown-item" href="#">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                        </a></li>
<li>
<a class="dropdown-item" href="#">
<i class="bx bx-cog me-2"></i>
<span class="align-middle">Settings</span>
</a>
</li>
<li>
<div class="dropdown-divider"></div>
</li>
<li>
<a class="dropdown-item" href="auth-login-basic.html">
<i class="bx bx-power-off me-2"></i>
<span class="align-middle">Log Out</span>
</a>
</li>
</ul>
            </li>
            <!--/ User -->
          </ul>
        </div>
      </nav>

      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">
            <div class="col-lg-12 order-0">
                <div class="col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../Dashboard/properties/assets/img/icons/unicons/icon-01.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Pelajar Lelaki</span>
                          <h3 class="card-title text-nowrap mb-1"><?php echo $count_lelaki ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../Dashboard/properties/assets/img/icons/unicons/icon-02.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span>Pelajar Perempuan</span>
                          <h3 class="card-title text-nowrap mb-1"><?php echo $count_puan ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../Dashboard/properties/assets/img/icons/unicons/icon-03.png" alt="Credit Card" class="rounded" />
                            </div>
                          </div>
                          <span class="d-block mb-1">Staff Lelaki</span>
                          <h3 class="card-title text-nowrap mb-1"><?php echo $count_stafflelaki ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../Dashboard/properties/assets/img/icons/unicons/icon-04.png" alt="Credit Card" class="rounded" />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Staff Perempuan</span>
                          <h3 class="card-title text-nowrap mb-1"><?php echo $count_staffpuan ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4 order-0">
                <div class="alert alert-primary" role="alert"><b>Peringatan!</b> Sila KemasKini Maklumat Diri Anda</div>
              <div class="card">
                <div class="d-flex align-items-end row">
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h5 class="card-title text-primary"><?php if($data['staff_name'] == ""){ echo'Pengguna Baru';}else{ echo $data['staff_name']; } ?> </h5>
                      <p class="mb-4">
                        <?php echo $data['staff_emailRecovery']; ?>
                        <br>
                        <?php if($data['staff_phoneno'] == ""){ echo'Pengguna Baru';}else{ echo $data['staff_phoneno']; } ?> 
                        <br>
                        <span style="text-transform:uppercase;"><b><?php if($data['staff_position'] == ""){ echo'Pengguna Baru';}else{ echo $data['staff_position']; } ?> </b></span>
                      </p>

                      <a href="user/" class="btn btn-sm btn-outline-primary">Lihat Maklumat Diri</a>
                    </div>
                  </div>
                  <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                      <img
                        src="../Dashboard/properties/assets/img/illustrations/man-with-laptop-light.png"
                        height="140"
                        alt="View Badge User"
                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                        data-app-light-img="illustrations/man-with-laptop-light.png"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Revenue -->

          </div>
          <div class="row">
            <!-- Order Statistics -->
            <div class="col-md-12 col-lg-12 col-xl-412order-0 mb-4">
              <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                  <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Statistik Kesuluruhan Kenderaan</h5>
                    <small class="text-muted"><?php $count = $count_studveh + $count_techveh ; echo $count; ?> Jumlah Keseluruhan Kenderaan </small>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column align-items-center gap-1">
                      <h2 class="mb-2"><?php $count = $count_studveh + $count_techveh ; echo $count; ?></h2>
                      <span>Jumlah Kenderaan</span>
                    </div>
                    <div id="orderStatisticsChart"></div>
                  </div>
                  <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Jumlah Kenderaan Staff</h6>
                        </div>
                        <div class="user-progress">
                          <small class="fw-semibold"><?php echo $count_techveh ?></small>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-secondary"
                          ><i class="bx bx-football"></i
                        ></span>
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Jumlah Kenderaan Pelajar</h6>

                        </div>
                        <div class="user-progress">
                          <small class="fw-semibold"><?php echo $count_studveh ?></small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--/ Order Statistics -->
          </div>
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
          <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
              ©
              <script>
                document.write(new Date().getFullYear());
              </script>
              , ZulfareezFirdaus Copyright 
            </div>
            <div>
              <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="footer-link me-4"
                >Documentation</a
              >

              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="footer-link me-4"
                >Contact Me</a
              >
            </div>
          </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<script src="../Dashboard/properties/assets/vendor/libs/jquery/jquery.js"></script>
<script src="../Dashboard/properties/assets/vendor/libs/popper/popper.js"></script>
<script src="../Dashboard/properties/assets/vendor/js/bootstrap.js"></script>
<script src="../Dashboard/properties/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../Dashboard/properties/assets/vendor/js/menu.js"></script>
<script src="../Dashboard/properties/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="../Dashboard/properties/assets/js/main.js"></script>
<script src="../Dashboard/properties/assets/js/dashboards-analytics.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
