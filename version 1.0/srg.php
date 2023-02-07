<!DOCTYPE html>
<html lang="en">
<head>
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

<div id="wrapper">
<?php include("DashboardOnly.php");?>
</body>
</html>
    <!-- Page Content -->
<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pendaftaran Guru</h1>
            </div>
            <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Daftar Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" action="srg1.php">
                                    <form>
                                        <div class="form-group">
                                            <label>ID Guru</label>
                                            <input class="form-control" type="number" name="teacher_Id" value="" placeholder="" required>
                                            <p style="color:red"><b>*Pastikan NO.ID GURU betul sebelum disahkan</b></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="name" value="" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kad Pengenalan</label>
                                            <input class="form-control" type="number" name="ic_number" value="" placeholder="without (-)" required>
</div>                                          
                                        <div class="form-group">
                                            <label>Alamat Rumah</label>
                                            <input class="form-control" type="text" name="address" value="" placeholder="" required>
		         </div>

                                        <div class="form-group">
                                            <label>No Telefon</label>
                                            <input class="form-control" type="number" name="phone_no" value="" placeholder="011012345678" required>
                                        </div>

                                       <div class="form-group">
                                            <label>Jantina</label>
                                            <select name="gender" class="form-control" required>
                                                    <option value="">-----</option>
                                                    <option value="Lelaki">Lelaki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>  

<div class="form-group input-group">
                  <label>Tarikh Lahir</label>
                  <input type="date" name="birthdate" class="form-control" placeholder="dd/mm/yyyy">
              </div>
                                        <button class="btn btn-info" type="submit" name="submit">Register</button>
                                        </form> 
                                        <br>              
                                    
                
                         </form>   
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
