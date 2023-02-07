<?php

session_start();
include('../../../dbconn.php');

if($_POST["status"] == "semakNoKP"){
    $sql2 = "SELECT student.*,student_vehicle.* FROM student_vehicle INNER JOIN student ON student_vehicle.StudVehicle_regNum = student.StudVehicle_regNum WHERE student.student_nokp = '".$_POST["student_nokp"]."'";
    $query2 = mysqli_query($dbconn,$sql2);
    $numrows = mysqli_num_rows($query2);
    $row = mysqli_fetch_assoc($query2);

    if($numrows > 0){
        $output = "
        <div class='row'>
            <div class='col-lg-6'>
                <table class='table' style='margin-top:35px;' id='student_status'>
                    <tbody class='table-border-bottom-0'>
                        <tr>
                            <td width='35%'><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>Kad Penge.</strong></td>
                            <td>: ".$row['student_nokp']."</td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-react fa-lg text-info me-3'></i> <strong>Nama</strong></td>
                            <td>: ".$row['student_name']."</td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-vuejs fa-lg text-success me-3'></i> <strong>Ting./Kelas</strong></td>
                            <td>: ".$row['student_form']." ".$row['student_class']."</td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-vuejs fa-lg text-success me-3'></i> <strong>No. Tel. Pelajar</strong></td>
                            <td>: ".$row['student_noPhonePelajar']." </td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-vuejs fa-lg text-success me-3'></i> <strong>No. Tel. Waris</strong></td>
                            <td>: ".$row['student_noPhoneWaris']."</td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-bootstrap fa-lg text-primary me-3'></i> <strong>Tarikh Daftar</strong></td>
                            <td>: ".$row['student_timestamp']."</td>
                        </tr> 
                        <tr>
                            <td><i class='fab fa-bootstrap fa-lg text-primary me-3'></i> <strong>Status</strong></td>
                            <td style='font-weight:900;text-transform:uppercase;'>: ".$row['student_activation']."</td>
                        </tr> 
                    </tbody>
                </table>
            </div>
            <div class='col-lg-6'>
                <table class='table' style='margin-top:35px;' id='student_status'>
                    <tbody class='table-border-bottom-0'>
                        <tr>
                            <td width='35%'><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>No. Pendaft.</strong></td>
                            <td>: ".$row['StudVehicle_regNum']."</td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-react fa-lg text-info me-3'></i> <strong>Nama Pemilik</strong></td>
                            <td>: ".$row['StudVehicle_ownerName']."</td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-vuejs fa-lg text-success me-3'></i> <strong>No. Pemilik</strong></td>
                            <td>: ".$row['StudVehicle_ownerPhone']."</td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-vuejs fa-lg text-success me-3'></i> <strong>Hubungan</strong></td>
                            <td>: ".$row['StudVehicle_relationship']." </td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-vuejs fa-lg text-success me-3'></i> <strong>Jenis Kend.</strong></td>
                            <td>: ".$row['StudVehicle_Type']."</td>
                        </tr>
                        <tr>
                            <td><i class='fab fa-bootstrap fa-lg text-primary me-3'></i> <strong>Status Lesen</strong></td>
                            <td>: ".$row['StudVehicle_license']."</td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
               "; 
    }
    else{
        $output = "TakWujud";
    }
}
else if($_POST["status"] == "semakNoPendaftaran"){
    $sql2 = "SELECT student_vehicle.*,student.* FROM student_vehicle INNER JOIN student ON student.StudVehicle_regNum = student_vehicle.StudVehicle_regNum WHERE student_vehicle.StudVehicle_regNum = '".$_POST["StudVehicle_regNum"]."' AND student.student_activation = 'Aktif' ";
    $query2 = mysqli_query($dbconn,$sql2);
    $numrows = mysqli_num_rows($query2);
    $row = mysqli_fetch_assoc($query2);

    if($numrows > 0){ 
               
               //Jika Kenderaan Ada owner lain, Maklumat owner lama disimpan dalam session ini.
               $_SESSION['student_nokp'] = $row['student_nokp'];
        
               $output = " 
                <tbody class='table-border-bottom-0'>
                    <tr>
                        <td width='29%'><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>No. K. Pengenalan :</strong></td>
                        <td>".$row['student_nokp']."</td>
                    </tr>
                    <tr>
                        <td><i class='fab fa-react fa-lg text-info me-3'></i> <strong>Nama :</strong></td>
                        <td>".$row['student_name']."</td>
                    </tr>
                    <tr>
                        <td><i class='fab fa-vuejs fa-lg text-success me-3'></i> <strong>Tingkatan/Kelas</strong></td>
                        <td>".$row['student_form']." ".$row['student_class']."</td>
                    </tr>
                    <tr>
                        <td><i class='fab fa-bootstrap fa-lg text-primary me-3'></i> <strong>Tarikh Mendaftar :</strong></td>
                        <td>".$row['student_timestamp']."</td>
                    </tr> 
                    <tr>
                        <td><i class='fab fa-bootstrap fa-lg text-primary me-3'></i> <strong>Status :</strong></td>
                        <td style='font-weight:900;text-transform:uppercase;'>".$row['student_activation']."</td>
                    </tr> 
                </tbody>
               ";  
    }
    else{
        $output = "TakWujud";
    }
}
else if($_POST["status"] == "KemaskiniMaklumat"){
    
    //Session ini untuk membenarkan maklumat pelajar motor lama dikemaskini dengan maklumat pelajar baru.
    $_SESSION['kemaskini_maklumat'] = $_SESSION['student_nokp'];
}

echo json_encode($output); 
?>
