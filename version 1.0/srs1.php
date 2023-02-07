<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
	$ic_number = $_POST['ic_number'];
 	$name = $_POST['name'];
 	$form = $_POST['form'];
 	$class = $_POST['class'];
 	$address = $_POST['address'];
 	$phone_no = $_POST['phone_no'];
	$birthdate = $_POST['birthdate'];
 	$gender = $_POST['gender'];

 	$sql0 = "INSERT INTO student( ic_number,name, form, class, address, phone_no,birthdate, gender) VALUES ('".$ic_number."', '".$name."', '".$form."', '".$class."', '".$address."', '".$phone_no."',  '".$birthdate."','".$gender."' )";

 	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn)); 

	if ($query0) 
	{
		echo "<script type='text/javascript'>
          alert('Successfull Register');
          setTimeout(window.location='srs.php',2000);
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