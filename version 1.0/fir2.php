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
                  <h1 class="page-header">Pendaftaran Kenderaan Pelajar</h1>
              </div>
          </div>
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Pendaftaran . 
            </div>
      <div class="col-lg-6">
        <br><label>A. MAKLUMAT PELAJAR </label><br><br>
          <form role="form" method="post" action="firProcess.php">
              
              <div>
                <div class="form-group">
                                            <label>Kad Pengenalan</label>
                                            <input class="form-control" type="number" name="ic_number" value="" placeholder="Tanpa dash(-)" required>
                                            <p style="color:red"><b>*Pastikan NO.KAD PENGENALAN betul sebelum disahkan</b></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="name" value="" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tingkatan</label>
                                            <select name="form" class="form-control" required>
                                                    <option value="">-</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
			        <option value="5">5</option>
                                            </select> 						
</div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="class" class="form-control" required>
                                                    <option value="-">-</option>
			        <option value="KAA">KAA</option>
                                                    <option value="SETIA">SETIA</option>
                                                    <option value="MAJU">MAJU</option>
    			        <option value="TEKUN">TEKUN</option>
			        <option value="ERAT">ERAT</option>
			       <option value="LUHUR">LUHUR</option>
			       <option value="UTAMA">UTAMA</option>
			       <option value="KREATIF">KREATIF</option>
			       <option value="GIGIH">GIGIH</option>
			       <option value="AMAN">AMAN</option>
			       <option value="DAMAI">DAMAI</option>
			       <option value="USAHA">USAHA</option>
			       <option value="GEMILANG">GEMILANG</option>
			       <option value="KASIH">KASIH</option>
			       <option value="LESTARI">LESTARI</option>
			       <option value="AMANAH">AMANAH</option>
                                            </select> 
		</div>                                          
                                        <div class="form-group">
                                            <label>Alamat Rumah</label>
                                            <input class="form-control" type="text" name="address" value="" placeholder="" required>
		         </div>

                                        <div class="form-group">
                                            <label>No Telefon Pelajar</label>
                                            <input class="form-control" type="text" name="phone_no" value="" placeholder="011012345678" required>
                                        </div>

<div class="form-group">
                                            <label>No Telefon Waris</label>
                                            <input class="form-control" type="text" name="phone_no_waris" value="" placeholder="011012345678" required>
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
                  <span class="input-group-addon">No Pendaftaran Kenderaan </span>
                  <input type="text" name="nopendkereta" class="form-control" placeholder="WUQ2133">
              </div>
              <div class="form-group input-group">
                  <span class="input-group-addon">Jenis Kenderaan</span>
                  <select type="text" name="kenderaan" class="form-control" >
<option value="-">-</option>
<option value="MOTOSIKAL 125 CC">MOTOSIKAL MELEBIHI 125CC</option>
<option value="MOTOSIKAL">MOTOSIKAL</option>
                                            </select>
              </div>

<div class="form-group input-group">
                  <span class="input-group-addon">Nama Pemilik Berdaftar</span>
                  <input type="text" name="nmapemilik" class="form-control" placeholder="">
              </div>

<div class="form-group input-group">
                  <span class="input-group-addon">No. Tel Pemilik </span>
                  <input type="text" name="no_telpemilik" class="form-control" placeholder="0192133645">
              </div>
<div class="form-group input-group">
                  <span class="input-group-addon">Hubungan Dengan Pemilik</span>
                  <select type="text" name="pertalian" class="form-control" placeholder="">
<option value="-">-</option>
<option value="DATUK/NENEK">DATUK/NENEK</option>
<option value="IBU/BAPA">IBU/BAPA</option>
<option value="ADIK-BERADIK">ADIK-BERADIK</option>
<option value="PENJAGA">PENJAGA</option>
<option value="SAUDARA">SAUDARA</option>
<option value="SENDIRI">SENDIRI</option>
<option value="SUAMI/ISTERI">SUAMI/ISTERI</option>
</select>
              </div>

<div class="form-group input-group">
                  <span class="input-group-addon">Lesen</span>
                  <select type="text" name="lesen" class="form-control" placeholder="">
<option value="-">-</option>
<option value="ADA">ADA</option>
<option value="TIADA">TIADA</option>
</select>
              </div>

                <button type="submit" name="submit" class="btn btn-success">Hantar </button>
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
