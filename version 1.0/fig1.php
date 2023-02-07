<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['check']))		
{	
	
	$teacher_Id = $_POST['teacher_Id'];

	$sql0 = "SELECT * FROM teacher where teacher_Id= '".$teacher_Id."'";
	
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));

	$ro0 = mysqli_num_rows($query0);

	if ($ro0 == 0)
	{
		echo "<script type='text/javascript'>
          alert('Rekod Guru Tidak Dijumpai! Sila Daftar Guru Baharu.');
          setTimeout(window.location='srg.php',2000);
          </script>";
	} 

	else {

		$r = mysqli_fetch_assoc($query0);
		$_SESSION['teacher_Id'] = $r['teacher_Id'];
		header("Location: fig2.php");

	}
				
}
	mysqli_close($dbconn);
?>					
	</body>
</html>