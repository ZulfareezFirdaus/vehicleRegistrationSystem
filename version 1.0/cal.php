<!DOCTYPE html>
<html>
  <head>
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
 $query = "Select (Select count(*) from studentreport where gender='L') AS Male, (Select count(*) from studentreport where gender='P' ) as Female";  

 $result = mysqli_query($dbconn, $query);  
 ?>  
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart()  {  
                var data = google.visualization.arrayToDataTable([  
                          ['JANTINA', ' JUMLAH'],  
                          <?php  
while($row = mysqli_fetch_array($result))  
                          {
		   echo "['LELAKI',".$row["Male"]."],"; 
                                 echo "['PEREMPUAN',".$row["Female"]."],";   

}
                          ?>  
                     ]); 
        var options = {
          chart: {
            title: 'LAPORAN KENDERAAN PELAJAR BAGI TAHUN 2019',
            subtitle: 'JANTINA KESELURUHAN PELAJAR',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Tingkatan</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">3</a>
    <a href="#about">4</a>
    <a href="#contact">5</a>
  </div>
</div>
    <button class ="button" type="submit" id="print" onclick="printdiv('print_borang2');">Print </button>
    <button class ="button1" type="submit" onclick="location.href = 'dashboard.php'">Kembali</button> 
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
    <div id="columnchart_material" style="width: 700px; height: 700px;"></div>
  </body>
</html>