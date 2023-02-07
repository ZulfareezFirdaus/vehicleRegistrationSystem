<html>
	<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  background-color: #51B55C; 
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

  //FIR variables
  $ic_number = $_POST['ic_number'];
  $name = $_POST['name'];
  $form = $_POST['form'];
  $class = $_POST['class'];
  $address = $_POST['address'];
  $phone_no = $_POST['phone_no'];
  $phone_no_waris = $_POST['phone_no_waris'];
  $nopendkereta =   $_POST['nopendkereta'];
  $lesen =   $_POST['lesen'];
  $nmapemilik =   $_POST['nmapemilik'];
  $no_telpemilik =   $_POST['no_telpemilik'];
  $pertalian =   $_POST['pertalian'];
  $gender =   $_POST['gender'];
  $kenderaan =   $_POST['kenderaan'];



  //FIR insert statement
  $sql1 = "INSERT INTO studentreport (ic_number,name, form, class, address, phone_no,phone_no_waris,nopendkereta,lesen,nmapemilik,no_telpemilik,pertalian,gender,kenderaan)
  VALUES ('".$ic_number."', '".$name."', '".$form."', '".$class."', '".$address."', '".$phone_no."',  '".$phone_no_waris."', '".$nopendkereta."', '".$lesen."', '".$nmapemilik."', '".$no_telpemilik."', '".$pertalian."', '".$gender."', '".$kenderaan."')";

 $run1 = mysqli_query($dbconn,$sql1) or die ("Error: ".mysqli_error($dbconn));
  
  if ($run1)
  {?>
    <table style="width:100%">
                                        
                                        
                                       
                                        <tbody>
<br>
                    <?php
                    $sql = "SELECT * FROM studentreport WHERE ic_number = '$ic_number'"; 
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
                                        echo "<td>".$ro['ic_number']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='ic_number' value='".$ro['ic_number']."'>";
		           echo "</tr>";
		           
		           echo "<tr>";
		           echo "<th>TINGKATAN :</th>";
                                        echo "<td>".$ro['form']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='form' value='".$ro['form']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>KELAS :</th>";
                                        echo "<td>".$ro['class']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='class' value='".$ro['class']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>NO. TELEFON PELAJAR :</th>";
                                        echo "<td>".$ro['phone_no']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='phone_no' value='".$ro['phone_no']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>NO. TELEFON WARIS :</th>";
                                        echo "<td>".$ro['phone_no_waris']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='phone_no_waris' value='".$ro['phone_no_waris']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>ALAMAT RUMAH :</th>";
                                        echo "<td>".$ro['address']."</td>";
                                        echo "<input type='text' style='display:none'
		           name='address' value='".$ro['address']."'>";
		           echo "</tr>";

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
		           echo "<th>JENIS KENDERAAN :</th>";
		           echo "<td>".$ro['kenderaan']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='kenderaan' value='".$ro['kenderaan']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>NAMA PEMILIK :</th>";
                                        echo "<td>".$ro['nmapemilik']."</td>";
                                        echo "<input type='text' style='display:none'
		           name='nmapemilik' value='".$ro['nmapemilik']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>NO. TELEFON PEMILIK :</th>";
                                        echo "<td>".$ro['no_telpemilik']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='no_telpemilik' value='".$ro['no_telpemilik']."'>";
		           echo "</tr>";

		           echo "<tr>";
		           echo "<th>PERTALIAN :</th>";
                                         echo "<td>".$ro['pertalian']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='pertalian' value='".$ro['pertalian']."'>";
		           echo "</tr>";


		           echo "<tr>";
		           echo "<th>LESEN :</th>";
   		           echo "<td>".$ro['lesen']."</td>";
                                        echo "<input type='text' style='display:none' 
		           name='lesen' value='".$ro['lesen']."'>";
	  	           echo "</tr>";

                                            }
                                            }?>

                                    </table>
                                            </tbody>
<br>
<form method="POST">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button  type="submit" name="printfir" value='.$ro['ic_number'].' formaction="fir2.php" class="button1">&nbsp;&nbsp;&nbsp; OK&nbsp;&nbsp;&nbsp;</button></form>;
                                    <?php
    echo "<h2>DATA SAVED</h2>";
    /*echo "<script type='text/javascript'>
          alert('Report Successfull Upload');
          setTimeout(window.location='pb04.php',2000);
          </script>";*/
  }
  else
  {
    echo "<script type='text/javascript'>
          alert('Rekod Sudah ADA');
          setTimeout(window.location='fir.php',2000);
          </script>";
  }
}


?>
</html>
