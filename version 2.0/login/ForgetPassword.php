<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../../images/icon-01.png"/>
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
                <div class="indicator-line "></div>
                <div class="step step2 ">
                    <div class="step-icon">2</div>
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
              <h3>Pengesahan Maklumat</h3>
              <p class="mb-4">Sila Masukkan No. Kad Pengenalan dan Email Yang Berdaftar</p>
              </div>
              <div id="alertWarningNoKP" class="alerts alert-warning" >No. Kad Pengenalan Tidak Wujud !</div>
              <div id="alertWarningEmailRecovery" class="alerts alert-warning" >Alamat Email Tidak Wujud !</div>
              <form>
                <div class="form-group first">
                  <label for="username">Alamat Email Berdaftar</label>
                  <input type="text" class="form-control" placeholder="Masukkan Alamat Email Berdaftar" name="emailRecovery" id="emailRecovery">
                  <span id="errorEmailRecovery" class="alerts-text">*Masukkan Alamat Email Anda Yang Telah Berdaftar!</span>
                  <span id="errorEmailFormat" class="alerts-text">*Format Email Anda Salah 'testing@gmail.com' !</span>
                  
                </div>
                <div class="form-group first">
                  <label for="username">No. Kad Pengenalan</label>
                  <input type="text" class="form-control" placeholder="Masukkan 12 No. Kad Pengenalan" name="username" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="12" id="username">
                  <span id="errorUsernameLimit" class="alerts-text">*No. pengenalan Anda Mestilah 12 Nombor!</span>
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
           var emailRecovery = $('#emailRecovery').val();		
           var username = $('#username').val();
           var action = "resetPassword";
               
           function validateEmail(emailRecovery) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test(emailRecovery);
           }
               
           if(username == "" || emailRecovery == "")  
           {
               $('#errorUsernameLimit').hide();
               $('#username').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#emailRecovery').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#errorEmailRecovery').show();
               $('#errorEmailFormat').hide();
               
           }
           if(username != "")  
           {
               $('#username').css("box-shadow", "none");
               $('#errorUsername').hide();
           }
           if(username.length != 12)  
           {
               $('#username').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#errorUsernameLimit').show();
           }
           if(username.length == 12)  
           {
               $('#username').css("box-shadow", "none");
               $('#errorUsernameLimit').hide();
           }
            
           if(!validateEmail(emailRecovery)) {
                   $('#errorEmailFormat').show();
                   $('#errorEmailRecovery').hide();
            }
           

           if(username != "" && validateEmail(emailRecovery) && username.length == 12) {
                $.ajax({  
                     url:"../login/logdaftar_proses.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          username:username,
                          emailRecovery:emailRecovery,
                          action:action  
                     },  
                     success:function(data)  
                     {    
                        if(data === 'Success'){
                           $('#alertWarningNoKP').hide();
                           $('#alertWarningEmailRecovery').hide();
                            
                           $('#username').val("");
                           $('#emailRecovery').val("");
                            
                           window.setTimeout(function() {
                                window.location.href = '../login/NewPassword.php';
                            }, 1000);
                        }
                        else if(data === 'NotExistNoKP'){
                           $('#alertSuccess').hide();
                           $('#alertWarningNoKP').show();
                           $('#alertWarningEmailRecovery').hide();
                            
                           $('#username').val("");
                           $('#emailRecovery').val("");
                        }
                        else if(data === 'NotExistEmail'){
                           $('#alertSuccess').hide();
                           $('#alertWarningNoKP').hide();
                           $('#alertWarningEmailRecovery').show();
                            
                           $('#emailRecovery').val("");
                           $('#username').val("");
                        }
                     }  
                });
            }						
        });   
    });  
    </script>
      
  </body>
</html>