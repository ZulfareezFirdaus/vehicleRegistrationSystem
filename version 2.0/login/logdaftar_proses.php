<?php 
    session_start();
    include("../dbconn.php");

    $username = mysqli_real_escape_string($dbconn, $_POST['username']);
    
    if($_POST['action'] == "logmasuk"){
        
        $password = mysqli_real_escape_string($dbconn, $_POST['password']);
        
        $sql = " SELECT * FROM staff WHERE staff_username = '".$username."' ";
        $query = mysqli_query($dbconn, $sql);
        $numRows = mysqli_num_rows($query);
        $data = mysqli_fetch_assoc($query);

        if($numRows == 0){
            $output = 'NotExist'; 
        }
        else if ($numRows > 0){
            if(password_verify($password,$data['staff_password'])){
                $_SESSION['username'] = $username;
                $output = 'Success';
            }
            else{
                $output = 'WrongPassword'; 
            }

        }
    }

    else if($_POST['action'] == "resetPassword"){
        
        $emailRecovery = mysqli_real_escape_string($dbconn, $_POST['emailRecovery']);
        
        $sql = " SELECT * FROM staff WHERE staff_username = '".$username."' ";
        $query = mysqli_query($dbconn, $sql);
        $numRows = mysqli_num_rows($query);
        
        if($numRows == 0){
            $output = 'NotExistNoKP'; 
        }
        else if ($numRows > 0){
            
            $sql = " SELECT * FROM staff WHERE staff_emailRecovery = '".$emailRecovery."' ";
            $query = mysqli_query($dbconn, $sql);
            $numRows = mysqli_num_rows($query);
            if($numRows == 0){
                $output = 'NotExistEmail'; 
            }
            else if ($numRows > 0){
                $output = 'Success';
                $_SESSION['username'] = $username;
                
            }        

        }
    }

    else if($_POST['action'] == "newPassword"){
        
        $newPassword = mysqli_real_escape_string($dbconn, $_POST['newPassword']);
        
        $sql = "UPDATE staff SET staff_passwordrecovery = '".$newPassword."' WHERE staff_username = '".$_SESSION['username']."' ";
        $query = mysqli_query($dbconn, $sql);
        
        if($query){
            $output = 'Success';
        }
        else{
           $output = 'Failed';
        }
    }
    
    echo json_encode($output); 



?>

