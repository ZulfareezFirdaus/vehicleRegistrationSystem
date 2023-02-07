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
    <form method="post">
    <div id="page-wrapper">
                <div class="col-lg-14">
                    <br>
                    <h1>Senarai Pelajar</h1>
                    <br>
                        <!-- /.panel-heading -->
                <div class="row">
                    <div class="col-lg-14">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Senarai Pelajar 
                            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kad Pengenalan</th>
			    <th>Tingkatan</th>
			    <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>No Telefon</th>
			    <th>Tarikh Lahir</th>
                                                <th>Jantina</th>
                                                <th style="color:green">Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                    <?php 

                    $sql = "SELECT * FROM student";
                    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
                    $row = mysqli_num_rows($query); // Count the record of table to see it's not empty                   
                    if($row != 0) {
                        while($ro = mysqli_fetch_assoc($query)){
                        
                                        echo "<tr>"; 
                                        echo "<td>".$ro['name']."</td>";
                                        echo "<input type='text' style='display:none' name='name' value='".$ro['name']."'>";
                                        echo "<td>".$ro['ic_number']."</td>";
                                        echo "<input type='text' style='display:none' name='ic_number' value='".$ro['ic_number']."'>";
                                        echo "<td>".$ro['form']."</td>";
                                        echo "<input type='text' style='display:none' name='form' value='".$ro['form']."'>";
                                        echo "<td>".$ro['class']."</td>";
                                        echo "<input type='text' style='display:none' name='class' value='".$ro['class']."'>";
                                        echo "<td>".$ro['address']."</td>";
                                        echo "<input type='text' style='display:none' name='address' value='".$ro['address']."'>";
                                        echo "<td>".$ro['phone_no']."</td>";
                                        echo "<input type='text' style='display:none' name='phone_no' value='".$ro['phone_no']."'>";
		           echo "<td>".$ro['birthdate']."</td>";
                                        echo "<input type='date' style='display:none' name='birthdate' value='".$ro['birthdate']."'>";
                                        echo "<td>".$ro['gender']."</td>";
                                        echo "<input type='text' style='display:none' name='gender' value='".$ro['gender']."'>";
                                        echo '<td><button type="submit" name="updatebutton" value='.$ro['ic_number'].' formaction="updStud.php" class="btn btn-warning">Update</button></td>';
                                        echo "</tr>";
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
            </form>
                    


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