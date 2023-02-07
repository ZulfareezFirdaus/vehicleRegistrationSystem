<!DOCTYPE html>
<?php 
    if($_POST["student_nokp"] == ""){
        header("Location: ./");
    }
?>

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
             <!-- Modal for student successfull register-->
            <div class="modal fade" id="modalCenter_success" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header alert alert-success" >
                            <h4 class="modal-title alert-heading fw-bold mb-1" id="modalCenterTitle">PEMBERITAHUAN !</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"><center>
                            <img src="../../../images/icon-02.png" style="width:15%;margin-bottom:45px;"><br>
                            <span style="font-size:30px;">Pendaftaran Pelajar Telah Berjaya !</span></center>
                        </div>
                        <div class="modal-footer">
                            <form action="./../Pelajar" method="POST">
                                <button type="submit" class="btn btn-info" data-bs-dismiss="modal">Selesai </button>
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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pendaftaran/</span> Pengesahan Maklumat Pelajar & Kenderaan</h4>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <h5 class="card-header"><b>Maklumat Pelajar</b></h5>
                                    <div class="table-responsive text-nowrap card-body" style="padding:0rem 0rem 1.5rem 0rem">
                                        <table class="table">
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td width="29%"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>No. Kad Pengenalan :</strong></td>
                                                    <td><?php echo $_POST["student_nokp"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Nama :</strong></td>
                                                    <td><?php echo $_POST["student_name"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Tingkatan :</strong></td>
                                                    <td><?php echo $_POST["student_form"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Kelas :</strong></td>
                                                    <td><?php echo $_POST["student_class"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Jantina :</strong></td>
                                                    <td><?php echo $_POST["student_gender"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>No. Telefon Pelajar :</strong></td>
                                                    <td><?php echo $_POST["student_noPhonePelajar"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>No. Telefon Waris :</strong></td>
                                                    <td><?php echo $_POST["student_noPhoneWaris"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Alamat Rumah :</strong></td>
                                                    <td><?php echo $_POST["student_address"] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <h5 class="card-header"><b>Maklumat Kenderaan Pelajar</b></h5>
                                    <div class="table-responsive text-nowrap card-body" style="padding:0rem 0rem 1.5rem 0rem">
                                        <table class="table">
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td width="25%"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>No. Pendaftaran Kenderaan :</strong></td>
                                                    <td><?php echo $_POST["StudVehicle_regNum"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Jenis Kenderaan :</strong></td>
                                                    <td><?php echo $_POST["StudVehicle_type"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>Nama Pemilik Berdaftar :</strong></td>
                                                    <td><?php echo $_POST["StudVehicle_ownerName"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>No. Telefon Pemilik :</strong></td>
                                                    <td><?php echo $_POST["StudVehicle_ownerPhone"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Hubungan Dengan Pemilik :</strong></td>
                                                    <td><?php echo $_POST["StudVehicle_relationship"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Status Lesen :</strong></td>
                                                    <td><?php echo $_POST["StudVehicle_license"] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card tempatpengesahan" id="tempatpengesahan">
                                    <h5 class="card-header">Pengesahan Maklumat Pelajar</h5>
                                    <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                            <div class="alert alert-warning">
                                                <h6 class="alert-heading fw-bold mb-1">Adakah Anda Yakin Maklmuat Yang Diberikan Benar & Tepat?</h6>
                                                <p class="mb-0">Jika Ya, Sila tandakan (<i class="bx bx-check" style="position:relative;top:-3px;"></i>) Pada Kotak yang Disediakan Dibawah.</p>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" name="PengesahanMaklumat" id="PengesahanMaklumat"/>
                                                <input type="hidden" name="student_nokp" id="student_nokp" value="<?php echo $_POST['student_nokp'] ?>" />
                                                <input type="hidden" name="student_name" id="student_name" value="<?php echo $_POST['student_name'] ?>" />
                                                <input type="hidden" name="student_form" id="student_form" value="<?php echo $_POST['student_form'] ?>" />
                                                <input type="hidden" name="student_class" id="student_class" value="<?php echo $_POST['student_class'] ?>" />
                                                <input type="hidden" name="student_address" id="student_address" value="<?php echo $_POST['student_address'] ?>" />
                                                <input type="hidden" name="student_noPhonePelajar" id="student_noPhonePelajar" value="<?php echo $_POST['student_noPhonePelajar'] ?>" />
                                                <input type="hidden" name="student_noPhoneWaris" id="student_noPhoneWaris" value="<?php echo $_POST['student_noPhoneWaris'] ?>" />
                                                <input type="hidden" name="student_gender" id="student_gender" value="<?php echo $_POST['student_gender'] ?>" />
                                                
                                                <input type="hidden" name="StudVehicle_regNum" id="StudVehicle_regNum" value="<?php echo $_POST['StudVehicle_regNum'] ?>" />
                                                <input type="hidden" name="StudVehicle_Type" id="StudVehicle_Type" value="<?php echo $_POST['StudVehicle_type'] ?>" />
                                                <input type="hidden" name="StudVehicle_ownerName" id="StudVehicle_ownerName" value="<?php echo $_POST['StudVehicle_ownerName'] ?>" />
                                                <input type="hidden" name="StudVehicle_ownerPhone" id="StudVehicle_ownerPhone" value="<?php echo $_POST['StudVehicle_ownerPhone'] ?>" />
                                                <input type="hidden" name="StudVehicle_relationship" id="StudVehicle_relationship" value="<?php echo $_POST['StudVehicle_relationship'] ?>" />
                                                <input type="hidden" name="StudVehicle_license" id="StudVehicle_license" value="<?php echo $_POST['StudVehicle_license'] ?>" />
                                                
                                                <label class="form-check-label" for="accountActivation">Saya Mengesahkan Bahawa Maklumat Di Atas Adalah Tepat & Benar.</label>
                                            </div>
                                            <div class="form-text" id="alert_PengesahanMaklumat">Ruangan Ini Wajib Ditanda !</div>
                                            <div class="form-text" style="color:green;" id="alert_confirm_PengesahanMaklumat">Dengan Ini, Saya <b><?php echo $_POST['student_name'] ?></b> Dengan No. Kad Pengenalan <b><?php echo $_POST['student_nokp'] ?></b> Mengaku Bahawa Maklumat yang Diberikan Benar dan Tepat</div>
                                            <br>
                                                <center><button type="button" class="btn btn-secondary deactivate-account" onclick="history.back()">Sebelum <i class="bx bx-left-arrow-alt"></i></button> 
                                                <?php if(isset($_SESSION['kemaskini_maklumat'])){ ?>
                                                    <button type="button" id="submitbtn" class="btn btn-info deactivate-account">Kemaskini & Simpan <i class="bx bx-save" style="position:relative;top:-2px;"></i></button>
                                                <?php }else{?>
                                                    <button type="button" id="submitbtn" class="btn btn-info deactivate-account">Hantar & Simpan <i class="bx bx-save" style="position:relative;top:-2px;"></i></button>
                                                <?php } ?>
                                                </center>
                                        </form>
                                    </div>
                                </div>
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
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $("html, body").animate({
              scrollTop: $(document).height() - $(window).height()
            }, 'slow');
            $('#tempatpengesahan').css("box-shadow", "0 0 15px #ffab00");
            
            
            $("#PengesahanMaklumat").bind("change keyup", function(event){
                validatePengesahanMaklumat();
            });
            
            function validatePengesahanMaklumat() {
                let PengesahanMaklumat = $("#PengesahanMaklumat").prop('checked'); 
                if (!PengesahanMaklumat) {
                    $("#alert_PengesahanMaklumat").show();
                    $("#alert_confirm_PengesahanMaklumat").hide();
                    $('#PengesahanMaklumat').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    PengesahanMaklumatError = false;
                    return false;
                } 
                else if (PengesahanMaklumat) {
                    $("#alert_PengesahanMaklumat").hide();
                    $("#alert_confirm_PengesahanMaklumat").show();
                    $('#PengesahanMaklumat').css("box-shadow", "none");
                    PengesahanMaklumatError = true;
                }
            }
            
           
        });
    </script>
    
    <script>  
        $(document).ready(function () {
            $("html, body").animate({
              scrollTop: $(document).height() - $(window).height()
            }, 'slow');
            $('#tempatpengesahan').css("box-shadow", "0 0 15px #ffab00");
        
            $("#PengesahanMaklumat").bind("change keyup", function(event){
                validatePengesahanMaklumat();
            });
            
            function validatePengesahanMaklumat() {
                let PengesahanMaklumat = $("#PengesahanMaklumat").prop('checked'); 
                if (!PengesahanMaklumat) {
                    $("#alert_PengesahanMaklumat").show();
                    $("#alert_confirm_PengesahanMaklumat").hide();
                    $('#PengesahanMaklumat').css("box-shadow", "0 0 3pt 1pt #ff000085");
                    PengesahanMaklumatError = false;
                    return false;
                } 
                else if (PengesahanMaklumat) {
                    $("#alert_PengesahanMaklumat").hide();
                    $("#alert_confirm_PengesahanMaklumat").show();
                    $('#PengesahanMaklumat').css("box-shadow", "none");
                    PengesahanMaklumatError = true;
                }
            }
        
            $('#submitbtn').click(function(){
                validatePengesahanMaklumat();

                var student_nokp = $('#student_nokp').val();
                var student_form = $('#student_form').val();
                var student_class = $('#student_class').val();
                var student_name = $('#student_name').val();
                var student_address = $('#student_address').val();
                var student_noPhonePelajar = $('#student_noPhonePelajar').val();
                var student_noPhoneWaris = $('#student_noPhoneWaris').val();
                var student_gender = $('#student_gender').val();

                var StudVehicle_regNum = $('#StudVehicle_regNum').val();
                var StudVehicle_Type = $('#StudVehicle_Type').val();
                var StudVehicle_ownerName = $('#StudVehicle_ownerName').val();
                var StudVehicle_ownerPhone = $('#StudVehicle_ownerPhone').val();
                var StudVehicle_relationship = $('#StudVehicle_relationship').val();
                var StudVehicle_license = $('#StudVehicle_license').val();

                if (PengesahanMaklumatError == true) {
                    
                    $.ajax({
                        url:"./../Pelajar/insertMaklumatPelajar.php",
                        dataType:"json",
                        method:"POST",
                        data:{
                            student_nokp:student_nokp, 
                            student_form:student_form, 
                            student_class:student_class,
                            student_name:student_name,
                            student_address:student_address,
                            student_noPhonePelajar:student_noPhonePelajar,
                            student_noPhoneWaris:student_noPhoneWaris,
                            student_gender:student_gender,
                            StudVehicle_regNum:StudVehicle_regNum,
                            StudVehicle_Type:StudVehicle_Type,
                            StudVehicle_ownerName:StudVehicle_ownerName,
                            StudVehicle_ownerPhone:StudVehicle_ownerPhone,
                            StudVehicle_relationship:StudVehicle_relationship,
                            StudVehicle_license:StudVehicle_license
                        },
                        success:function(data){
                            if(data === "Berjaya"){
                                $("#modalCenter_success").modal('show');
                            }
                            else if(data === "TakBerjaya_vehicle"){
                                alert("gagal2");
                            }
                            else if(data === "TakBerjaya_student"){
                                alert("gagal3");
                            }
                            else{
                                alert("gagal1");
                            }
                        }
                    });
                } 
                else {
                    return false;
                }
            });
        });
    </script>
    
</body>
</html>
