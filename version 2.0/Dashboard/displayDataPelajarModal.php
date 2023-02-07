<?php  
 if(isset($_POST["student_nokp"]))  
 {  
      $output = '';  
     
      session_start();
      include('../dbconn.php'); 
     
      $query = "SELECT student_vehicle.*, student.* FROM student_vehicle INNER JOIN student ON student.student_nokp = student_vehicle.student_nokp WHERE student.student_nokp = '".$_POST["student_nokp"]."'";  
      $result = mysqli_query($dbconn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '
                <tr>  
                     <td width="30%" style="background:rgba(105, 108, 255, 0.16) !important;font-weight:800;color:#696cff" colspan="2"><label>Maklumat Pelajar</label></td>
                </tr>  
                <tr>  
                     <td width="30%"><label>No. Kad Pengenalan</label></td>  
                     <td width="70%">'.$row["student_nokp"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Nama</label></td>  
                     <td width="70%">'.$row["student_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Tingkatan</label></td>  
                     <td width="70%">'.$row["student_form"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Kelas</label></td>  
                     <td width="70%">'.$row["student_class"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Alamat Rumah</label></td>  
                     <td width="70%">'.$row["student_address"].' </td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>No. Phone Pel</label></td>  
                     <td width="70%">'.$row["student_noPhonePelajar"].' </td>  
                </tr>
                <tr>  
                     <td width="30%"><label>No. Phone Waris</label></td>  
                     <td width="70%">'.$row["student_noPhoneWaris"].' </td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Jantina</label></td>  
                     <td width="70%">'.$row["student_gender"].' </td>  
                </tr>
                <tr>  
                     <td width="30%"><label> Tarikh Daftar</label></td>  
                     <td width="70%">'.$row["student_timestamp"].' </td>  
                </tr>
                <tr>  
                     <td width="30%" style="background:rgba(105, 108, 255, 0.16) !important;font-weight:800;color:#696cff" colspan="2"><label>Maklumat Kenderaan Pelajar</label></td>
                </tr> 
                <tr>  
                     <td width="30%"><label>No. Pendaftaran</label></td>  
                     <td width="70%">'.$row["StudVehicle_regNum"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Jenis Kenderaan</label></td>  
                     <td width="70%">'.$row["StudVehicle_Type"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Nama Pemilik</label></td>  
                     <td width="70%">'.$row["StudVehicle_ownerName"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Hubungan dengan Pemilik</label></td>  
                     <td width="70%">'.$row["StudVehicle_relationship"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>No. Tel Pemilik</label></td>  
                     <td width="70%">'.$row["StudVehicle_ownerPhone"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Status Lesen</label></td>  
                     <td width="70%">'.$row["StudVehicle_license"].'</td>  
                </tr> 
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>