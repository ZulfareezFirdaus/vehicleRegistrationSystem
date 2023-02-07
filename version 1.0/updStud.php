
<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <?php
    if(isset($_POST['updatebutton']));
    {
        $ic_number = $_POST['updatebutton']; 
	
    }
    ?>

<div id="page-wrapper">
<?php include("DashboardOnly.php");?>
</body>
</html>
    <!-- Page Content -->
<div id="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sistem Pendaftaran Pelajar</h1>
            </div>
            <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Pelajar
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php
                                        $sql = "SELECT * FROM studentreport WHERE ic_number = '$ic_number' "; 
                                        $query = mysqli_query($dbconn,$sql) or die ("Error: ". mysqli_error($dbconn)); 
                                        $row = mysqli_num_rows($query);
                                        if ($row != 0)
                                        {
                                            $r = mysqli_fetch_assoc($query);
                                        }
                                    ?>
<br><label>A. MAKLUMAT PELAJAR </label><br><br>
                                    <form method="post" action="updStud1.php">
                                    
                                        <div class="form-group">
                                            <label>No Kad Pengenalan</label>
                                            <input class="form-control" type="text" name="ic_number" value="<?php echo $r['ic_number'] ;?>" disabled>
                                            <p style="color:red"><b>*No.KAD PENGENALAN Tidak Boleh Diubah.</b></p>
                                        </div>
                                        <div class="form-group" style="display:none">
                                                    <label for="disabledSelect">No Kad Pengenalan</label>
                                                    <input name="ic_number" class="form-control" id="disabledInput" type="text" value="<?php echo $r['ic_number'] ;?>" >
                                        </div> <!-- Display Nothing But The Value Is There For Variable Purposed -->
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $r['name'] ;?>" placeholder="" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Tingkatan</label>
                                            <select name="form" class="form-control" id="form" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT form FROM studentreport where ic_number = '$ic_number'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['form']."</option>";

                                                        }
                                                ?> 
			        <option value="">-</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
           			        <option value="5">5</option>
                                            </select>
                                        </div>

 			<div class="form-group">
                                            <label>Kelas</label>
                                            <select name="class" class="form-control" id="class" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT class FROM studentreport where ic_number = '$ic_number'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['class']."</option>";

                                                        }
                                                ?> 
                                                    <option value="">-</option>
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
                                            <input class="form-control" type="text" name="address" value="<?php echo $r['address'] ;?>" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telefon Pelajar</label>
                                            <input class="form-control" type="text" name="phone_no" value="<?php echo $r['phone_no'] ;?>" placeholder="" required>
                                        </div>
		          <div class="form-group">
                                            <label>No Telefon Waris</label>
                                            <input class="form-control" type="text" name="phone_no_waris" value="<?php echo $r['phone_no_waris'] ;?>" placeholder="" required>

                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Jantina</label>
                                            <select name="gender" class="form-control" id="gender" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT gender FROM studentreport where ic_number = '$ic_number'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['gender']."</option>";

                                                        }
                                                ?> 
			        <option value="">-</option>
                                                    <option value="L">L</option>
                                                    <option value="P">P</option>
                                            </select>
                                        </div>
<br><label>B. MAKLUMAT KENDERAAN  </label><br><br>
 			<div class="form-group input-group">
			<span class="input-group-addon">No Pendaftran Kenderaan</span>
                                            <input class="form-control" type="text" name="nopendkereta" value="<?php echo $r['nopendkereta'] ;?>" placeholder="" required>
                                        </div>

<div class="form-group input-group">
                                            <span class="input-group-addon">Hubungan Dengan Pemilik</span>
                                            <select name="pertalian" class="form-control" id="pertalian" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT pertalian FROM studentreport where ic_number = '$ic_number'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['pertalian']."</option>";

                                                        }
                                                ?> 
<option value="">-</option>
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
                                           <span class="input-group-addon">Nama Pemilik Kenderaan</span>
                                            <input class="form-control" type="text" name="nmapemilik" value="<?php echo $r['nmapemilik'] ;?>" placeholder="" required>
                                        </div>

<div class="form-group input-group">
                                            <span class="input-group-addon">Jenis Kenderaan</span>
                                            <select name="kenderaan" class="form-control" id="kenderaan" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT kenderaan FROM studentreport where ic_number = '$ic_number'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['kenderaan']."</option>";

                                                        }
                                                ?> 
<option value="">-</option>
<option value="MOTOSIKAL 125 CC">MOTOSIKAL MELEBIHI 125CC</option>
<option value="MOTOSIKAL">MOTOSIKAL</option>
                                            </select>
                                        </div>

<div class="form-group input-group">
                                            <span class="input-group-addon">No Telefon Pemilik</span>
                                            <input class="form-control" type="text" name="no_telpemilik" value="<?php echo $r['no_telpemilik'] ;?>" placeholder="" required>
                                        </div>

<div class="form-group input-group">
                                            <span class="input-group-addon">Lesen</span>
                                            <select name="lesen" class="form-control" id="lesen" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT lesen FROM studentreport where ic_number= '$ic_number'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['lesen']."</option>";

                                                        }
                                                ?> 
 <option value="">-</option>                                                 
<option value="ADA">ADA</option>
<option value="ADA">TIADA</option>

</select>
                                        </div>
                                        <br>
                                        <br>  
                                        <button class="btn btn-warning" type="submit" name="updatebutton">Update <i class="fa fa-edit"></i></button>
                                        </form> 
                                        <br>              
                                    
                
                            
                    </div>

            <!-- ... Your content goes here ... -->
            

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>


