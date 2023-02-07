<html>
<body>
<?php
session_start();
include("dbconn.php");

if(isset($_POST['login']))
{
				$staff_ID = $_POST['staff_ID'];
				$pass_word = $_POST['pass_word'];				

				$sql = "SELECT * FROM staff WHERE staff_ID = '$staff_ID' AND pass_word = '$pass_word'";

				$query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));

				$row = mysqli_num_rows($query);

				if($row == 0) 
				{
					echo "<script type='text/javascript'>
          				alert('Wrong User ID/Password entered!');
          				setTimeout(window.location='index.html',2000);
          				</script>";
				}
				else 
				{
					$r = mysqli_fetch_assoc($query);
					$_SESSION['staff_ID'] = $r['staff_ID'];
					//$_SESSION['pass_word'] = $r['pass_word'];
					
					$sql1 = " SELECT * FROM staff s JOIN teacherreport t ON s.staff_ID = t.ic_numberTEC WHERE s.staff_ID = " . $staff_ID;
					$query1 = mysqli_query($dbconn, $sql1) or die("Error: " . mysqli_error($dbconn));
					$row1 = mysqli_num_rows($query1);
					//echo $row1;
					
					$_SESSION['usertype'] = $usertype;
					header("Location: Dashboard.php");
				}

			}

			mysqli_close($dbconn);
?>
					
	</body>
</html>