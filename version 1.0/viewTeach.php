<!DOCTYPE html>
<html lang="en">
<head>

<script>
    function printdiv(printdivname)
      {
      var headstr = "<html><head><title>BORANG PERMOHONAN PELEKAT MOTORSIKAL SMK TELOK GADONG</title></head><body>";
      var footstr = "</body>";
      var newstr = document.getElementById(printdivname).innerHTML;
      var oldstr = document.body.innerHTML;
      document.body.innerHTML = headstr+newstr+footstr;
      window.print();
      document.body.innerHTML = oldstr;
      return false;
      }
    </script>

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

<!-- DataTables CSS -->
    <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->


<!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    
<!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

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
  
      </div>
</body>
</html>
    <!-- Page Content -->
   <div id="page-wrapper">
                <div class="col-lg-14">
                    <br>
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;Rekod Laporan Kenderaan Guru</h1>
                    <br>
 <td><form  method="POST"><button type="submit" id="print" onclick="printdiv('print_borang2');" class="btn btn-info">&nbsp;&nbsp;Print <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;<button type="submit" name="updatebutton" value='.$ro['ic_numberTEC'].' formaction="viewTeach.php" class="btn btn-warning">&nbsp;Kembali&nbsp;&nbsp; </button></form></td>
 <div id="print_borang2">
      <div id="table_header">                       
 <!-- /.panel-heading -->
                <div class="row">
                    <div class="col-lg-14">
                        <div class="panel panel-success">
                            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              &nbsp; &nbsp; &nbsp;Laporan </a> 
            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">

                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                        <thead>
                                            <tr>
                                                 <th>Nama</th>
                                                <th>No. IC</th>
                                                <th>Alamat</th>
                                                <th>No. Telefon</th>
			    <th>Sessi</th>
                                                <th>Jant</th>
			    <th>No. Pend 1</th>
			    <th>No. Pend 2</th>
			    <th>No. Pend 3</th>
			    <th>Jenis Kend 1</th>
			    <th>Jenis Kend 2</th>
			    <th>Jenis Kend 3</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>

                    <?php

                    $sql = "SELECT * FROM teacherreport ORDER BY ic_numberTEC";
                    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
                    $row = mysqli_num_rows($query); // Count the record of table to see it's not empty
                    if($row != 0) {
                        while($ro = mysqli_fetch_assoc($query)){

                                        echo "<tr>";
                                        echo "<td>".$ro['nameTEC']."</td>";
                                        echo "<input type='date' style='display:none' name='nameTEC' value='".$ro['nameTEC']."'>";
                                        echo "<td>".$ro['ic_numberTEC']."</td>";
                                        echo "<input type='text' style='display:none' name='class' value='".$ro['ic_numberTEC']."'>";
                                        
                                        echo "<td>".$ro['addressTEC']."</td>";
                                        echo "<input type='text' style='display:none' name='addressTEC' value='".$ro['addressTEC']."'>";     
		           echo "<td>".$ro['phone_noTEC']."</td>";
                                        echo "<input type='text' style='display:none' name='phone_noTEC' value='".$ro['phone_noTEC']."'>";            
                     
                                        echo "<td>".$ro['sessi']."</td>";
                                        echo "<input type='text' style='display:none' name='sessi' value='".$ro['sessi']."'>";
                                        echo "<td>".$ro['genderTEC']."</td>";
                                        echo "<input type='text' style='display:none' name='genderTEC' value='".$ro['genderTEC']."'>";

                                        echo "<td>".$ro['nopendkereta']."</td>";
                                        echo "<input type='text' style='display:none' name='noependkereta' value='".$ro['nopendkereta']."'>";
                                        echo "<td>".$ro['nopendkereta_1']."</td>";
                                        echo "<input type='text' style='display:none' name='nopendkereta_1' value='".$ro['nopendkereta_1']."'>";
                                        echo "<td>".$ro['nopendkereta_2']."</td>";
                                        echo "<input type='text' style='display:none' name='nopendkereta_2' value='".$ro['nopendkereta_2']."'>";
 		           echo "<td>".$ro['kenderaanTEC']."</td>";
                                        echo "<input type='text' style='display:none' name='kenderaanTEC' value='".$ro['kenderaanTEC']."'>";
 		           echo "<td>".$ro['kenderaan_1']."</td>";
                                        echo "<input type='text' style='display:none' name='kenderaan_1' value='".$ro['kenderaan_1']."'>";
 		           echo "<td>".$ro['kenderaan_2']."</td>";
		           echo "<input type='text' style='display:none' name='kenderaan_2' value='".$ro['kenderaan_2']."'>";
           
                                       

                                            }
                                            } ?>
               
                                        </tbody>
                                    </table>
 </div>
                            </div>
                                </div>
                            </div>
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

<!-- DataTables JavaScript -->
<script src="js/dataTables/jquery.dataTables.min.js"></script>
<script src="js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

<script src="datatables.net/js/jquery.dataTables.min.js"></script>
<script src="datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
</body>
</html>

