<?php

session_start();
include('../../../dbconn.php');

if(isset($_POST["student_nokp"]))
{
    $student_name= mysqli_real_escape_string($dbconn,$_POST["student_name"]);
    $student_form = mysqli_real_escape_string($dbconn,$_POST["student_form"]);
    $student_gender = mysqli_real_escape_string($dbconn,$_POST["student_gender"]);
    $student_noPhonePelajar = mysqli_real_escape_string($dbconn,$_POST["student_noPhonePelajar"]);
    $student_noPhoneWaris = mysqli_real_escape_string($dbconn,$_POST["student_noPhoneWaris"]);
    $student_address = mysqli_real_escape_string($dbconn,$_POST["student_address"]);
    $student_class= mysqli_real_escape_string($dbconn,$_POST["student_class"]);
    $student_nokp = mysqli_real_escape_string($dbconn,$_POST["student_nokp"]);

    $StudVehicle_regNum = mysqli_real_escape_string($dbconn,$_POST["StudVehicle_regNum"]);
    $StudVehicle_Type = mysqli_real_escape_string($dbconn,$_POST["StudVehicle_Type"]);
    $StudVehicle_ownerName = mysqli_real_escape_string($dbconn,$_POST["StudVehicle_ownerName"]);
    $StudVehicle_ownerPhone = mysqli_real_escape_string($dbconn,$_POST["StudVehicle_ownerPhone"]);
    $StudVehicle_relationship = mysqli_real_escape_string($dbconn,$_POST["StudVehicle_relationship"]);
    $StudVehicle_license = mysqli_real_escape_string($dbconn,$_POST["StudVehicle_license"]);


    $query = "
    INSERT INTO student(student_name, student_form, student_gender, student_noPhonePelajar,student_noPhoneWaris,student_address,student_class,student_nokp,student_activation,StudVehicle_regNum) 
    VALUES('".$student_name."', '".$student_form."', '".$student_gender."', '".$student_noPhonePelajar."', '".$student_noPhoneWaris."', '".$student_address."', '".$student_class."', '".$student_nokp."', 'Aktif', '".$StudVehicle_regNum."'); ";

    if(mysqli_query($dbconn, $query))
    {

        $query = "
        INSERT INTO student_vehicle(StudVehicle_regNum, StudVehicle_Type, StudVehicle_ownerName, StudVehicle_ownerPhone, StudVehicle_relationship, StudVehicle_license) 
        VALUES('".$StudVehicle_regNum."', '".$StudVehicle_Type."', '".$StudVehicle_ownerName."', '".$StudVehicle_ownerPhone."', '".$StudVehicle_relationship."','".$StudVehicle_license."') ";

        if(mysqli_query($dbconn, $query))
        {
            $output = "Berjaya";
        }
        else
        {
            $output = "TakBerjaya_vehicle";
        }
    }
    else
    {
        $output = "TakBerjaya_student";
    }
}

echo json_encode($output); 

?>
