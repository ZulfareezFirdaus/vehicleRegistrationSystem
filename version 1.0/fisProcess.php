	<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>
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
  $name=  $_POST['name']; 
  $staffic_number = $_POST['staffic_number'];
  $phone_no = $_POST['phone_no'];
  $address =   $_POST['address'];
  $nopendkereta =   $_POST['nopendkereta'];
  $nopendkereta_1 = $_POST['nopendkereta_1'];
  $nopendkereta_2 = $_POST['nopendkereta_2'];
  $gender = $_POST['gender'];
  $kenderaan = $_POST['kenderaan'];
  $kenderaan_1 = $_POST['kenderaan_1'];
  $kenderaan_2 = $_POST['kenderaan_2'];



  //FIG insert statement
  $sql1 = "INSERT INTO stafsokongan (name,staffic_number,phone_no,address,nopendkereta,nopendkereta_1,nopendkereta_2,gender,kenderaan,kenderaan_1,kenderaan_2)
  VALUES ( '".$name."', '".$staffic_number."', '".$phone_no."', '".$address."','".$nopendkereta."', '".$nopendkereta_1."', '".$nopendkereta_2."','".$gender."', '".$kenderaan."', '".$kenderaan_1."', '".$kenderaan_2."')";

  $run1 = mysqli_query($dbconn,$sql1) or die ("Error: ".mysqli_error($dbconn));
  
  if ($run1)
  {?>
    <table style="width:100%">
                                        
                                        
                                       
                                        <tbody>
<br><br><br><br>
                    <?php
                    $sql =  "SELECT * FROM stafsokongan WHERE staffic_number = '$staffic_number' ";  
                    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
                    $row = mysqli_num_rows($query); // Count the record of table to see it's not empty
                    if($row != 0) {
                        while($ro = mysqli_fetch_assoc($query)){


                                      

                                        echo "<tr>";
                                        echo "<th>NAMA :</th>";
                                        echo "<td>".$ro['name']."</td>";
                                        echo "<input type='text' style='display:none' 		
		           name='name' value='".$ro['name']."'>";
                                        echo "</tr>";

		           echo "<tr>";
		           echo "<th>KAD PENGENALAN :</th>";
                                        echo "<td>".$ro['staffic_number']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='ic_number' value='".$ro['staffic_number']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>NO TELEFON :</th>";
                                        echo "<td>".$ro['phone_no']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='phone_no' value='".$ro['phone_no']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>ALAMAT RUMAH :</th>";
                                        echo "<td>".$ro['address']."</td>";
                                        echo "<input type='text' style='display:none'
		           name='address' value='".$ro['address']."'>";

 echo "<tr>";
		           echo "<th>JANTINA :</th>";
		           echo "<td>".$ro['gender']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='gender' value='".$ro['gender']."'>";
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
		           echo "<td>".$ro['kenderaan']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='kenderaan' value='".$ro['kenderaan']."'>";
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

                                            }
                                            }?>
                                            </tbody>
                                    </table>
<br>
<form method="POST">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button  type="submit" name="printfir" value='.$ro['ic_number'].' formaction="fis2.php" class="button1">&nbsp;&nbsp;&nbsp; OK&nbsp;&nbsp;&nbsp;</button></form>;
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
