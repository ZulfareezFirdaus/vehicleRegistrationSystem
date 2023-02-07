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
                <div class="indicator-line active"></div>
                <div class="step step3 active">
                    <div class="step-icon"><i class="fa fa-check"></i></div>
                  <p>Berjaya</p>
                </div>
              </section>
            </div>
            
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Tetapan Kata Laluan Telah Berjaya</h3>
              <p class="mb-4">Sila Gunakan Kata Laluan Yang Baru Untuk Tujuan Log Masuk !</p>
              </div>
              <form action="../" method="POST">
                <center>
                    <img src="../images/icon-02.png" width="50%"> 
                </center>
                <div class="d-sm-flex mb-5 align-items-center">
                  <span class="ml-auto"></span> 
                </div>
                

                <button type="submit" name="LogmasukBtn" class="btn btn-block btn-primary LogmasukBtn">Kembali</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>

    <script src="../login/js/jquery-3.3.1.min.js"></script>
    <script src="../login/js/main.js"></script>
      
      
  </body>
</html>