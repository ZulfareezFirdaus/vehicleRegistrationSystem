<!DOCTYPE html>
<html>
  <head>


	<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>
    <title>UNIT DISIPLIN SMKTG</title>
  
    <style>
.button {

  border-radius: 12px;
  background-color: #27AE60; /* Green */
  border: none;
  color: white;
  padding: 9px 30px;
  text-align: center;
  text-decoration: none;
  display: center-block;
  font-size: 16px;
  margin: 6px 20px;
  cursor: pointer;
left: 30;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
table {
  border-collapse: collapse;
}
table, th, td {
  border: 3px solid grey;
  padding :6px;
}
.button {

  border-radius: 12px;
  background-color: #27AE60; /* Green */
  border: none;
  color: white;
  padding: 9px 30px;
  text-align: center;
  text-decoration: none;
  display: center-block;
  font-size: 16px;
  margin: 6px 20px;
  cursor: pointer;
left: 30;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {

  border-radius: 12px;
  background-color: #E74C3C; /* Green */
  border: none;
  color: white;
  padding: 9px 30px;
  text-align: center;
  text-decoration: none;
  display: center-block;
  font-size: 16px;
  margin: 6px 20px;
  cursor: pointer;
left: 30;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
   
    </style>

    <?php
    include("dbconn.php");
    if (isset($_POST['printfirr']))
    {
      $sql0 = "SELECT * from studentreport WHERE ic_number = ".$_POST['printfirr']."";
      $sql1 = mysqli_query($dbconn,$sql0) or die ("Error: ".mysqli_error($dbconn));
      $data = mysqli_fetch_assoc($sql1);
      $name = $data['name'];
      $ic_number = $data['ic_number'];
      $address = $data['address'];
      $phone_no = $data['phone_no'];
      $phone_no_waris = $data['phone_no_waris'];
      $class = $data['class'];
      $form = $data['form'];
      $gender = $data['gender'];
      $nopendkereta = $data['nopendkereta'];
      $kenderaan = $data['kenderaan'];
      $nmapemilik = $data['nmapemilik'];
      $no_telpemilik = $data['no_telpemilik'];
      $pertalian = $data['pertalian'];
      $lesen = $data['lesen'];







    }
      ?>
  </head>

  <body  font-size:25;">

        <table style = "background-color: white;border-collapse: collapse" width = "1000" >
<h1>MAKLUMAT PELAJAR</h1>
        <tbody>

<tr>
<th>NAMA :</th>
<td><?php echo $name;?></td>
<input type='text' style='display:none' 		
name='name' value='".$ro['name']."'>
</tr>
<tr>
<th>KAD PENGENALAN :</th>
<td><?php echo $ic_number;?></td>
<input type='text' style='display:none' 		
name='ic_number' value='".$ro['ic_number']."'>
</tr>
<tr>
<th>ALAMAT :</th>
<td><?php echo $address;?></td>
<input type='text' style='display:none' 		
name='address' value='".$ro['address']."'>
</tr>
<tr>
<th>NO TELEFON :</th>
<td><?php echo $phone_no;?></td>
<input type='text' style='display:none' 		
name='phone_no' value='".$ro['phone_no']."'>
</tr>
<tr>
<th>NO TELEFON WARIS :</th>
<td><?php echo $phone_no_waris;?></td>
<input type='text' style='display:none' 		
name='phone_no_waris' value='".$ro['phone_no_waris']."'>
</tr>
<tr>
<th>KELAS :</th>
<td><?php echo $class;?></td>
<input type='text' style='display:none' 		
name='class' value='".$ro['class']."'>
</tr>
<tr>
<th>TINGKATAN :</th>
<td><?php echo $form;?></td>
<input type='text' style='display:none' 		
name='form' value='".$ro['form']."'>
</tr>
<tr>
<th>JANTINA :</th>
<td><?php echo $gender;?></td>
<input type='text' style='display:none' 		
name='gender' value='".$ro['gender']."'>
</tr>
<th>JENIS KENDERAAN  :</th>
<td><?php echo $kenderaan;?></td>
<input type='text' style='display:none' 		
name='kenderaan' value='".$ro['kenderaan']."'>
</tr>
<tr>
<th>NO. PENDAFTARAN :</th>
<td><?php echo $nopendkereta;?></td>
<input type='text' style='display:none' 		
name='nopendkereta' value='".$ro['nopendkereta']."'>
</tr>
<tr>
<th>NAMA PEMILIK :</th>
<td><?php echo $nmapemilik;?></td>
<input type='text' style='display:none' 		
name='nmapemilik' value='".$ro['nmapemilik']."'>
</tr>
<tr>
<th>NO. TELEFON PEMILIK :</th>
<td><?php echo $no_telpemilik;?></td>
<input type='text' style='display:none' 		
name='no_telpemilik' value='".$ro['no_telpemilik']."'>
</tr>
<th>PERTALIAN :</th>
<td><?php echo $pertalian;?></td>
<input type='text' style='display:none' 		
name='pertalian' value='".$ro['pertalian']."'>
</tr>
<th>LESEN :</th>
<td><?php echo $lesen;?></td>
<input type='text' style='display:none' 		
name='lesen' value='".$ro['lesen']."'>
</tr>



        
<div class="wsitem">
<pre class="main">



</pre>
</div>
</div>
      </div>

      <div class="wsitem">
        <table style = "border-collapse: collapse" width = "700" >
          
        </table>
<br><br>
<button class ="button1" type="submit" onclick="location.href = 'rfir.php'">Kembali</button> 
      </div>
    </div>
  </body>
</html>


</body>
</html>
