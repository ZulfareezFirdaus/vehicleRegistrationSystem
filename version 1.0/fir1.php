<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['check']))		
{	
	
	$ic_number = $_POST['ic_number'];

	$sql0 = "SELECT * FROM student where ic_number = '".$ic_number."'";
	
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));

	$ro0 = mysqli_num_rows($query0);

	if ($ro0 == 0)
	{
		echo "<script type='text/javascript'>
          alert('Rekod Pelajar Tidak Dijumpai! Sila Daftar Pelajar Baharu.');
          setTimeout(window.location='srs.php',2000);
          </script>";
	} 

	else {

		$r = mysqli_fetch_assoc($query0);
		$_SESSION['ic_number'] = $r['ic_number'];
		header("Location: fir2.php");

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>