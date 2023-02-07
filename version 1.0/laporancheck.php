<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['submit']))		
{	
	$laporan = $_POST['laporan'];

	if ($laporan == "Kad Pelajar") {          
    	header("Location: kadPelajar.php");      
	}
	else {
    	header("Location: baranghilang.php");
	}       
				
}
	mysqli_close($dbconn);
?>					
</body>
</html>