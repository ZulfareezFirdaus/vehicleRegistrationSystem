<?php 
    session_start();
    include("./../../dbconn.php");
    
    if($_POST['action'] == "daftarmasuk"){
        
        $password = mysqli_real_escape_string($dbconn, $_POST['password']);
        $username = mysqli_real_escape_string($dbconn, $_POST['username']);
        $email = mysqli_real_escape_string($dbconn, $_POST['email']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = " SELECT * FROM staff WHERE staff_username = '".$username."' ";
        $query = mysqli_query($dbconn, $sql);
        $numRows = mysqli_num_rows($query);

        if($numRows > 0){
            $output = 'Exist'; 
        }
        else{
            $sql = " INSERT INTO staff (staff_username,staff_password,staff_emailRecovery,staff_status) VALUES ('".$username."','".$hashed_password."','".$email."','Aktif') ";
            $query = mysqli_query($dbconn, $sql);
            
            if($query){
                $output = 'Success';
            }
        }
    }
    
    echo json_encode($output); 

?>