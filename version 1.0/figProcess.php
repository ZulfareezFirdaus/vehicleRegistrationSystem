<head>	
<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
table {
  border-collapse: collapse;
}
table, th, td {
  border: 3px solid grey;
  padding :6px;
}

.button {

  border-radius: 12px;
  background-color: #27AE60; /* Green */
  border: none;
  color: white;
  padding: 9px 30px;
  text-align: center;
  text-decoration: none;
  display: center-block;
  font-size: 16px;
  margin: 6px 20px;
  cursor: pointer;
left: 30;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button1 {

  border-radius: 12px;
  background-color:#51B55C; 
  border: none;
  color: white;
  padding: 9px 30px;
  text-align: center;
  text-decoration: none;
  display: center-block;
  font-size: 16px;
  margin: 6px 20px;
  cursor: pointer;
left: 30;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
</style>
<?php
include ("dbconn.php");
if (isset($_POST['submit']))
{

  //FIG variables
  $nameTEC=  $_POST['nameTEC'];
  $ic_numberTEC = $_POST['ic_numberTEC'];
  $phone_noTEC = $_POST['phone_noTEC'];
  $addressTEC =   $_POST['addressTEC'];
  $sessi = $_POST['sessi'];
  $nopendkereta =   $_POST['nopendkereta'];
  $nopendkereta_1 = $_POST['nopendkereta_1'];
  $nopendkereta_2 = $_POST['nopendkereta_2'];
  $genderTEC = $_POST['genderTEC'];
  $kenderaanTEC = $_POST['kenderaanTEC'];
  $kenderaan_1 = $_POST['kenderaan_1'];
  $kenderaan_2 = $_POST['kenderaan_2'];



  //FIG insert statement
  $sql1 = "INSERT INTO teacherreport (nameTEC,ic_numberTEC,phone_noTEC,addressTEC,sessi,nopendkereta,nopendkereta_1,nopendkereta_2,genderTEC,kenderaanTEC,kenderaan_1,kenderaan_2)
  VALUES ( '".$nameTEC."', '".$ic_numberTEC."', '".$phone_noTEC."', '".$addressTEC."','".$sessi."', '".$nopendkereta."', '".$nopendkereta_1."', '".$nopendkereta_2."','".$genderTEC."', '".$kenderaanTEC."', '".$kenderaan_1."', '".$kenderaan_2."')";

  $run1 = mysqli_query($dbconn,$sql1) or die ("Error: ".mysqli_error($dbconn));
  
  if ($run1)
  {?>
    <table style="width:100%">
                                        
                                        
                                       
                                        <tbody>
<br><br><br>
                    <?php
                    $sql =  "SELECT * FROM teacherreport WHERE ic_numberTEC = '$ic_numberTEC' ";  
                    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
                    $row = mysqli_num_rows($query); // Count the record of table to see it's not empty
                    if($row != 0) {
                        while($ro = mysqli_fetch_assoc($query)){


                                     

                                        echo "<tr>";
                                        echo "<th>NAMA :</th>";
                                        echo "<td>".$ro['nameTEC']."</td>";
                                        echo "<input type='text' style='display:none' 		
		           name='nameTEC' value='".$ro['nameTEC']."'>";
                                        echo "</tr>";

		           echo "<tr>";
		           echo "<th>KAD PENGENALAN :</th>";
                                        echo "<td>".$ro['ic_numberTEC']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='ic_numberTEC' value='".$ro['ic_numberTEC']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>NO TELEFON :</th>";
                                        echo "<td>".$ro['phone_noTEC']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='phone_noTEC' value='".$ro['phone_noTEC']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>ALAMAT RUMAH :</th>";
                                        echo "<td>".$ro['addressTEC']."</td>";
                                        echo "<input type='text' style='display:none'
		           name='addressTEC' value='".$ro['addressTEC']."'>";
		           echo "<tr>";
 echo "<tr>";
		           echo "<th>SESSI :</th>";
		           echo "<td>".$ro['sessi']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='sessi' value='".$ro['sessi']."'>";
		           echo "</tr>";

 echo "<tr>";
		           echo "<th>JANTINA :</th>";
		           echo "<td>".$ro['genderTEC']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='genderTEC' value='".$ro['genderTEC']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>NO. PENDAFTARAN KERETA :</th>";
                                        echo "<td>".$ro['nopendkereta']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='nopendkereta' value='".$ro['nopendkereta']."'>";
		           echo "</tr>";

 echo "<tr>";
		           echo "<th>NO. PENDAFTARAN KERETA 2 :</th>";
                                        echo "<td>".$ro['nopendkereta_1']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='nopendkereta_1' value='".$ro['nopendkereta_1']."'>";
		           echo "</tr>";

echo "<tr>";
		           echo "<th>NO. PENDAFTARAN KERETA 3 :</th>";
                                        echo "<td>".$ro['nopendkereta_2']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='nopendkereta_2' value='".$ro['nopendkereta_2']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>KENDERAAN  :</th>";
		           echo "<td>".$ro['kenderaanTEC']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='kenderaanTEC' value='".$ro['kenderaanTEC']."'>";
		           echo "</tr>";

 echo "<tr>";
		           echo "<th>KENDERAAN 2 :</th>";
		           echo "<td>".$ro['kenderaan_1']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='kenderaan_1' value='".$ro['kenderaan_1']."'>";
		           echo "</tr>";

 echo "<tr>";
		           echo "<th>KENDERAAN 3 :</th>";
		           echo "<td>".$ro['kenderaan_2']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='kenderaan_2' value='".$ro['kenderaan_2']."'>";
		           echo "</tr>";

		          


                                        echo "";

                                            }
                                            }?>
                                            </tbody>
                                    </table>
<br>
<form method="POST">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button  type="submit" name="printfir" value='.$ro['ic_number'].' formaction="fig2.php" class="button1">&nbsp;&nbsp;&nbsp; OK&nbsp;&nbsp;&nbsp;</button></form>;
                                    <?php
    echo "<br><h2>DATA SAVED</h2>";
    /*echo "<script type='text/javascript'>
          alert('Report Successfull Upload');
          setTimeout(window.location='pb04.php',2000);
          </script>";*/
  }
  else
  {
    echo "<script type='text/javascript'>
          alert('Problem with the report');
          setTimeout(window.location='fig.php',2000);
          </script>";
  }
}

?>
