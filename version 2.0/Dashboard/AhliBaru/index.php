<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./../../images/icon-01.png"/>
    <link rel="stylesheet" href="./../../login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./../../login/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../login/css/style.css"> 
    <title>SISTEM PENDAFTARAN KENDERAAN <br>PELAJAR & GURU</title>
  </head>
  <body>
  

  <div class="half">
    <div id="overlay"></div>
    <div class="bg order-1 order-md-2" style="background-image: url('./../../images/bg-01.PNG');">
        <h2>SISTEM PENDAFTARAN KENDERAAN <br>PELAJAR & GURU SMKTG</h2>
    </div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block" style="margin-top:45px;">
              <div class="text-center mb-5">
              <h3>Daftar Baru Staff</h3>
              <p class="mb-4">Sila Masukkan No. Kad Pengenalan , Kata Laluan dan Pengesahan Kata Laluan Dengan Cermat</p>
              </div>
              <div id="alertSuccess" class="alerts alert-success" >Pendaftaran Berjaya !</div>
              <div id="alertDanger" class="alerts alert-danger" >Kata Laluan Anda Salah, Sila Cuba Sekali Lagi !</div>
              <div id="alertDangerPassword" class="alerts alert-danger" >Kata Laluan dan Pengesahan Kata Laluan Tidak Sama !</div>
              <div id="alertWarning" class="alerts alert-warning" >No. Kad Pengenalan Tidak Wujud, Sila Daftar Terlebih Dahulu !</div>
              <div id="alertWarningNoKP" class="alerts alert-warning" >No. Kad Pengenalan Telah Wujud</div>
              <form>
                <div class="form-group first">
                  <label for="username">No. Kad Pengenalan</label>
                  <input type="text" class="form-control" placeholder="Masukkan 12 No. Kad Pengenalan" name="username" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="12" id="username">
                  <span id="errorUsernameLimit" class="alerts-text">*No. pengenalan Anda Mestilah 12 Nombor!</span>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Alamat Emel</label>
                  <input type="email" class="form-control" placeholder="Masukkan Alamat Emel " name="email" id="email">
                  <span id="errorEmail" class="alerts-text">*Masukkan Alamat Emel Anda Dengan Betul!</span>
                    <span id="errorEmailSyntax" class="alerts-text">*Format Email Anda Salah "testing@gmail.com" !</span>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Kata Laluan</label>
                  <input type="password" class="form-control" placeholder="Masukkan Kata Laluan " name="password" id="password">
                  <span id="errorPassword" class="alerts-text">*Masukkan Kata Laluan Anda!</span>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Pengesahan Kata Laluan</label>
                  <input type="password" class="form-control" placeholder="Masukkan Kata Laluan " name="Pengesahanpassword" id="Pengesahanpassword">
                  <span id="errorPengesahanPassword" class="alerts-text">*Masukkan Pengesahan Kata Laluan Anda!</span>
                </div>
                
                  <br><br>
                  <button type="button" name="LogmasukBtn" class="btn btn-block btn-primary LogmasukBtn">Daftar Masuk</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>

    <script src="./../../login/js/jquery-3.3.1.min.js"></script>
    <script src="./../../login/js/main.js"></script>
      
    <script>
    $(document).ready(function(data){
           $('.LogmasukBtn').click(function(){
           var password = $('#password').val();		
           var username = $('#username').val();
           var Pengesahanpassword = $('#Pengesahanpassword').val();
           var email = $('#email').val();
           var action = "daftarmasuk";
               
           function validateEmail(email) {
               var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
               return emailReg.test(email);
           }
               
           if(username == "" || password == "" || Pengesahanpassword == "" || email == "")  
           {
               $('#username').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#password').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#Pengesahanpassword').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#email').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#errorPengesahanPassword').show();
               $('#errorPassword').show();
               $('#errorEmail').show();
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
           if(password != Pengesahanpassword && password != "" && Pengesahanpassword != ""){
              $('#Pengesahanpassword').css("box-shadow", "0 0 3pt 1pt #ff000085");
               $('#alertDangerPassword').show();
               $('#errorPengesahanPassword').hide();
            }
            if(email != ""){
                $('#errorEmail').hide();
                $('#email').css("box-shadow", "none");
            }
            if(!validateEmail(email)){
                $('#errorEmailSyntax').show();
                $('#errorEmail').hide();
                $('#email').css("box-shadow", "0 0 3pt 1pt #ff000085");
            }
            else if (validateEmail(email)){
                $('#errorEmailSyntax').hide();
            }

           if(username != "" && password != "" && Pengesahanpassword != "" && username.length == 12) {
               $.ajax({ 
                     url:"./daftarmasuk_proses.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          username:username,
                          password:password,
                          email:email,
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
                                window.location.href = './';
                            }, 2000);
                        }
                        else if(data === 'Exist'){
                           $('#alertWarningNoKP').show();
                           $('#alertSuccess').hide();
                           $('#alertDanger').hide();
                            
                           var username = $('#password').val("");
                        }
                         else{
                             alert("hello");
                         }
                     }  
                });
            }						
        });   
    });  
    </script>
      
  </body>
</html>