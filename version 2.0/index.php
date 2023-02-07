<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/icon-01.png"/>
    <link rel="stylesheet" href="./login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./login/css/bootstrap.min.css">
    <link rel="stylesheet" href="./login/css/style.css">
    <title>SISTEM PENDAFTARAN KENDERAAN <br>PELAJAR & GURU</title>
  </head>
  <body>
  

  <div class="half">
    <div id="overlay"></div>
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg-01.PNG');">
        <h2>SISTEM PENDAFTARAN KENDERAAN <br>PELAJAR & GURU SMKTG</h2>
    </div>
    <div class="contents order-2 order-md-1">

      <div class="container" style="margin-top:60px;">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Log Masuk Staff</h3>
              <p class="mb-4">Sila Masukkan No. Kad Pengenalan dan Kata Laluan Yang Berdaftar</p>
              </div>
              <div id="alertSuccess" class="alerts alert-success" >Log Masuk Berjaya, Anda Akan Dibawa ke Halaman Utama !</div>
              <div id="alertDanger" class="alerts alert-danger" >Kata Laluan Anda Salah, Sila Cuba Sekali Lagi !</div>
              <div id="alertWarning" class="alerts alert-warning" >No. Kad Pengenalan Tidak Wujud, Sila Daftar Terlebih Dahulu !</div>
              <form>
                <div class="form-group first">
                  <label for="username">No. Kad Pengenalan</label>
                  <input type="text" class="form-control" placeholder="Masukkan 12 No. Kad Pengenalan" name="username" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="12" id="username">
                  <span id="errorUsernameLimit" class="alerts-text">*No. pengenalan Anda Mestilah 12 Nombor!</span>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Kata Laluan</label>
                  <input type="password" class="form-control" placeholder="Masukkan Kata Laluan " name="password" id="password">
                  <span id="errorPassword" class="alerts-text">*Masukkan Kata Laluan Anda!</span>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <span class="ml-auto"><a href="./login/ForgetPassword.php" class="forgot-pass">Terlupa Kata Laluan</a></span> 
                </div>

                  <button type="button" name="LogmasukBtn" class="btn btn-block btn-primary LogmasukBtn">Log Masuk</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>

    <script src="./login/js/jquery-3.3.1.min.js"></script>
    <script src="./login/js/main.js"></script>
      
    <script>
    $(document).ready(function(data){
           $('.LogmasukBtn').click(function(){
           var password = $('#password').val();		
           var username = $('#username').val();
           var action = "logmasuk";
               
           if(username == "" || password == "")  
           {
               $('#username').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#password').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#errorPassword').show();
               $('#errorUsernameLimit').hide();
           }
           if(username != "")  
           {
               $('#username').css("box-shadow", "none");
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
           if(password != "")  
           {
               $('#password').css("box-shadow", "none");
               $('#errorPassword').hide();
           }

           if(username != "" && password != "" && username.length == 12) {
                $.ajax({  
                     url:"./login/logdaftar_proses.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          username:username,
                          password:password,
                          action:action  
                     },  
                     success:function(data)  
                     {    
                        if(data === 'Success'){
                           $('#alertSuccess').show();
                           $('#alertWarning').hide();
                           $('#alertDanger').hide();
                        
                           $('#username').val("");
                           $('#password').val("");
                            
                           window.setTimeout(function() {
                                window.location.href = './Dashboard';
                            }, 2000);
                        }
                        else if(data === 'NotExist'){
                           $('#alertWarning').show();
                           $('#alertSuccess').hide();
                           $('#alertDanger').hide();
                            
                           var username = $('#password').val("");
                        }
                        else {
                           $('#alertDanger').show();
                           $('#alertSuccess').hide();
                           $('#alertWarning').hide();
                            
                           $('#username').val("");
                           $('#password').val("");
                        }
                     }  
                });
            }						
        });   
    });  
    </script>
      
  </body>
</html>