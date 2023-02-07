<html>
<body>
<?php
//session_start();
include("dbconn.php");

if(isset($_POST['updatebutton']))		
{		
	$name = $_POST['name'];
	$ic_number = $_POST['ic_number'];
	$form = $_POST['form'];
	$class = $_POST['class'];
	$address = $_POST['address'];
	$phone_no = $_POST['phone_no'];	
	$birthdate = $_POST['birthdate'];	
	$gender = $_POST['gender'];		

	$sql = "UPDATE student SET name = '$name', form = '$form', class = '$class', address = '$address', phone_no = '$phone_no', birthdate = '$birthdate', gender = '$gender' WHERE ic_number = '$ic_number'";	

	if (mysqli_query($dbconn, $sql)) {

		 echo "<script type='text/javascript'>
          alert('Successful Update!');
          setTimeout(window.location='rpelajar.php',2000);
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