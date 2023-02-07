<?php 
    session_start(); 
    include('../../../dbconn.php');

    if(isset($_SESSION['kemaskini_maklumat'])){
        $sql2 = "SELECT student_vehicle.*,student.* FROM student_vehicle INNER JOIN student ON student.student_nokp = student_vehicle.student_nokp WHERE student.student_nokp = '".$_SESSION['exist_student_nokp']."' ";
        $query2 = mysqli_query($dbconn,$sql2);
        $numrows = mysqli_num_rows($query2);
        $row = mysqli_fetch_assoc($query2);
    }

?>
<!DOCTYPE html>

<html lang="en">  
<head>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Sekolah Menengah Teluk Gadung</title>
    
    <link rel="icon" type="image/x-icon" href="../../../Dashboard/Properties/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../../Dashboard/Properties/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../../Dashboard/Properties/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../../Dashboard/Properties/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../../Dashboard/Properties/assets/css/demo.css" />
    <link rel="stylesheet" href="../../../Dashboard/Properties/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    
    <script src="../../../Dashboard/Properties/assets/vendor/js/helpers.js"></script>
    <script src="../../../Dashboard/Properties/assets/js/config.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Left Side Panel -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                    <img src="../../../images/icon-01.png" width="19%">
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">SMKTG</span>
                </a>
                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div><div class="menu-inner-shadow"></div>
            <ul class="menu-inner py-1">
                <!-- Laman Utama -->
                <li class="menu-item">
                    <a href="index.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Laman Utama</div>
                    </a>
                </li>
                <!-- Pendaftaran -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Pendaftaran</span></li>
                <li class="menu-item active">
                    <a href="PendaftaranKenderaanPelajar.php" class="menu-link ">
                        <i class="menu-icon tf-icons bx bx-cycling"></i>
                        <div data-i18n="Account Settings">Kenderaan Pelajar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="PendaftaranKenderaanStaff.php" class="menu-link ">
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
                <li class="menu-header small text-uppercase"><span class="menu-header-text">ahli (admin)</span></li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link ">
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
            
            <!-- Modal for student already register-->
            <div class="modal fade" id="modalCenter_student" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-student" role="document">
                    <div class="modal-content">
                        <div class="modal-header alert alert-warning" >
                            <h4 class="modal-title alert-heading fw-bold mb-1" id="modalCenterTitle">PEMBERITAHUAN !</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Maklumat Pelajar <b>Telah Wujud !</b>
                            <div id="student_status"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup </button> 
                            &nbsp; <button type="button" id="KemaskiniMaklumat" class="btn btn-primary" data-bs-dismiss="modal">Kemaskini Maklumat Pelajar </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal for motorcycle already register-->
            <div class="modal fade" id="modalCenter_vehicle" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header alert alert-warning" >
                            <h4 class="modal-title alert-heading fw-bold mb-1" id="modalCenterTitle">PEMBERITAHUAN !</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Maklumat Kenderaan <b>Telah Wujud !</b> , Nyah Aktif Maklumat Pelajar Terdahulu?
                            <table class="table" style="margin-top:35px;" id="student_detail" ></table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal </button>
                            <form action="" method="POST">
                                <button type="button" id="NyahaktifPelajar" class="btn btn-danger" data-bs-dismiss="modal">Padam Maklumat Pelajar </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side Panel -->
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"><a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)"><i class="bx bx-menu bx-sm"></i></a></div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-user fs-4 lh-0"></i>
                                <span class="welcome-text">Selamat Datang <b>Zulfareez Firdaus Bin Azmi</b></span>
                            </div>
                        </div>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online"><img src="../../../Dashboard/Properties/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /></div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online"><img src="../../../Dashboard/Properties/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">Zulfareez Firdaus</span>
                                                <small class="text-muted">Guru</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li><div class="dropdown-divider"></div></li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Profil Saya</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Tetapan</span>
                                        </a>
                                    </li>
                                    <li><div class="dropdown-divider"></div></li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-basic.html">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Keluar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>       
                    </div>
                </nav>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pendaftaran/</span> Pendaftaran Kenderaan Pelajar</h4>
                        <div class="row">
                            <div class="col-xl">
                                <form action="PengesahanMaklumatPelajar.php" method="POST" id="FormPelajar">
                                    <div class="card mb-4">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Maklumat Pelajar</h5>
                                            <small class="text-muted float-end">Sila Isi Semua Ruangan Kosong</small>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">No. Kad Pengenalan</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-id-card"></i></span>
                                                        <input type="text" maxlength="12" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="student_nokp" name="student_nokp" value="<?php if(isset($_SESSION['exist_student_nokp'])){echo $row['student_nokp'];} ?>" />
                                                    </div>
                                                    <div class="form-text" id="alert_student_nokp">Ruangan Ini Wajib Diisi !</div>
                                                    <div class="form-text" id="alert_length_student_nokp">12 Nombor Tanpa (-) !</div>
                                                </div>
                                                <div class="col-lg-9 mb-3">
                                                    <label class="form-label" for="basic-icon-default-company">Nama Pelajar</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-user"></i></span>
                                                        <input type="text" id="student_name" name="student_name" class="form-control" value="<?php if(isset($_SESSION['exist_student_nokp'])){echo $row['student_name'];} ?>" />
                                                    </div>
                                                    <div class="form-text" id="alert_student_name">Ruangan Ini Wajib Diisi !</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <label class="form-label" for="basic-icon-default-email">Tingkatan</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-user-pin"></i></span>
                                                        <select class="form-select" name="student_form" id="student_form">
                                                            <?php if(isset($_SESSION['exist_student_nokp'])){ ?>
                                                                <option value="<?php echo $row['student_form']; ?>" selected><?php echo $row['student_form']; ?></option>
                                                            <?php }else{ ?>
                                                                <option value="" selected>Sila Pilih Tingkatan</option>
                                                            <?php }?>
                                                            <option value="1">Satu</option>
                                                            <option value="2">Dua</option>
                                                            <option value="3">Tiga</option>
                                                            <option value="4">Empat</option>
                                                            <option value="5">Lima</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-text" id="alert_student_form">Ruangan Ini Wajib Dipilih !</div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <label class="form-label" for="basic-icon-default-phone">Kelas</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-door-open"></i></span>
                                                        <select class="form-select" id="student_class" name="student_class" >
                                                            <?php if(isset($_SESSION['exist_student_nokp'])){ ?>
                                                                <option value="<?php echo $row['student_class']; ?>" selected><?php echo $row['student_class']; ?></option>
                                                            <?php }else{ ?>
                                                                <option value="" selected>Sila Pilih Kelas</option>
                                                            <?php }?>
                                                            <option value="Setia">Setia</option>
                                                            <option value="Maju">Maju</option>
                                                            <option value="Tekun">Tekun</option>
                                                            <option value="Erat">Erat</option>
                                                            <option value="Luhur">Luhur</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-text" id="alert_student_class">Ruangan Ini Wajib Dipilih !</div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <label class="form-label" for="basic-icon-default-message">Jantina</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-heart"></i></span>
                                                        <select class="form-select" id="student_gender" name="student_gender">
                                                            <?php if(isset($_SESSION['exist_student_nokp'])){ ?>
                                                                <option value="<?php echo $row['student_gender']; ?>" selected><?php echo $row['student_gender']; ?></option>
                                                            <?php }else{ ?>
                                                                <option value="" selected>Sila Pilih Jantina</option>
                                                            <?php }?>
                                                            <option value="Lelaki">Lelaki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-text" id="alert_student_gender">Ruangan Ini Wajib Dipilih !</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">No. Telefon Pelajar</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-phone-call"></i></span>
                                                        <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="student_noPhonePelajar" name="student_noPhonePelajar" value="<?php if(isset($_SESSION['exist_student_nokp'])){echo $row['student_noPhonePelajar'];} ?>" />
                                                    </div>
                                                    <div class="form-text" id="alert_student_noPhonePelajar">Ruangan Ini Wajib Diisi !</div>
                                                    <div class="form-text" style="color:green;" id="alert_format_student_noPhonePelajar">Contoh : 0167623682 !</div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-company">No. Telefon Waris</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-phone-call"></i></span>
                                                        <input type="text" id="student_noPhoneWaris" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="student_noPhoneWaris" class="form-control" value="<?php if(isset($_SESSION['exist_student_nokp'])){echo $row['student_noPhoneWaris'];} ?>" />
                                                    </div>
                                                    <div class="form-text" id="alert_student_noPhoneWaris">Ruangan Ini Wajib Diisi !</div>
                                                    <div class="form-text" style="color:green;" id="alert_format_student_noPhoneWaris">Contoh : 0167623682 !</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Alamat Rumah </label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-location-plus"></i></span>
                                                        <textarea class="form-control" id="student_address" name="student_address" rows="2"><?php if(isset($_SESSION['exist_student_nokp'])){echo $row['student_address'];} ?></textarea>
                                                    </div>
                                                    <div class="form-text" id="alert_student_address">Ruangan Ini Wajib Diisi !</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card mb-4">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Maklumat Kenderaan Pelajar</h5>
                                            <small class="text-muted float-end">Sila Isi Semua Ruangan Kosong</small>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">No. Pendaftaran Kenderaan</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-id-card"></i></span>
                                                        <input type="text" class="form-control" id="StudVehicle_regNum" name="StudVehicle_regNum" value="<?php if(isset($_SESSION['exist_student_nokp'])){echo $row['StudVehicle_regNum'];} ?>" />
                                                    </div>
                                                    <div class="form-text" id="alert_StudVehicle_regNum">Ruangan Ini Wajib Diisi !</div>
                                                    <div class="form-text" id="alert_Space_StudVehicle_regNum">Tidak Perlu ("SPACE") !</div>
                                                </div>
                                                <div class="col-lg-8 mb-3">
                                                    <label class="form-label" for="basic-icon-default-company">Jenis Kenderaan</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-cycling"></i></span>
                                                        <select class="form-select" name="StudVehicle_type" id="StudVehicle_type">
                                                            <?php if(isset($_SESSION['exist_student_nokp'])){ ?>
                                                                <option value="<?php echo $row['StudVehicle_Type']; ?>" selected><?php echo $row['StudVehicle_Type']; ?></option>
                                                            <?php }else{ ?>
                                                                <option value="" selected>Sila Pilih Jenis Kenderaan</option>
                                                            <?php }?>
                                                            <option value="Motosikal">Motosikal</option>
                                                            <option value="Motosikal 255CC">Motosikal Melebihi 255CC</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-text" id="alert_StudVehicle_type">Ruangan Ini Wajib Dipilih !</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-email">Nama Pemilik Kenderaan</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                                        <input type="text" class="form-control" id="StudVehicle_ownerName" name="StudVehicle_ownerName" value="<?php if(isset($_SESSION['exist_student_nokp'])){echo $row['StudVehicle_ownerName'];} ?>" />
                                                    </div>
                                                    <div class="form-text" id="alert_StudVehicle_ownerName">Ruangan Ini Wajib Diisi !</div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-phone">No. Telefon Pemilik Kenderaan</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone-call"></i></span>
                                                        <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="StudVehicle_ownerPhone" name="StudVehicle_ownerPhone" value="<?php if(isset($_SESSION['exist_student_nokp'])){echo $row['StudVehicle_ownerPhone'];} ?>" />
                                                    </div>
                                                    <div class="form-text" id="alert_StudVehicle_ownerPhone">Ruangan Ini Wajib Diisi !</div>
                                                    <div class="form-text" style="color:green" id="alert_format_StudVehicle_ownerPhone">Contoh : 0167623682 ! !</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Hubungan Dengan Pemilik Kenderaan</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user-plus"></i></span>
                                                        <select class="form-select" name="StudVehicle_relationship" id="StudVehicle_relationship">
                                                            <?php if(isset($_SESSION['exist_student_nokp'])){ ?>
                                                                <option value="<?php echo $row['StudVehicle_relationship']; ?>" selected><?php echo $row['StudVehicle_relationship']; ?></option>
                                                            <?php }else{ ?>
                                                                <option value="" selected>Sila Pilih Hubungan Dengan Pemilik</option>
                                                            <?php }?>
                                                            <option value="Sendiri" >Sendiri</option>
                                                            <option value="Ibu/Bapa" >Ibu/Bapa</option>
                                                            <option value="Adik-Beradik" >Adik-Beradik</option>
                                                            <option value="Penjaga" >Penjaga</option>
                                                            <option value="Saudara" >Saudara</option>
                                                            <option value="Datuk/Nenek" >Datuk/Nenek</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-text" id="alert_StudVehicle_relationship">Ruangan Ini Wajib Dipilih !</div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-company">Status Lesen</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-detail"></i></span>
                                                        <select class="form-select" name="StudVehicle_license" id="StudVehicle_license">
                                                            <?php if(isset($_SESSION['exist_student_nokp'])){ ?>
                                                                <option value="<?php echo $row['StudVehicle_license']; ?>" selected><?php echo $row['StudVehicle_license']; ?></option>
                                                            <?php }else{ ?>
                                                                <option value="" selected>Sila Pilih Status Lesen</option>
                                                            <?php }?>
                                                            <option value="Ada">Ada</option>
                                                            <option value="Tiada">Tiada</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-text" id="alert_StudVehicle_license">Ruangan Ini Wajib Dipilih !</div>
                                                </div>
                                            </div>
                                            <center><br><button type="submit" id="submitbtn" class="btn btn-info">Seterusnya <i class="bx bx-right-arrow-alt"></i></button></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>    
                    </div>
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                © <script>document.write(new Date().getFullYear());</script>, ZulfareezFirdaus Copyright 
                            </div>
                            <div>
                                <a href="#" target="_blank" class="footer-link me-4">Documentation</a>
                                <a href="#" target="_blank" class="footer-link me-4">Contact Me</a>
                            </div>
                        </div>
                    </footer>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>


    <script src="../../../Dashboard/Properties/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../../Dashboard/Properties/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../../Dashboard/Properties/assets/vendor/js/bootstrap.js"></script>
    <script src="../../../Dashboard/Properties/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../../Dashboard/Properties/assets/vendor/js/menu.js"></script>
    <script src="../../../Dashboard/Properties/assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
    <!--- For Datatable Jquery -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    
      <!--- Remove Space in Input -->
    <script>
    $("input#StudVehicle_regNum").on({
        keydown: function(e) {
            if (e.which === 32)
            return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
    });
    </script>
    
    <script>
        $(document).ready(function () {
            
            $("#student_nokp").keyup(function () {
                validateStudent_nokp();
            });
            $("#student_name").keyup(function () {
                validateStudent_name();
            });
            $("#student_form").bind("change keyup", function(event){
                validateStudent_form();
            });
            $("#student_gender").bind("change keyup", function(event){
                validateStudent_gender();
            });
            $("#student_address").keyup(function () {
                validateStudent_address();
            });
            $("#student_noPhonePelajar").keyup(function () {
                validateStudent_noPhonePelajar();
            });
            $("#student_noPhoneWaris").keyup(function () {
                validateStudent_noPhoneWaris();
            });
            $("#student_class").bind("change keyup", function(event){
                validateStudent_class();
            });
            $("#StudVehicle_regNum").keyup(function () {
                validateStudVehicle_regNum();
            });
            $("#StudVehicle_ownerName").keyup(function () {
                validateStudVehicle_ownerName();
            });
            $("#StudVehicle_type").bind("change keyup", function(event){
                validateStudVehicle_type();
            });
            $("#StudVehicle_relationship").bind("change keyup", function(event){
                validateStudVehicle_relationship();
            });
            $("#StudVehicle_license").bind("change keyup", function(event){
                validateStudVehicle_license();
            });
            $("#StudVehicle_ownerPhone").keyup(function () {
                validateStudVehicle_ownerPhone();
            });
            
            
            function validateStudent_nokp() {
                let student_nokp = $("#student_nokp").val();
                if (student_nokp.length == "") {
                    $("#alert_student_nokp").show();
                    $('#student_nokp').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    student_nokpError = false;
                    $("#alert_length_student_nokp").hide();
                    return false;
                }
                else if (student_nokp.length < 12) {
                    $("#alert_length_student_nokp").show();
                    $("#alert_student_nokp").hide();
                    $('#student_nokp').css("box-shadow", "none");
                    student_nokpError = false;
                    return false;
                }
                else if(student_nokp.length == 12){
                    checkStudent_registration();
                    $("#alert_student_nokp").hide();
                    $("#alert_length_student_nokp").hide();
                    $('#student_nokp').css("box-shadow", "none");
                    student_nokpError = true;
                }
            }
            function validateStudent_name() {
                let student_name = $("#student_name").val();
                if (student_name.length == "") {
                    $("#alert_student_name").show();
                    $('#student_name').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    student_nameError = false;
                    return false;
                } 
                else {
                    $("#alert_student_name").hide();
                    $('#student_name').css("box-shadow", "none");
                    student_nameError = true;
                }
            }
            
            function validateStudent_form() {
                let student_form = $("#student_form").val();
                if (student_form == "") {
                    $("#alert_student_form").show();
                    $('#student_form').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    student_formError = false;
                    return false;
                } 
                else {
                    $("#alert_student_form").hide();
                    $('#student_form').css("box-shadow", "none");
                    student_formError = true;
                }
            }
            function validateStudent_gender() {
                let student_gender = $("#student_gender").val();
                if (student_gender == "") {
                    $("#alert_student_gender").show();
                    $('#student_gender').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    student_genderError = false;
                    return false;
                } 
                else {
                    $("#alert_student_gender").hide();
                    $('#student_gender').css("box-shadow", "none");
                    student_genderError = true;
                }
            }
            function validateStudent_address() {
                let student_address = $("#student_address").val();
                if (student_address == "") {
                    $("#alert_student_address").show();
                    $('#student_address').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    student_addressError = false;
                    return false;
                } 
                else {
                    $("#alert_student_address").hide();
                    $('#student_address').css("box-shadow", "none");
                    student_addressError = true;
                }
            }
            function validateStudent_noPhonePelajar() {
                let student_noPhonePelajar = $("#student_noPhonePelajar").val();
                if (student_noPhonePelajar == "") {
                    $("#alert_student_noPhonePelajar").show();
                    $("#alert_format_student_noPhonePelajar").hide();
                    $('#student_noPhonePelajar').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    student_noPhonePelajarError = false;
                    return false;
                } 
                else {
                    $("#alert_student_noPhonePelajar").hide();
                    $("#alert_format_student_noPhonePelajar").show();
                    $('#student_noPhonePelajar').css("box-shadow", "none");
                    student_noPhonePelajarError = true;
                }
            }
            function validateStudent_noPhoneWaris() {
                let student_noPhoneWaris = $("#student_noPhoneWaris").val();
                if (student_noPhoneWaris == "") {
                    $("#alert_student_noPhoneWaris").show();
                    $("#alert_format_student_noPhoneWaris").hide();
                    $('#student_noPhoneWaris').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    student_noPhoneWarisError = false;
                    return false;
                } 
                else {
                    $("#alert_student_noPhoneWaris").hide();
                    $("#alert_format_student_noPhoneWaris").show();
                    $('#student_noPhoneWaris').css("box-shadow", "none");
                    student_noPhoneWarisError = true;
                }
            }
            function validateStudent_class() {
                let student_class = $("#student_class").val();
                if (student_class == "") {
                    $("#alert_student_class").show();
                    $('#student_class').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    student_classError = false;
                    return false;
                } 
                else {
                    $("#alert_student_class").hide();
                    $('#student_class').css("box-shadow", "none");
                    student_classError = true;
                }
            }
            function validateStudVehicle_regNum() {
                let StudVehicle_regNum = $("#StudVehicle_regNum").val();
                if (StudVehicle_regNum == "") {
                    $("#alert_StudVehicle_regNum").show();
                    $('#StudVehicle_regNum').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    StudVehicle_regNumError = false;
                    $("#alert_Space_StudVehicle_regNum").hide();
                    return false;
                } 
                else {
                    checkVehicle_Registration();
                    $("#alert_StudVehicle_regNum").hide();
                    $("#alert_Space_StudVehicle_regNum").show();
                    $('#StudVehicle_regNum').css("box-shadow", "none");
                    StudVehicle_regNumError = true;
                }
            }
            function validateStudVehicle_ownerName() {
                let StudVehicle_ownerName = $("#StudVehicle_ownerName").val();
                if (StudVehicle_ownerName == "") {
                    $("#alert_StudVehicle_ownerName").show();
                    $('#StudVehicle_ownerName').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    StudVehicle_ownerNameError = false;
                    return false;
                } 
                else {
                    $("#alert_StudVehicle_ownerName").hide();
                    $('#StudVehicle_ownerName').css("box-shadow", "none");
                    StudVehicle_ownerNameError = true;
                }
            }
            function validateStudVehicle_relationship() {
                let StudVehicle_relationship = $("#StudVehicle_relationship").val();
                if (StudVehicle_relationship == "") {
                    $("#alert_StudVehicle_relationship").show();
                    $('#StudVehicle_relationship').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    StudVehicle_relationshipError = false;
                    return false;
                } 
                else {
                    $("#alert_StudVehicle_relationship").hide();
                    $('#StudVehicle_relationship').css("box-shadow", "none");
                    StudVehicle_relationshipError = true;
                }
            }
            function validateStudVehicle_type() {
                let StudVehicle_type = $("#StudVehicle_type").val();
                if (StudVehicle_type == "") {
                    $("#alert_StudVehicle_type").show();
                    $('#StudVehicle_type').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    StudVehicle_typeError = false;
                    return false;
                } 
                else {
                    $("#alert_StudVehicle_type").hide();
                    $('#StudVehicle_type').css("box-shadow", "none");
                    StudVehicle_typeError = true;
                }
            }
            function validateStudVehicle_type() {
                let StudVehicle_type = $("#StudVehicle_type").val();
                if (StudVehicle_type == "") {
                    $("#alert_StudVehicle_type").show();
                    $('#StudVehicle_type').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    StudVehicle_typeError = false;
                    return false;
                } 
                else {
                    $("#alert_StudVehicle_type").hide();
                    $('#StudVehicle_type').css("box-shadow", "none");
                    StudVehicle_typeError = true;
                }
            }
            function validateStudVehicle_ownerPhone() {
                let StudVehicle_ownerPhone = $("#StudVehicle_ownerPhone").val();
                if (StudVehicle_ownerPhone == "") {
                    $("#alert_StudVehicle_ownerPhone").show();
                    $('#StudVehicle_ownerPhone').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    StudVehicle_ownerPhoneError = false;
                    $("#alert_format_StudVehicle_ownerPhone").hide();
                    return false;
                } 
                else {
                    $("#alert_StudVehicle_ownerPhone").hide();
                    $("#alert_format_StudVehicle_ownerPhone").show();
                    $('#StudVehicle_ownerPhone').css("box-shadow", "none");
                    StudVehicle_ownerPhoneError = true;
                }
            }
            function validateStudVehicle_license() {
                let StudVehicle_license = $("#StudVehicle_license").val();
                if (StudVehicle_license == "") {
                    $("#alert_StudVehicle_license").show();
                    $('#StudVehicle_license').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    StudVehicle_licenseError = false;
                    return false;
                } 
                else {
                    $("#alert_StudVehicle_license").hide();
                    $('#StudVehicle_license').css("box-shadow", "none");
                    StudVehicle_licenseError = true;
                }
            }
            
            $("#submitbtn").click(function () {
                validateStudent_nokp();
                validateStudent_name();
                validateStudent_form();
                validateStudent_gender();
                validateStudent_address();
                validateStudent_noPhonePelajar();
                validateStudent_noPhoneWaris();
                validateStudent_class();
                validateStudVehicle_regNum();
                validateStudVehicle_ownerName();
                validateStudVehicle_relationship();
                validateStudVehicle_type();
                validateStudVehicle_ownerPhone();
                validateStudVehicle_license();
                
                if (
                    student_nokpError == true && 
                    student_nameError == true &&
                    student_formError == true &&
                    student_genderError == true &&
                    student_classError == true &&
                    student_noPhonePelajarError == true &&
                    student_noPhoneWarisError == true &&
                    student_addressError == true &&
                    StudVehicle_regNumError == true &&
                    StudVehicle_ownerNameError == true &&
                    StudVehicle_relationshipError == true &&
                    StudVehicle_typeError == true &&
                    StudVehicle_ownerPhoneError == true &&
                    StudVehicle_licenseError == true
                    
                ) {
                    return true;
                } 
                else {
                    return false;
                }
            });
            
            function checkVehicle_Registration(){
                let StudVehicle_regNum = $("#StudVehicle_regNum").val();
                var status = "semakNoPendaftaran";
                
                $.ajax({
                    url:"./../pelajar/checkingMaklumatPelajar.php",
                    method:"POST",
                    dataType:"json",
                    data:{StudVehicle_regNum:StudVehicle_regNum,status:status},
                    success:function(data)
                    {
                        if(data === "TakWujud"){
                            
                        }
                        else{
                            $('#student_detail').html(data);
                            $("#modalCenter_vehicle").modal('show');
                            $('#StudVehicle_regNum').val("");
                        }
                    }
                });
            }
            
            function checkStudent_registration(){
                let student_nokp = $('#student_nokp').val();
                var status = "semakNoKP";
                
                $.ajax({
                    url:"./../pelajar/checkingMaklumatPelajar.php",
                    method:"POST",
                    dataType:"json",
                    data:{student_nokp:student_nokp,status:status},
                    success:function(data)
                    {
                        if(data === 'TakWujud'){
                            
                        }
                        else{
                            $('#student_status').html(data);
                            $("#modalCenter_student").modal('show');
                            $('#student_nokp').val("");
                        }
                    }
                });
            }
            
            $('#KemaskiniMaklumat').click(function(){
                var status = "KemaskiniMaklumat";
                
                $.ajax({
                    url:"./../pelajar/semakPendaftaranKenderaan.php",
                    method:"POST",
                    dataType:"json",
                    data:{status:status},
                    success:function(data)
                    {
                        window.location.replace('./');
                    }
                });
            });
        });
    </script>
    
</body>
</html>
