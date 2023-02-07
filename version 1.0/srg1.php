<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
	$teacher_Id = $_POST['teacher_Id'];
 	$ic_number = $_POST['ic_number'];
	$phone_no = $_POST['phone_no'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
 	$address = $_POST['address'];
	$name = $_POST['name'];

 	$sql0 = "INSERT INTO teacher( teacher_Id,ic_number,phone_no,birthdate, gender,address,name) VALUES ('".$teacher_Id."','".$ic_number."', '".$phone_no."',  '".$birthdate."','".$gender."','".$address."','".$name."')";

 	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn)); 

	if ($query0) 
	{
		echo "<script type='text/javascript'>
          alert('Successfull Register');
          setTimeout(window.location='srg.php',2000);
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