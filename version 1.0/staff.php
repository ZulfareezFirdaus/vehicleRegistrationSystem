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
    if (isset($_POST['printfis']))
    {
      $sql0 = "SELECT * from stafsokongan WHERE staffic_number = ".$_POST['printfis']."";
      $sql1 = mysqli_query($dbconn,$sql0) or die ("Error: ".mysqli_error($dbconn));
      $data = mysqli_fetch_assoc($sql1);
      $name = $data['name'];
      $staffic_number = $data['staffic_number'];
      $address = $data['address'];
      $phone_no = $data['phone_no'];
      $gender = $data['gender'];
      $nopendkereta = $data['nopendkereta'];
      $nopendkereta_1 = $data['nopendkereta_1'];
      $nopendkereta_2 = $data['nopendkereta_2'];
      $kenderaan = $data['kenderaan'];
      $kenderaan_1 = $data['kenderaan_1'];
      $kenderaan_2 = $data['kenderaan_2'];




    }
      ?>
  </head>

  <body  font-size:25;">

        <table style = "background-color: white;border-collapse: collapse" width = "1000" >
<h1>MAKLUMAT STAFF</h1>
        <tbody>

<tr>
<th>NAMA :</th>
<td><?php echo $name;?></td>
<input type='text' style='display:none' 		
name='name' value='".$ro['name']."'>
</tr>
<tr>
<th>KAD PENGENALAN :</th>
<td><?php echo $staffic_number;?></td>
<input type='text' style='display:none' 		
name='staffic_number' value='".$ro['staffic_number']."'>
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
<th>JANTINA :</th>
<td><?php echo $gender;?></td>
<input type='text' style='display:none' 		
name='gender' value='".$ro['gender']."'>
</tr>
<th>JENIS KENDERAAN 1 :</th>
<td><?php echo $kenderaan;?></td>
<input type='text' style='display:none' 		
name='kenderaan' value='".$ro['kenderaan']."'>
</tr>
<th>JENIS KENDERAAN 2 :</th>
<td><?php echo $kenderaan_1;?></td>
<input type='text' style='display:none' 		
name='kenderaan_1' value='".$ro['kenderaan_1']."'>
</tr>
<th>JENIS KENDERAAN 3 :</th>
<td><?php echo $kenderaan_2;?></td>
<input type='text' style='display:none' 		
name='kenderaan_2' value='".$ro['kenderaan_2']."'>
</tr>
<tr>
<th>NO. PENDAFTARAN 1:</th>
<td><?php echo $nopendkereta;?></td>
<input type='text' style='display:none' 		
name='nopendkereta' value='".$ro['nopendkereta']."'>
</tr>
<tr>
<th>NO. PENDAFTARAN 2:</th>
<td><?php echo $nopendkereta_1;?></td>
<input type='text' style='display:none' 		
name='nopendkereta_1' value='".$ro['nopendkereta_1']."'>
</tr>
<tr>
<th>NO. PENDAFTARAN 1:</th>
<td><?php echo $nopendkereta_2;?></td>
<input type='text' style='display:none' 		
name='nopendkereta_2' value='".$ro['nopendkereta_2']."'>
</tr>
<tr>

        
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
<button class ="button1" type="submit" onclick="location.href = 'rfis.php'">Kembali</button> 
      </div>
    </div>
  </body>
</html>


</body>
</html>
