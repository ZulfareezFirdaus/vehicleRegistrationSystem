<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['check']))		
{	
	
	$nopendkereta = $_POST['nopendkereta'];

	$sql0 = "SELECT * FROM studentreport where nopendkereta = '".$nopendkereta."'";
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));
	$ro0 = mysqli_num_rows($query0);

	if ($ro0 == 0)
	{
	    $sql0 = "SELECT * FROM teacherreport where nopendkereta = '".$nopendkereta."'";
	    $query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));
	    $ro0 = mysqli_num_rows($query0);

		if ($ro0 == 0)
		{
		    $sql0 = "SELECT * FROM teacherreport where nopendkereta_1 = '".$nopendkereta."'";
			$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));
			$ro0 = mysqli_num_rows($query0);

			if ($ro0 == 0)
			{

				$sql0 = "SELECT * FROM teacherreport where nopendkereta_2 = '".$nopendkereta."'";
				$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));
				$ro0 = mysqli_num_rows($query0);

				if ($ro0 == 0)
			{



					if ($ro0 == 0)
			{



					if ($ro0 == 0)
			{



				if ($ro0 == 0)
			{
				echo "<script type='text/javascript'>
      		    alert('Data not Found! Please Register First.');
       		    setTimeout(window.location='TrackTrace.php',2000);
       		   </script>";
			} 

			else
			{
				$r = mysqli_fetch_assoc($query0);
				$_SESSION['staffic_number'] = $r['staffic_number'];
				header("Location: TrackTrace5.php");
			}
			}

			else
			{
				$r = mysqli_fetch_assoc($query0);
				$_SESSION['staffic_number'] = $r['staffic_number'];
				header("Location: TrackTrace5.php");
			}
			}

			else
			{
				$r = mysqli_fetch_assoc($query0);
				$_SESSION['staffic_number'] = $r['staffic_number'];
				header("Location: TrackTrace5.php");
			}
			} 

			else
			{
				$r = mysqli_fetch_assoc($query0);
				$_SESSION['ic_numberTEC'] = $r['ic_numberTEC'];
				header("Location: TrackTrace4.php");
			}
			} 

			else
			{
				$r = mysqli_fetch_assoc($query0);
				$_SESSION['ic_numberTEC'] = $r['ic_numberTEC'];
				header("Location: TrackTrace4.php");
			}
		} 

		else
		 {
		    $r = mysqli_fetch_assoc($query0);
		    $_SESSION['ic_numberTEC'] = $r['ic_numberTEC'];
		    header("Location: TrackTrace4.php");
		}
		
	} 

	else {

		$r = mysqli_fetch_assoc($query0);
		$_SESSION['ic_number'] = $r['ic_number'];
		header("Location: TrackTrace3.php");

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>