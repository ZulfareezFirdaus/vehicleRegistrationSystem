<html>
<body>
<?php
//session_start();
include("dbconn.php");

if(isset($_POST['updatebutton']))		
{		
  	 $name = $_POST['name'];
  	 $staffic_number = $_POST['staffic_number'];
 	 $address = $_POST['address'];
 	 $phone_no = $_POST['phone_no'];
	 $nopendkereta = $_POST['nopendkereta'];
	 $nopendkereta_1 = $_POST['nopendkereta_1'];
	 $nopendkereta_2 = $_POST['nopendkereta_2'];
                $gender = $_POST['gender'];
                $kenderaan = $_POST['kenderaan'];	
                $kenderaan_1 = $_POST['kenderaan_1'];
                $kenderaan_2 = $_POST['kenderaan_2'];	

	$sql = "UPDATE stafsokongan SET name = '$name' , staffic_number = '$staffic_number' , address = '$address', phone_no = '$phone_no',  nopendkereta = '$nopendkereta' , nopendkereta_1 = '$nopendkereta_1', nopendkereta_2 = '$nopendkereta_2',  gender = '$gender' , kenderaan = '$kenderaan' , kenderaan_1 = '$kenderaan_1', kenderaan_2 = '$kenderaan_2'  WHERE staffic_number = '$staffic_number'";	

	if (mysqli_query($dbconn, $sql)) {

		 echo "<script type='text/javascript'>
          alert('Successful Update!');
          setTimeout(window.location='rfis.php',2000);
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