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

<!-- DataTables CSS -->
    <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
<link href="css/startmin.css" rel="stylesheet">

<!-- Metis Menu Plugin JavaScript -->
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
</body>
</html>
    <!-- Page Content -->
   <div id="page-wrapper">
                <div class="col-lg-16">
                    <br>
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;Rekod Laporan Kenderaan Pelajar</h1>
                    <br>
                        <!-- /.panel-heading -->
                <div class="row">
                    <div class="col-lg-16">
                        <div class="panel panel-success">
                            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              &nbsp; &nbsp; &nbsp;Laporan <a href="Dashboard.php" class="alert-link"></a> 
            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>No. IC</th>
			    <th>Ting</th>
			    <th>Kelas</th>
			    <th>No. Pend</th>
			    <th>Jenis Kend</th>
 			    <th>Lesen</th>
                                                <th style="color:green"></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                    <?php

                    $sql = "SELECT * FROM studentreport ORDER BY ic_number";
                    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
                    $row = mysqli_num_rows($query); // Count the record of table to see it's not empty
                    if($row != 0) {
                        while($ro = mysqli_fetch_assoc($query)){

                                         echo"<tr>";
                                        echo "<td>".$ro['name']."</td>";
                                        echo "<input type='date' style='display:none' name='name' value='".$ro['name']."'>";
                                        echo "<td>".$ro['ic_number']."</td>";
                                        echo "<input type='text' style='display:none' name='ic_number' value='".$ro['ic_number']."'>";
                                        echo "<td>".$ro['form']."</td>";
                                        echo "<input type='text' style='display:none' name='form' value='".$ro['form']."'>";
                                        echo "<td>".$ro['class']."</td>";
                                        echo "<input type='text' style='display:none' name='class' value='".$ro['class']."'>";
                                        echo "<td>".$ro['nopendkereta']."</td>";
                                        echo "<input type='text' style='display:none' name='nopendkereta' value='".$ro['nopendkereta']."'>";
 		           echo "<td>".$ro['kenderaan']."</td>";
                                        echo "<input type='text' style='display:none' name='kenderaan' value='".$ro['kenderaan']."'>";
		          echo "<td>".$ro['lesen']."</td>";
                                        echo "<input type='text' style='display:none' name='lesen' value='".$ro['lesen']."'>";
                                        echo '<td><form method="POST"><button type="submit" name="printfir" value='.$ro['ic_number'].' formaction="borang2.php" class="btn btn-info">&nbsp;&nbsp;Print <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;&nbsp;&nbsp;</button></form><form method="POST"> <button type="submit" name="updatebutton" value='.$ro['ic_number'].' formaction="updStud.php" class="btn btn-warning">Update <i class="fa fa-edit"></i>&nbsp;&nbsp;</button></form><form method="POST"> <button type="submit" name="printfirr" value='.$ro['ic_number'].' formaction="pelajar.php" class="btn btn-success">View Detail</button></form></td>';
                                        echo "</tr>";
                                        echo "</tr>";
                                            }
                                            } ?>
                                        </tbody>
  <td><form method="POST"><button type="submit" name="printALL" value='.$ro['ic_number'].' formaction="borang3.php" class="btn btn-info"> &nbsp;Print All&nbsp;<i class="glyphicon glyphicon-print"></i></button></form></td>
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
