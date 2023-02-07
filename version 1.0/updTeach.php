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
        $ic_numberTEC = $_POST['updatebutton']; 
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
                <h1 class="page-header">Sistem Pendaftaran Guru</h1>
            </div>

            <!-- /.col-lg-12 -->
             </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php
                                        $sql = "SELECT * FROM teacherreport WHERE ic_numberTEC = '$ic_numberTEC' "; 
                                        $query = mysqli_query($dbconn,$sql) or die ("Error: ". mysqli_error($dbconn)); 
                                        $row = mysqli_num_rows($query);
                                        if ($row != 0)
                                        {
                                            $r = mysqli_fetch_assoc($query);
                                        }
                                    ?>
<br><label>A. MAKLUMAT Guru </label><br><br>
                                    <form method="post" action="updTeach1.php">
                                    
<!-- Display Nothing But The Value Is There For Variable Purposed -->
<div class="form-group">
                                            <label>No Kad Pengenalan</label>
                                            <input class="form-control" type="text" name="ic_numberTEC" value="<?php echo $r['ic_numberTEC'] ;?>" disabled>
                                            <p style="color:red"><b>*No.KAD PENGENALAN Tidak Boleh Diubah.</b></p>
                                        </div>                                       
 <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="nameTEC" value="<?php echo $r['nameTEC'] ;?>" placeholder="" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Alamat Rumah</label>
                                            <input class="form-control" type="text" name="addressTEC" value="<?php echo $r['addressTEC'] ;?>" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telefon Guru</label>
                                            <input class="form-control" type="text" name="phone_noTEC" value="<?php echo $r['phone_noTEC'] ;?>" placeholder="" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Jantina</label>
                                            <select name="genderTEC" class="form-control" id="genderTEC" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT genderTEC FROM teacherreport where ic_numberTEC = '$ic_numberTEC'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['genderTEC']."</option>";

                                                        }
                                                ?> 
                                                    <option value="-">-</option>
                                                    <option value="L">L</option>
                                                    <option value="P">P</option>
                                            </select>
                                        </div>

  <div class="form-group">
                                            <label>Sessi</label>
                                            <select name="sessi" class="form-control" id="sessi" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT sessi FROM teacherreport where ic_numberTEC = '$ic_numberTEC'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['sessi']."</option>";

                                                        }
                                                ?> 
                                                    <option value="-">-</option>
                                                    <option value="PAGI">PAGI</option>
                                                    <option value="PETANG">PETANG</option>
                                            </select>
                                        </div>
<br><label>B. MAKLUMAT KENDERAAN  </label><br><br>

<div class="form-group input-group">
			<span class="input-group-addon">No Pendaftran Kenderaan 1</span>
                                            <input class="form-control" type="text" name="nopendkereta" value="<?php echo $r['nopendkereta'] ;?>" placeholder="" required>
                                        </div>

<div class="form-group input-group">
			<span class="input-group-addon">No Pendaftran Kenderaan 2</span>
                                            <input class="form-control" type="text" name="nopendkereta_1" value="<?php echo $r['nopendkereta_1'] ;?>" placeholder="" required>
                                        </div>

<div class="form-group input-group">
			<span class="input-group-addon">No Pendaftran Kenderaan 3</span>
                                            <input class="form-control" type="text" name="nopendkereta_2" value="<?php echo $r['nopendkereta_2'] ;?>" placeholder="" required>
                                        </div>

<div class="form-group input-group">
                                            <span class="input-group-addon">Jenis Kenderaan 1</span>
                                            <select name="kenderaanTEC" class="form-control" id="kenderaanTEC" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT kenderaanTEC FROM teacherreport where ic_numberTEC = '$ic_numberTEC'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['kenderaanTEC']."</option>";

                                                        }
                                                ?> 
<option value="-">-</option>
<option value="MOTOSIKAL 125 CC">MOTOSIKAL MELEBIHI 125CC</option>
<option value="MOTOSIKAL">MOTOSIKAL</option>
<option value="KERETA">KERETA</option>
<option value="VAN">VAN</option>
                                            </select>
                                        </div>

<div class="form-group input-group">
                                            <span class="input-group-addon">Jenis Kenderaan 2</span>
                                            <select name="kenderaan_1" class="form-control" id="kenderaan_1" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT kenderaan_1 FROM teacherreport where ic_numberTEC = '$ic_numberTEC'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['kenderaan_1']."</option>";

                                                        }
                                                ?> 
 <option value="-">-</option>                                                  
<option value="MOTOSIKAL 125 CC">MOTOSIKAL MELEBIHI 125CC</option>
<option value="MOTOSIKAL">MOTOSIKAL</option>
<option value="KERETA">KERETA</option>
<option value="VAN">VAN</option>
                                            </select>
                                        </div>

<div class="form-group input-group">
                                            <span class="input-group-addon">Jenis Kenderaan 3</span>
                                            <select name="kenderaan_2" class="form-control" id="kenderaan_2" type="text" required>
                                                <?php 
                                                    $sql5 = "SELECT kenderaan_2 FROM teacherreport where ic_numberTEC = '$ic_numberTEC'";
                                                    $query5 = mysqli_query($dbconn, $sql5) or die("Error: " . mysqli_error($dbconn));
                                                    $ro = mysqli_num_rows($query5); // Count the record of table to see it's not empty                   
                                                        while($row = mysqli_fetch_assoc($query5)) {

                                                            echo "<option>".$row['kenderaan_2']."</option>";

                                                        }
                                                ?> 
<option value="-">-</option>                                                  
<option value="MOTOSIKAL 125 CC">MOTOSIKAL MELEBIHI 125CC</option>
<option value="MOTOSIKAL">MOTOSIKAL</option>
<option value="KERETA">KERETA</option>
<option value="VAN">VAN</option>
                                            </select>
                                        </div>

                                        <button class="btn btn-warning" type="submit" name="updatebutton">Update <i class="fa fa-edit"></i></button>
                                        </form> 
                                        <br>              
                                    
                
                            
                    </div>

            <!-- ... Your content goes here ... -->
            

        </div>
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
