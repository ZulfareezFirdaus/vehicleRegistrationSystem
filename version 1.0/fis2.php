<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>
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
                  <h1 class="page-header">Pendaftaran Kenderaan Staff </h1>
              </div>
          </div>
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Pendaftaran . 
            </div>
      <div class="col-lg-6">
        <br><label>A.MAKLUMAT STAFF</label><br><br>
          <form role="form" method="post" action="fisProcess.php">
              
              <div>
<div class="form-group">
                                            <label>Kad Pengenalan</label>
                                            <input class="form-control" type="number" name="staffic_number" value="" placeholder="Tanpa dash(-)" required>
                                            <p style="color:red"><b>*Pastikan NO.KAD PENGENALAN betul sebelum disahkan</b></p>
                                        </div>
 	<div class="form-group">
                                          
<div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="name" value="" placeholder="" required>
                                        </div>                                          
                                        <div class="form-group">
                                            <label>Alamat Rumah</label>
                                            <input class="form-control" type="text" name="address" value="" placeholder="" required>
		         </div>

<div class="form-group">
                                            <label>No Telefon Staff</label>
                                            <input class="form-control" type="number" name="phone_no" value="" placeholder="011012345678" required>
                                        </div>  

                                       <div class="form-group">
                                            <label>Jantina</label>
                                            <select name="gender" class="form-control" required>
                                                    <option value="-">-</option>
                                                    <option value="L">L</option>
                                                    <option value="P">P</option>
                                            </select>
                                        </div>  


                    </div>

              <br><label>B.MAKLUMAT KENDERAAN :</label><br><br>
              <div class="form-group input-group">
                  <span class="input-group-addon">No Pendaftaran Kenderaan 1 </span>
                  <input type="text" name="nopendkereta" class="form-control" placeholder="WUQ2133 ">
              </div>

<div class="form-group input-group">
                  <span class="input-group-addon">No Pendaftaran Kenderaan 2, (JIKA ADA)  </span>
                  <input type="text" name="nopendkereta_1" class="form-control" placeholder="WUQ2133 || TIADA ( - )">
              </div>

<div class="form-group input-group">
                  <span class="input-group-addon">No Pendaftaran Kenderaan 3, (JIKA ADA) </span>
                  <input type="text" name="nopendkereta_2" class="form-control" placeholder="WUQ2133 || TIADA ( - )">
              </div>

              <div class="form-group input-group">
                  <span class="input-group-addon">Jenis Kenderaan</span>
                  <select type="text" name="kenderaan" class="form-control" >
<option value="-">-</option>
<option value="MOTOSIKAL 125 CC">MOTOSIKAL MELEBIHI 125CC</option>
<option value="MOTOSIKAL">MOTOSIKAL</option>
<option value="KERETA">KERETA</option>
<option value="VAN">VAN</option>
                                            </select>
              </div>
              
<div class="form-group input-group">
                  <span class="input-group-addon">Jenis Kenderaan 2,(JIKA ADA)</span>
                  <select type="text" name="kenderaan_1" class="form-control" >
<option value="-">-</option>
<option value="MOTOSIKAL 125 CC">MOTOSIKAL MELEBIHI 125CC</option>
<option value="MOTOSIKAL">MOTOSIKAL</option>
<option value="KERETA">KERETA</option>
<option value="VAN">VAN</option>
                                            </select>
              </div>

<div class="form-group input-group">
                  <span class="input-group-addon">Jenis Kenderaan 3,(JIKA ADA)</span>
                  <select type="text" name="kenderaan_2" class="form-control" >
<option value="-">-</option>
<option value="MOTOSIKAL 125 CC">MOTOSIKAL MELEBIHI 125CC</option>
<option value="MOTOSIKAL">MOTOSIKAL</option>
<option value="KERETA">KERETA</option>
<option value="VAN">VAN</option>
                                            </select>
              </div>



                <button type="submit" name="submit" class="btn btn-success">Hantar</button>
                <button type="reset" class="btn btn-danger">Kosongkan Ruang</button>
                <br><br><br><br><br><br>
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
