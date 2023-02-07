<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SENARAI PENDAFTARAN KENDERAAN PELAJAR</title>

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
</body>
</html>
    <!-- Page Content -->
 
                <div class="col-lg-14">

                    <br>
                        <!-- /.panel-heading -->
                <div class="row">
                    <div class="col-lg-14">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Laporan
                            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
 <th>Nama</th>
<th>Kad Pengenalan</th>
<th>Tingkatan</th>
<th>Alamat Rumah</th>
<th>No Telefon</th>
<th>No Pendaftaran Kereta :</th>
<th>Kenderaan :</th>
<th>Jenis Kereta :</th>
<th>Pertalian :</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                    <?php

                    $sql = "SELECT * FROM teacherreport ORDER BY teacher_Id";
                    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
                    $row = mysqli_num_rows($query); // Count the record of table to see it's not empty
                    if($row != 0) {
                        while($ro = mysqli_fetch_assoc($query)){

                                        echo "<tr>";

                                        echo "<td>".$ro['name']."</td>";
                                        echo "<input type='date' style='display:none' 		
		           name='name' value='".$ro['name']."'>";

                                        echo "<td>".$ro['ic_number']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='ic_number' value='".$ro['ic_number']."'>";

                                        

                                        echo "<td>".$ro['phone_no']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='phone_no' value='".$ro['phone_no']."'>";

		          

                                        echo "<td>".$ro['address']."</td>";
                                        echo "<input type='text' style='display:none'
		           name='address' value='".$ro['address']."'>";

                                        echo "<td>".$ro['nopendkereta']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='nopendkereta' value='".$ro['nopendkereta']."'>";

                                      

                                     

                                         echo "<td>".$ro['pertalian']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='pertalian' value='".$ro['pertalian']."'>";



		           echo "<td>".$ro['gender']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='gender' value='".$ro['gender']."'>";

		           echo "<td>".$ro['kenderaan']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='kenderaan' value='".$ro['kenderaan']."'>";

	  	           
echo "</tr>";

   <button class ="button" type="submit" id="print" onclick="printdiv('print_borang2');">Print </button>
                                        

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
