<html>
<body>
<?php
//session_start();
include("dbconn.php");

if(isset($_POST['updatebutton']))		
{		
	 $ic_number = $_POST['ic_number'];
  	 $name = $_POST['name'];
  	 $form = $_POST['form'];
  	 $class = $_POST['class'];
 	 $address = $_POST['address'];
 	 $phone_no = $_POST['phone_no'];
  	 $phone_no_waris = $_POST['phone_no_waris'];
	 $nopendkereta = $_POST['nopendkereta'];
                $lesen = $_POST['lesen'];
                $nmapemilik = $_POST['nmapemilik'];
                $no_telpemilik = $_POST['no_telpemilik'];
                $pertalian = $_POST['pertalian'];
                $gender = $_POST['gender'];
                $kenderaan = $_POST['kenderaan'];		

	$sql = "UPDATE studentreport SET name = '$name', form = '$form', class = '$class', address = '$address', phone_no = '$phone_no', phone_no_waris = '$phone_no_waris', nopendkereta = '$nopendkereta' , lesen = '$lesen' , nmapemilik = '$nmapemilik' , no_telpemilik = '$no_telpemilik' , pertalian = '$pertalian' ,  gender = '$gender' , kenderaan = '$kenderaan'  WHERE ic_number = '$ic_number'";	

	if (mysqli_query($dbconn, $sql)) {

		 echo "<script type='text/javascript'>
          alert('Successful Update!');
          setTimeout(window.location='rfir.php',2000);
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