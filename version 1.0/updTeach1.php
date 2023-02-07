<html>
<body>
<?php
//session_start();
include("dbconn.php");

if(isset($_POST['updatebutton']))		
{		

  	 $nameTEC = $_POST['nameTEC'];
  	 $ic_numberTEC = $_POST['ic_numberTEC'];
 	 $addressTEC = $_POST['addressTEC'];
 	 $phone_noTEC = $_POST['phone_noTEC'];
  	 $sessi = $_POST['sessi'];
	 $nopendkereta = $_POST['nopendkereta'];
	 $nopendkereta_1 = $_POST['nopendkereta_1'];
	 $nopendkereta_2 = $_POST['nopendkereta_2'];
                $genderTEC = $_POST['genderTEC'];
                $kenderaanTEC = $_POST['kenderaanTEC'];	
                $kenderaan_1 = $_POST['kenderaan_1'];
                $kenderaan_2 = $_POST['kenderaan_2'];	

	$sql = "UPDATE teacherreport SET nameTEC = '$nameTEC' , ic_numberTEC = '$ic_numberTEC' , addressTEC = '$addressTEC', phone_noTEC = '$phone_noTEC', sessi = '$sessi' , nopendkereta = '$nopendkereta' , nopendkereta_1 = '$nopendkereta_1', nopendkereta_2 = '$nopendkereta_2',  genderTEC = '$genderTEC' , kenderaanTEC = '$kenderaanTEC' , kenderaan_1 = '$kenderaan_1', kenderaan_2 = '$kenderaan_2'  WHERE ic_numberTEC = '$ic_numberTEC'";	

	if (mysqli_query($dbconn, $sql)) {

		 echo "<script type='text/javascript'>
          alert('Successful Update!');
          setTimeout(window.location='rfig.php',2000);
          </script>";

	} 

	else {

		echo "Error: " . mysqli_error($dbconn);

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>