 <!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <title>UNIT DISIPLIN SMKTG</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
    include("dbconn.php");
    session_start();
        if(isset($_SESSION['staff_ID'])) 
        {

        $sql0 = "SELECT * FROM staff WHERE staff_ID = ".$_SESSION['staff_ID'].""; 
        $query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));        
        $r = mysqli_fetch_assoc($query0);

        $sql1 = "select * from studentreport  where ic_number = ".$_SESSION['ic_number']."";
        $query1 = mysqli_query($dbconn, $sql1) or die ("Error: ".mysqli_error($dbconn));
        $r1 = mysqli_fetch_assoc($query1);
        }
    ?>

      <div id="wrapper">
          <?php include("DashboardOnly.php");?>
      </div>

  <!-- Page Content -->
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">KENDERAAN PELAJAR</h1>
              </div>
          </div>
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Rekod Kenderaan Dijumpai . <a href="TrackTrace.php" class="alert-link"></a>
            </div>
      <div class="col-lg-6">
        <label><u>Butiran Pemilik Kenderaan :</label><br><br></u>
          <form role="form" method="post" action="firProcess.php">
              
              <div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess">Nama Pelajar</label>
                    <input type="text" name="name" id="inputSuccess" class="form-control" value="<?php echo $r1['name'] ;?>"disabled>
                </div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess">Tingkatan</label>
                    <input type="text" name="form" id="inputSuccess" class="form-control" value="<?php echo $r1['form'] ;?>"disabled>
                </div>

<div>

                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess">Kelas</label>
                    <input type="text" name="class" id="inputSuccess" class="form-control" value="<?php echo $r1['class'] ;?>"disabled>
                </div>
             
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess">No. Telefon</label>
                    <input type="text" name="phone_no" id="inputSuccess" class="form-control" value="<?php echo $r1['phone_no'] ;?>"disabled>
                </div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess">Jantina</label>
                    <input type="text" name="gender" id="inputSuccess" class="form-control" value="<?php echo $r1['gender'] ;?>"disabled>
                </div>

            </div>
          </form>
      </div>
      </div>
  </div>
  </body>
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/metisMenu.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/startmin.js"></script>

</html>
