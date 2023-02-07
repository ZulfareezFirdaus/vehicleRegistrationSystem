<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/smktgIcon.ico"/>
<script>
    function printdiv(printdivname)
      {
      var headstr = "<html><head><title>PERMOHONAN PELEKAT MOTORSIKAL SMK TELOK GADONG</title></head><body>";
      var footstr = "</body>";
      var newstr = document.getElementById(printdivname).innerHTML;
      var oldstr = document.body.innerHTML;
      document.body.innerHTML = headstr+newstr+footstr;
      window.print();
      document.body.innerHTML = oldstr;
      return false;
      }
    </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  border-radius: 12px;
  background-color: #17A589  ;
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
  background-color: #DC1F0C  ;
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
.dropbtn {
  background-color: #8E44AD;
  color: white;
  padding: 12px 25px;
  font-size: 16px;
  border: none;
  cursor: pointer;
 border-radius: 12px;
}


.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <?php  
 $dbconn = mysqli_connect("localhost","root","Greyson1718","spkp");  
 $query =  "Select (Select count(*) from studentreport where gender='L' AND class = 'kaa' AND form = 5) AS KaaL,                                 
(Select count(*) from studentreport where gender='P' AND class = 'kaa' AND form = 5 ) AS KaaP,                                       
(Select count(*) from studentreport where gender='L' AND class = 'setia' AND form = 5) AS SetL,                                       
(Select count(*) from studentreport where gender='P' AND class = 'setia' AND form = 5 ) AS SetP,                                     
(Select count(*) from studentreport where gender='L' AND class = 'maju' AND form = 5) AS MajL,                                       
(Select count(*) from studentreport where gender='P' AND class = 'maju' AND form = 5 ) AS MajP,                                      
(Select count(*) from studentreport where gender='L' AND class = 'tekun' AND form = 5) AS TekL,                                       
(Select count(*) from studentreport where gender='P' AND class = 'tekun' AND form = 5 ) AS TekP,                                    
 (Select count(*) from studentreport where gender='L' AND class = 'erat' AND form = 5) AS EraL,                                       
(Select count(*) from studentreport where gender='P' AND class = 'erat' AND form = 5 ) AS EraP,                                      
(Select count(*) from studentreport where gender='L' AND class = 'luhur' AND form = 5) AS LuhL,                                          
(Select count(*) from studentreport where gender='P' AND class = 'luhur' AND form = 5 ) AS LuhP,                                     
(Select count(*) from studentreport where gender='L' AND class = 'utama' AND form = 5) AS UtaL,                                       
(Select count(*) from studentreport where gender='P' AND class = 'utama' AND form = 5 ) AS UtaP,                                     
(Select count(*) from studentreport where gender='L' AND class = 'kreatif' AND form = 5) AS KreL,                                    
(Select count(*) from studentreport where gender='P' AND class = 'kreatif' AND form = 5 ) AS KreP,                                   
(Select count(*) from studentreport where gender='L' AND class = 'aman' AND form = 5) AS AmaL,                                       
(Select count(*) from studentreport where gender='P' AND class = 'aman' AND form = 5 ) AS AmaP,                                          
(Select count(*) from studentreport where gender='L' AND class = 'damai' AND form = 5) AS DamL,                                      
(Select count(*) from studentreport where gender='P' AND class = 'damai' AND form = 5 ) AS DamP,                                    
 (Select count(*) from studentreport where gender='L' AND class = 'usaha' AND form = 5) AS UsaL,                                     
  (Select count(*) from studentreport where gender='P' AND class = 'usaha' AND form = 5 ) AS UsaP,                                    
 (Select count(*) from studentreport where gender='L' AND class = 'gigih' AND form = 5) AS GigL,                                      
(Select count(*) from studentreport where gender='P' AND class = 'gigih' AND form = 5 ) AS GigP,                                   
(Select count(*) from studentreport where gender='L' AND class = 'kasih' AND form = 5) AS KasL,                                    
(Select count(*) from studentreport where gender='P' AND class = 'kasih' AND form = 5 ) AS KasP";  

 $result = mysqli_query($dbconn, $query);  
 ?>  
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart()  {  
                var data = google.visualization.arrayToDataTable([  
                          ['KELAS', 'LELAKI','PEREMPUAN'],  
                          <?php  
while($row = mysqli_fetch_array($result))  
                          {
		    echo "['KAA', ".$row["KaaL"]." ,".$row["KaaP"]."],";  
                                echo "['SETIA', ".$row["SetL"]." ,".$row["SetP"]."],";   
                                echo "['MAJU', ".$row["MajL"]." ,".$row["MajP"]."],";  
                                echo "['TEKUN', ".$row["TekL"]." ,".$row["TekP"]."],";  
                                echo "['ERAT', ".$row["EraL"]." ,".$row["EraP"]."],";  
                                echo "['LUHUR', ".$row["LuhL"]." ,".$row["LuhP"]."],";  
                                echo "['UTAMA', ".$row["UtaL"]." ,".$row["UtaP"]."],";  
                                echo "['KREATIF', ".$row["KreL"]." ,".$row["KreP"]."],";  
                                echo "['AMAN', ".$row["AmaL"]." ,".$row["AmaP"]."],";  
                                echo "['DAMAI', ".$row["DamL"]." ,".$row["DamP"]."],";  
                                echo "['USAHA', ".$row["UsaL"]." ,".$row["UsaP"]."],";  
                                echo "['GIGIH', ".$row["GigL"]." ,".$row["GigP"]."],";  
                                echo "['KASIH', ".$row["KasL"]." ,".$row["KasP"]."],"; 
}
                          ?>  
                     ]); 
        var options = {
          chart: {
            title: 'LAPORAN KENDERAAN PELAJAR BAGI TAHUN 2019',
            subtitle: 'JANTINA KESELURUHAN BAGI KELAS TINGKATAN 5 ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
<br>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Tingkatan</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="cal4.php">3</a>
    <a href="cal3.php">4</a>
    <a href="cal2.php">5</a>
  </div>
</div>
     <button class ="button" type="submit" id="print" onclick="printdiv('print_borang2');">Cetak <i class="glyphicon glyphicon-print"></i></button>
    <button class ="button1" type="submit" onclick="location.href = 'dashboard.php'">Kembali <i class="glyphicon glyphicon-remove"></i></button> 
    <br><br><br>
    <div id="print_borang2">



<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    <div id="columnchart_material" style="width: 1300px; height: 600px;"></div>
  </body>
</html>