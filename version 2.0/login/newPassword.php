<?php 
    session_start();
    include("../dbconn.php");

    if(!isset($_SESSION['username'])){
        header("Location: ../");
    }
    else{

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/icon-01.png"/>
    <link rel="stylesheet" href="../login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../login/css/bootstrap.min.css">
    <link rel="stylesheet" href="../login/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sekolah Menengah Teluk Gadung</title>
  </head>
  <body>
  

  <div class="half">
    <div id="overlay"></div>
    <div class="bg order-1 order-md-2" style="background-image: url('../images/bg-01.PNG');">
        <h2>SISTEM PENDAFTARAN KENDERAAN <br>PELAJAR & GURU</h2>
    </div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="container">
              <section class="step-indicator">
                  <div class="step step1 active">
                      <div class="step-icon"><i class="fa fa-check"></i></div>
                    <p>Pengesahan</p>
                  </div>
                <div class="indicator-line active"></div>
                <div class="step step2 active">
                    <div class="step-icon"><i class="fa fa-check"></i></div>
                  <p>Kata&nbsp;Laluan&nbsp;Baru</p>
                </div>
                <div class="indicator-line "></div>
                <div class="step step3 ">
                    <div class="step-icon">3</div>
                  <p>Berjaya</p>
                </div>
              </section>
            </div>
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Tetapan Kata Laluan Baru</h3>
              <p class="mb-4">Sila Masukkan Kata Laluan Yang Baru</p>
              </div>
              <div id="alertDangerPasswordNotMatch" class="alerts alert-danger" >Kata Laluan & Pengesahan Kata Laluan Tidak Sepadan !</div>
              <div id="alertDangerPasswordFailed" class="alerts alert-danger" >Set Kata Laluan baru Gagal, Sila Cuba Sekali Lagi !</div>
              <form>
                <div class="form-group first">
                  <label for="username">Kata Laluan Baru</label>
                  <input type="password" class="form-control" placeholder="Masukkan Kata Laluan" name="newPassword" id="newPassword">
                  <span id="errorNewPassword" class="alerts-text">*Masukkan Kata Laluan Anda Yang Baru!</span>
                </div>
                  
                <div class="form-group first">
                  <label for="username">Pengesahan Kata Laluan Baru</label>
                  <input type="password" class="form-control" placeholder="Masukkan Pengesahan Kata Laluan" name="newPasswordConfirm" id="newPasswordConfirm">
                  <span id="errorNewPasswordConfirm" class="alerts-text">*Masukkan Pengesahan Kata Laluan Anda Yang Baru!</span>
                </div>
                  
                <div class="d-sm-flex mb-5 align-items-center">
                  <span class="ml-auto"></span> 
                </div>
                

                <button type="button" name="LogmasukBtn" class="btn btn-block btn-primary LogmasukBtn">Log Masuk</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>

    <script src="../login/js/jquery-3.3.1.min.js"></script>
    <script src="../login/js/main.js"></script>
      
    <script>
    $(document).ready(function(data){
           $('.LogmasukBtn').click(function(){
           var newPassword = $('#newPassword').val();
           var newPasswordConfirm = $('#newPasswordConfirm').val();
           var action = "newPassword";
               
               
           if(newPassword == "" || newPasswordConfirm == "")  
           {   
               $('#errorNewPassword').show();
               $('#errorNewPasswordConfirm').show();
               $('#newPassword').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#newPasswordConfirm').css("box-shadow", "0 0 3pt 1pt #ff000085");
               
           }
           if(newPassword != "")  
           {
               $('#newPassword').css("box-shadow", "none");
               $('#errorNewPassword').hide();
           }
           if(newPasswordConfirm != "")  
           {
               $('#newPasswordConfirm').css("box-shadow", "none");
               $('#errorNewPasswordConfirm').hide();
           }
           if(newPassword != newPasswordConfirm){
                $('#alertDangerPasswordNotMatch').show();
                $('#newPassword').val("");
                $('#newPasswordConfirm').val("");
           }
           
           

           if(newPassword != "" && newPasswordConfirm != "" && newPassword == newPasswordConfirm) {
                $.ajax({  
                     url:"../login/logdaftar_proses.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          newPassword:newPassword,
                          action:action  
                     },  
                     success:function(data)  
                     {    
                        if(data === 'Success'){
                           $('#alertDangerPasswordNotMatch').hide();
                            
                           $('#newPassword').val("");
                           $('#newPasswordConfirm').val("");
                            
                           window.setTimeout(function() {
                                window.location.href = '../login/Success.php';
                            }, 1000);
                        }
                         else{
                             $('#alertDangerPasswordFailed').show();
                             $('#newPassword').val("");
                            $('#newPasswordConfirm').val("");
                         }
                     }  
                });
            }						
        });   
    });  
    </script>
      
  </body>
</html>