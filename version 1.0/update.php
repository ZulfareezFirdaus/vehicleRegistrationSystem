<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['update']))		
{		
	 $idbooking = $_POST['idbooking'];
  	 $location = $_POST['location'];
  	 $picktime = $_POST['picktime'];
	 $pickdate = $_POST['pickdate'];
  	 $picksession = $_POST['picksession'];
 	 $droptime = $_POST['droptime'];
 	 $dropdate = $_POST['dropdate'];
  	 $dropsession = $_POST['dropsession'];
	 
     		

	$sql = "UPDATE booking SET idbooking = '$idbooking', location = '$location', picktime = '$picktime', pickdate = '$pickdate', picksession = '$picksession', droptime = '$droptime', dropdate = '$dropdate' , dropsession = '$dropsession'  WHERE idbooking = '$idbooking'";	

	if (mysqli_query($dbconn, $sql)) {

		 echo "<script type='text/javascript'>
          alert('Successful Update!');
          setTimeout(window.location='record.php',2000);
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