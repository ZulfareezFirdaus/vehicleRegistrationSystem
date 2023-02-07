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
  background-color:#17A589  ;
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
  background-color:#8E44AD  ;
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
  background-color: #f1f1f1  ;
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
 $query =  "Select (Select count(*) from studentreport where gender='L' AND class = 'kaa' AND form = 3) AS KL,                               
  (Select count(*) from studentreport where gender='P' AND class = 'kaa' AND form = 3 ) AS KP,                                      
 (Select count(*) from studentreport where gender='L' AND class = 'setia' AND form = 3) AS SL,                                       
(Select count(*) from studentreport where gender='P' AND class = 'setia' AND form = 3 ) AS SP,                                   
  (Select count(*) from studentreport where gender='L' AND class = 'maju' AND form = 3) AS ML,                                 
      (Select count(*) from studentreport where gender='P' AND class = 'maju' AND form = 3 ) AS MP,                                 
     (Select count(*) from studentreport where gender='L' AND class = 'tekun' AND form = 3) AS TL,                                    
   (Select count(*) from studentreport where gender='P' AND class = 'tekun' AND form = 3 ) AS TP,                                   
  (Select count(*) from studentreport where gender='L' AND class = 'erat' AND form = 3) AS EL,                                    
   (Select count(*) from studentreport where gender='P' AND class = 'erat' AND form = 3 ) AS EP,                                 
     (Select count(*) from studentreport where gender='L' AND class = 'luhur' AND form = 3) AS LL,                                
          (Select count(*) from studentreport where gender='P' AND class = 'luhur' AND form = 3 ) AS LP,                      
               (Select count(*) from studentreport where gender='L' AND class = 'utama' AND form = 3) AS UL,                      
                 (Select count(*) from studentreport where gender='P' AND class = 'utama' AND form = 3 ) AS UP,                           
          (Select count(*) from studentreport where gender='L' AND class = 'kreatif' AND form = 3) AS KL1,                                  
  (Select count(*) from studentreport where gender='P' AND class = 'kreatif' AND form = 3 ) AS KP1,                                 
  (Select count(*) from studentreport where gender='L' AND class = 'aman' AND form = 3 ) AS AL,                                    
   (Select count(*) from studentreport where gender='P' AND class = 'aman' AND form = 3 ) AS AP,                                   
       (Select count(*) from studentreport where gender='L' AND class = 'damai' AND form = 3 ) AS DL,                               
       (Select count(*) from studentreport where gender='P' AND class = 'damai' AND form = 3 ) AS DP,                              
       (Select count(*) from studentreport where gender='L' AND class = 'usaha' AND form = 3) AS UL,                               
        (Select count(*) from studentreport where gender='P' AND class = 'usaha' AND form = 3 ) AS UP,                   
                  (Select count(*) from studentreport where gender='L' AND class = 'gigih' AND form = 3 ) AS GL,           
                           (Select count(*) from studentreport where gender='P' AND class = 'gigih' AND form = 3 ) AS GP,       
                             (Select count(*) from studentreport where gender='L' AND class = 'kasih' AND form = 3 ) AS KL2,               
                     (Select count(*) from studentreport where gender='P' AND class = 'kasih' AND form = 3 ) AS KP2";  

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
		    echo "['KAA', ".$row["KL"]." ,".$row["KP"]."],";  
                                echo "['SETIA', ".$row["SL"]." ,".$row["SP"]."],";   
                                echo "['MAJU', ".$row["ML"]." ,".$row["MP"]."],";  
                                echo "['TEKUN', ".$row["TL"]." ,".$row["TP"]."],";  
                                echo "['ERAT', ".$row["EL"]." ,".$row["EP"]."],";  
                                echo "['LUHUR', ".$row["LL"]." ,".$row["LP"]."],";  
                                echo "['UTAMA', ".$row["UL"]." ,".$row["UP"]."],";  
                                echo "['KREATIF', ".$row["KL1"]." ,".$row["KP1"]."],";  
                                echo "['AMAN', ".$row["AL"]." ,".$row["AP"]."],";  
                                echo "['DAMAI', ".$row["DL"]." ,".$row["DP"]."],";  
                                echo "['USAHA', ".$row["UL"]." ,".$row["UP"]."],";  
                                echo "['GIGIH', ".$row["GL"]." ,".$row["GP"]."],";  
                                echo "['KASIH', ".$row["KL2"]." ,".$row["KP2"]."],"; 
}
                          ?>  
                     ]); 
        var options = {
          chart: {
            title: 'LAPORAN KENDERAAN PELAJAR BAGI TAHUN 2019',
            subtitle: 'JANTINA KESELURUHAN BAGI KELAS TINGKATAN 3',
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