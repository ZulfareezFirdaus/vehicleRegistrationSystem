<!DOCTYPE html>
<html>
  <head>
	<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>


    <script>
    function printdiv(printdivname)
      {
      var headstr = "<html><head><title>BORANG PERMOHONAN PELEKAT MOTORSIKAL SMK TELOK GADONG</title></head><body>";
      var footstr = "</body>";
      var newstr = document.getElementById(printdivname).innerHTML;
      var oldstr = document.body.innerHTML;
      document.body.innerHTML = headstr+newstr+footstr;
      window.print();
      document.body.innerHTML = oldstr;
      return false;
      }
    </script>
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

.button1 {

  border-radius: 12px;
  background-color:  #E74C3C; /* Green */
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
    .gridcont {
      display: grid;
      grid-template-columns: 375px 375px;
    }
    .grid-item {}
    .flexCont {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }
    .flexItem{
      flex-basis: 50%;
      flex-grow: 1;
    }

    .whitespace {
      display: grid;
      grid-template-rows: 350px 250px auto auto;
    }
    .wsitem {}

    td,th{
      border-left: 2px solid grey;
      border-right: 2px solid grey;
    }
    tr{
        border-bottom:  2px solid black;
        border-top: 2px solid black;
    }
    .main{
      font-family: Calibri;
      font-size: 18;
    }
    </style>

    <?php
    include("dbconn.php");
    if (isset($_POST['printrfir']))
    {
      $sql0 = "SELECT * FROM studentreport WHERE ic_number = ".$_POST['printrfir']."";
      $sql1 = mysqli_query($dbconn,$sql0) or die ("Error: ".mysqli_error($dbconn));
      $data = mysqli_fetch_assoc($sql1);
      $name = $data['name'];
      $ic_number = $data['ic_number'];
      $form = $data['form'];
      $address = $data['address'];
      $phone_no = $data['phone_no'];
      $phone_no_waris = $data['phone_no_waris'];
      $gender = $data['gender'];
      $nopendkereta = $data['nopendkereta'];
      $kenderaan = $data['kenderaan'];
      $nmapemilik = $data['nmapemilik'];
      $pertalian = $data['pertalian'];
      $lesen = $data['lesen'];




    }
      ?>
  </head>
  <body style="font-family:Calibri; font-size:14;">
    <button class ="button" type="submit" id="print" onclick="printdiv('print_borang');">Print <i class="glyphicon glyphicon-print"></i></button>
    <button class ="button1" type="submit" onclick="location.href = 'fir2.php'">Kembali <i class="glyphicon glyphicon-remove"></i></button> 
    <br><br>
    <div id="print_borang">
      <div id="table_header">
        <table style = "background-color: white;border-collapse: collapse" width = "700" >
        <tbody>
          <tr>
            <td>
              <img src="images/smktg.png" style="width:150px;height:150px;" align = "center" >
            </td>
            <td style= "font-family:calibri; font-weight:bold" rowspan="1" align = "center" width = "550">
             <h2> BORANG PERMOHONAN PELEKAT MOTORSIKAL</h2>Sekolah Menengah Kebangsaan Telok Gadong <br>Jalan Serampang 3, Off Jalan Teluk Pulai, 41100 Klang, Selangor
            </td>

          </tr>
          <tr>

          
        </tr>
      </table>
      </div><p>
      <div class="whitespace">
        <div class="wsitem">
<br>
        <h3>BUTIR-BUTIR PEMILIK KENDERAAN</h3>
        Nama Pemohon                                  :<u><b><?php echo $name;?></b></u><br>
        <div class="gridcont">
        <div class="grid-item">Tingkatan              :<u><b><?php echo $form;?></b></u><br></div> 
        <div class="grid-item">No.Kad Pengenalan             :<u><b><?php echo $ic_number;?></b></u><br></div>
        <div class="grid-item">No.Kenderaan           :<u><b><?php echo $nopendkereta;?></b></u><br></div>
        <div class="grid-item">Jenis Kenderaan        :<u><b><?php echo $kenderaan;?></b></u><br></div>
        </div>
        Nama Pemilik Berdaftar                        :<u><b><?php echo $nmapemilik;?></b></u><br>
        <div class="gridcont">
        <div class="grid-item">Hubungan Dengan Pemilik:<u><b><?php echo $pertalian;?></b></u><br></div>
        <div class="grid-item">Lesen                  :<u><b><?php echo $lesen;?></b></u><br></div>
        </div>
        Alamat                                        :<u><b><?php echo $address;?></b></u><br>
        <div class="gridcont">
        <div class="grid-item">No. Telefon Waris      :<u><b><?php echo $phone_no_waris;?></b></u><br></div>
        <div class="grid-item">No.Telefon Murid:      :<u><b><?php echo $phone_no;?></b></u><br></div>
        </div>
  <br><br> 
<h3><i>SYARAT-SYARAT DAN PERATURAN</i></h3>
        1.  Pelekat motorsikal dijual dengan harga RM 5.00 sahaja bagi setiap motorsikal yang berdaftar. <br>
        2.  Seorang pemohon terhad untuk satu (1) pelekat sahaja.<br>
        3.  Hanya motorsikal yang mempunyai pelekat sahaja dibenarkan diletakkan di kawasan sekolah.<br>
        4.  Pelekat perlu dipamerkan dihadapan motorsikal. Tanpa pelekat, motorsikal perlu diletakkan <br>di luar kawasan sekolah.<br>
        5.  Motorsikal yang tidak mengikut spesifikasi atau diubahsuai sehingga manggangu ketenteraman <br> sekolah tidak dibenarkan masuk ke kawasan sekolah.<br>
        7.  Motorsikal yang diletakkan di dalam kawasan sekolah adalah termaktub dengan semua peraturan <br> yang ditetapkan oleh pihak sekolah.<br>
        8.  Kegagalan untuk mematuhi peraturan yang ditetapkan akan menyebabkan motorsikal anda dirantai<br> dan bayaran denda RM 10.00 akan dikenakan sekiranya untuk menuntut kembali motorsikal anda.<br>
           <br>
            
          <p>
        
            


<div class="wsitem">
<pre class="main">

<br><br><br><br><br><br><br>
      Tandatangan Bapa/Ibu/Waris:                                                                  Tandatangan Murid:



         ...........................................                                                                   ....................................... 
        (                                                )                                                                (                                            )

                                	                             
                                                               
Bertarikh ...............................

</pre>
</div>
</div>
      </div>

      <div class="wsitem">
        <table style = "border-collapse: collapse" width = "700" >
          
        </table>
      </div>
    </div>
  </body>
</html>


</body>
</html>
