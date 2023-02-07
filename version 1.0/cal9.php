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
  background-color: #4CAF50;
  color: white;
  padding: 12px 25px;
  font-size: 16px;
  border: none;
  cursor: pointer;
 border-radius: 12px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
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
 $query =  "Select (Select count(*) from studentreport where class = 'kaa' AND form = 3) AS Kaa_3,                            
(Select count(*) from studentreport where class = 'kaa' AND form = 4 ) AS Kaa_4,
(Select count(*) from studentreport where class = 'kaa' AND form = 5 ) AS Kaa_5,
(Select count(*) from studentreport where class = 'setia' AND form = 3) AS Set_3,                                       
(Select count(*) from studentreport where class = 'setia' AND form = 4) AS Set_4,
(Select count(*) from studentreport where class = 'setia' AND form = 5) AS Set_5,
(Select count(*) from studentreport where class = 'maju' AND form = 3) AS Maj_3,                                       
(Select count(*) from studentreport where class = 'maju' AND form = 4 ) AS Maj_4, 
(Select count(*) from studentreport where class = 'maju' AND form = 5 ) AS Maj_5,
(Select count(*) from studentreport where class = 'tekun' AND form = 3) AS Tek_3,                                       
(Select count(*) from studentreport where class = 'tekun' AND form = 4 ) AS Tek_4,
(Select count(*) from studentreport where class = 'tekun' AND form = 5 ) AS Tek_5,
(Select count(*) from studentreport where class = 'erat' AND form = 3) AS Era_3,                                       
(Select count(*) from studentreport where class = 'erat' AND form = 4 ) AS Era_4,  
(Select count(*) from studentreport where class = 'erat' AND form = 5 ) AS Era_5,                                      
(Select count(*) from studentreport where class = 'luhur' AND form = 3) AS Luh_3,                                         
(Select count(*) from studentreport where class = 'luhur' AND form = 4 ) AS Luh_4,
(Select count(*) from studentreport where class = 'luhur' AND form = 5 ) AS Luh_5,
(Select count(*) from studentreport where class = 'utama' AND form = 3) AS Uta_3,                                       
(Select count(*) from studentreport where class = 'utama' AND form = 4 ) AS Uta_4, 
(Select count(*) from studentreport where class = 'utama' AND form = 5 ) AS Uta_5,  
(Select count(*) from studentreport where class = 'kreatif' AND form = 3) AS Kre_3, 
(Select count(*) from studentreport where class = 'kreatif' AND form = 4) AS Kre_4,
(Select count(*) from studentreport where class = 'kreatif' AND form = 5 ) AS Kre_5,                                   
(Select count(*) from studentreport where class = 'aman' AND form = 3) AS Ama_3,                                       
(Select count(*) from studentreport where class = 'aman' AND form = 4 ) AS Ama_4,    
(Select count(*) from studentreport where class = 'aman' AND form = 5 ) AS Ama_5,
(Select count(*) from studentreport where class = 'damai' AND form = 3) AS Dam_3,
(Select count(*) from studentreport where class = 'damai' AND form = 4) AS Dam_4,
(Select count(*) from studentreport where class = 'damai' AND form = 5 ) AS Dam_5,                                    
(Select count(*) from studentreport where class = 'usaha' AND form = 3) AS Usa_3,                                     
(Select count(*) from studentreport where class = 'usaha' AND form = 4 ) AS Usa_4,  
(Select count(*) from studentreport where class = 'usaha' AND form = 5 ) AS Usa_5, 
(Select count(*) from studentreport where class = 'gigih' AND form = 3) AS Gig_3,                                      
(Select count(*) from studentreport where class = 'gigih' AND form = 4 ) AS Gig_4,
(Select count(*) from studentreport where class = 'gigih' AND form = 5 ) AS Gig_5,
(Select count(*) from studentreport where class = 'kasih' AND form = 3) AS Kas_3,                                    
(Select count(*) from studentreport where class = 'kasih' AND form = 4 ) AS Kas_4,
(Select count(*) from studentreport where class = 'kasih' AND form = 5 ) AS Kas_5";  

 $result = mysqli_query($dbconn, $query);  
 ?>  
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart()  {  
                var data = google.visualization.arrayToDataTable([  
                          ['KELAS', 'TINGKATAN 3','TINGKATAN 4','TINGKATAN 5'],  
                          <?php  
while($row = mysqli_fetch_array($result))  
                          {
		    echo "['KAA', ".$row["Kaa_3"]." ,".$row["Kaa_4"].",".$row["Kaa_5"]."],";  
                                echo "['SETIA', ".$row["Set_3"]." ,".$row["Set_4"].",".$row["Set_5"]."],";   
                                echo "['MAJU', ".$row["Maj_3"]." ,".$row["Maj_4"].",".$row["Maj_5"]."],";  
                                echo "['TEKUN', ".$row["Tek_3"]." ,".$row["Tek_4"].",".$row["Tek_5"]."],";  
                                echo "['ERAT', ".$row["Era_3"]." ,".$row["Era_4"].",".$row["Era_5"]."],";  
                                echo "['LUHUR', ".$row["Luh_3"]." ,".$row["Luh_4"].",".$row["Luh_5"]."],";  
                                echo "['UTAMA', ".$row["Uta_3"]." ,".$row["Uta_4"].",".$row["Uta_5"]."],";  
                                echo "['KREATIF', ".$row["Kre_3"]." ,".$row["Kre_4"].",".$row["Kre_5"]."],";  
                                echo "['AMAN', ".$row["Ama_3"]." ,".$row["Ama_4"].",".$row["Ama_5"]."],";  
                                echo "['DAMAI', ".$row["Dam_3"]." ,".$row["Dam_4"].",".$row["Dam_5"]."],";  
                                echo "['USAHA', ".$row["Usa_3"]." ,".$row["Usa_4"].",".$row["Usa_5"]."],";  
                                echo "['GIGIH', ".$row["Gig_3"]." ,".$row["Gig_4"].",".$row["Gig_5"]."],";  
                                echo "['KASIH', ".$row["Kas_3"]." ,".$row["Kas_4"].",".$row["Kas_5"]."],"; 
}
                          ?>  
                     ]); 
        var options = {
          chart: {
            title: 'LAPORAN KENDERAAN PELAJAR BAGI TAHUN 2019',
            subtitle: 'TINGKATAN KESELURUHAN BERDASARKAN KELAS  ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>

<br>
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
    <div id="columnchart_material" style="width: 1500px; height: 600px;"></div>
  </body>
</html>