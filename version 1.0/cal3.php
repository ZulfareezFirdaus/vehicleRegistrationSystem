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
  background-color: #8E44AD ;
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
 $query =  "Select (Select count(*) from studentreport where gender='L' AND class = 'kaa' AND form = 4) AS KaL,                             
    (Select count(*) from studentreport where gender='P' AND class = 'kaa' AND form = 4 ) AS KaP,                                    
   (Select count(*) from studentreport where gender='L' AND class = 'setia' AND form = 4) AS SeL,                                      
 (Select count(*) from studentreport where gender='P' AND class = 'setia' AND form = 4 ) AS SeP,                                   
  (Select count(*) from studentreport where gender='L' AND class = 'maju' AND form = 4) AS MaL,                                   
    (Select count(*) from studentreport where gender='P' AND class = 'maju' AND form = 4 ) AS MaP,                                   
   (Select count(*) from studentreport where gender='L' AND class = 'tekun' AND form = 4) AS TeL,                                      
 (Select count(*) from studentreport where gender='P' AND class = 'tekun' AND form = 4 ) AS TeP,                                  
   (Select count(*) from studentreport where gender='L' AND class = 'erat' AND form = 4) AS ErL,                                   
    (Select count(*) from studentreport where gender='P' AND class = 'erat' AND form = 4 ) AS ErP,                                  
    (Select count(*) from studentreport where gender='L' AND class = 'luhur' AND form = 4) AS LuL,                                       
   (Select count(*) from studentreport where gender='P' AND class = 'luhur' AND form = 4 ) AS LuP,                                 
    (Select count(*) from studentreport where gender='L' AND class = 'utama' AND form = 4) AS UtL,                                     
  (Select count(*) from studentreport where gender='P' AND class = 'utama' AND form = 4 ) AS UtP,                                  
   (Select count(*) from studentreport where gender='L' AND class = 'kreatif' AND form = 4) AS KrL,                                 
   (Select count(*) from studentreport where gender='P' AND class = 'kreatif' AND form = 4 ) AS KrP,                               
    (Select count(*) from studentreport where gender='L' AND class = 'aman' AND form = 4) AS AmL,                                    
   (Select count(*) from studentreport where gender='P' AND class = 'aman' AND form = 4 ) AS AmP,                                       
   (Select count(*) from studentreport where gender='L' AND class = 'damai' AND form = 4) AS DaL,                                   
   (Select count(*) from studentreport where gender='P' AND class = 'damai' AND form = 4 ) AS DaP,                                
     (Select count(*) from studentreport where gender='L' AND class = 'usaha' AND form = 4) AS UsL,                                   
    (Select count(*) from studentreport where gender='P' AND class = 'usaha' AND form = 4 ) AS UsP,                              
       (Select count(*) from studentreport where gender='L' AND class = 'gigih' AND form = 4) AS GiL,                              
        (Select count(*) from studentreport where gender='P' AND class = 'gigih' AND form = 4 ) AS GiP,                           
        (Select count(*) from studentreport where gender='L' AND class = 'kasih' AND form = 4) AS KaL1,                              
      (Select count(*) from studentreport where gender='P' AND class = 'kasih' AND form = 4 ) AS KaP1";  

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
		    echo "['KAA', ".$row["KaL"]." ,".$row["KaP"]."],";  
                                echo "['SETIA', ".$row["SeL"]." ,".$row["SeP"]."],";   
                                echo "['MAJU', ".$row["MaL"]." ,".$row["MaP"]."],";  
                                echo "['TEKUN', ".$row["TeL"]." ,".$row["TeP"]."],";  
                                echo "['ERAT', ".$row["ErL"]." ,".$row["ErP"]."],";  
                                echo "['LUHUR', ".$row["LuL"]." ,".$row["LuP"]."],";  
                                echo "['UTAMA', ".$row["UtL"]." ,".$row["UtP"]."],";  
                                echo "['KREATIF', ".$row["KrL"]." ,".$row["KrP"]."],";  
                                echo "['AMAN', ".$row["AmL"]." ,".$row["AmP"]."],";  
                                echo "['DAMAI', ".$row["DaL"]." ,".$row["DaP"]."],";  
                                echo "['USAHA', ".$row["UsL"]." ,".$row["UsP"]."],";  
                                echo "['GIGIH', ".$row["GiL"]." ,".$row["GiP"]."],";  
                                echo "['KASIH', ".$row["KaL1"]." ,".$row["KaP1"]."],"; 
}
                          ?>  
                     ]); 
        var options = {
          chart: {
            title: 'LAPORAN KENDERAAN PELAJAR BAGI TAHUN 2019',
            subtitle: 'JANTINA KESELURUHAN BAGI KELAS TINGKATAN 4',
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