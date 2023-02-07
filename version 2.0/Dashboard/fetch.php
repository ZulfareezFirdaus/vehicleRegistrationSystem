<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
<?php

session_start();
include('../../dbconn.php');

$output = '';

if(isset($_SESSION['student_nokp_checking'])){
    $query = "SELECT * FROM student WHERE student_nokp = '".$_SESSION['student_nokp_checking']."' ";
    $result = mysqli_query($dbconn, $query);
}
else{
    $query = "SELECT * FROM student WHERE student_nokp = '0' ";
    $result = mysqli_query($dbconn, $query);
}

$output = '
<br />
<div class="card mb-4">
<div class="card-header d-flex justify-content-between align-items-center">
  <h5 class="mb-0">Maklumat Kenderaan Pelajar</h5>
</div>
<div class="card-body" id="crud_table">
<table id="example" class="table table-striped" style="width:100%">
 <thead>
    <tr>
        <th>No. KP</th>
        <th>Nama</th>
        <th>Ting</th>
        <th>Kelas</th>
        <th>No. Tel. Waris</th>
        <th>Lihat Lagi</th>
    </tr>
 </thead>
 <tbody>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
    <tr>
        <td>'.$row["student_nokp"].'</td>
        <td>'.$row["student_name"].'</td>
        <td>'.$row["student_form"].'</td>
        <td>'.$row["student_class"].'</td>
        <td>'.$row["student_noPhoneWaris"].'</td>
        <td><button id="'.$row["student_nokp"].'" type="button" name="view" data-bs-toggle="modal" data-bs-target="#basicModal" class="btn btn-success view_data" ><i class="bx bx-link-external"></i></button></td>
    </tr>
 ';
}
$output .= '</tbody></table></div></div>';
echo $output;
?>

<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Maklumat Pelajar & Kenderaan</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body" id="student_details"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var student_nokp = $(this).attr("id");  
           $.ajax({  
                url:"displayDataPelajarModal.php",  
                method:"post",  
                data:{student_nokp:student_nokp},  
                success:function(data){  
                     $('#student_details').html(data);  
                     $('#basicModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>