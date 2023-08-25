<?php
 // define database related variables
   $db_name = 'notes';
   $host = 'localhost';
   $user = 'root';
   $password = '';


    $db = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
  
   
    session_start();
    $_SESSION["b"]=0;
    if($_SESSION["key"] != "mainkeyisthe")
    {
        header('location: ../admin2/login.php');
    }
    else
    {
        
    }


?>




<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin2/css/adminlte.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../admin2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
}
.container{
 
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}

 
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}

        </style>

        <title>Manage Notes</title>

    
        
    </head>
    <body>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="container">
    

  


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card  mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Manage Notes
            <a type="button" class="btn btn-primary" href="upload.php" >
              Upload Notes 
            </a>
    </h6>
  </div>

  <div class="card-body">
  <?php
  if(isset($_SESSION['success']) && $_SESSION['success'] !='')
  {
    echo '<h2 class="p-3 mb-2 bg-success text-white"> '. $_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
  }
  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
  {
    echo '<h2 class="p-3 mb-2 bg-danger text-white"> '. $_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
  }
  if(isset($_SESSION['error']) && $_SESSION['error'] !='')
  {
    echo '<h2 class="p-3 mb-2 bg-dark text-white"> '. $_SESSION['error'].'</h2>';
    unset($_SESSION['error']);
  }
  if(isset($_SESSION['warning']) && $_SESSION['warning'] !='')
  {
    echo '<h2 class="p-3 mb-2 bg-warning text-dark"> '. $_SESSION['warning'].'</h2>';
    unset($_SESSION['warning']);
  }
  ?>

    <div class="table-responsive">
    <?php
      $connection = mysqli_connect("localhost","root","","notes");
      $branch=$_SESSION['cat'];
      $users=$_SESSION['email'];
      $query = "select * from notes where branch='$branch' and uploadedby='$users'";
      //and uploadedby='$_SESSION['email'];'
      
                
      $query_run = mysqli_query($connection, $query);
    ?>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
          <tr>
          <th> Id </th>
            <th> Subject </th>
            <th>Subcode </th>
            <th>Branch </th>
            <th>Sem</th>
            <th>Status</th>
            <th>Edit </th>
            <th>View</th>
            <th>Delete </th>

            
          </tr>
        </thead>
        <?php
        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['sub']; ?></td>
            <td><?php echo $row['subcode']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['sem']; ?></td>
            <td><?php echo $row['status']; ?></td>

            
            <td><a href="edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>
            <td><a class="btn btn-primary" href="view_file.php?notes=<?php echo $row['notes']; ?>" >View
                    </a></td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
            }
        }
        else{
          echo "No Record Found";
        }

        ?>



                  </tbody>
                  <tfoot>
                 
                  </tfoot>
                </table>

    </div>
  </div>
</div>
</div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Page specific script -->






  </div>
  <script src="../admin2/js/sb-admin-2.min.js"></script>
  <script src="../admin2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../admin2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../admin2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../admin2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../admin2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../admin2/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../admin2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../admin2/plugins/jszip/jszip.min.js"></script>
<script src="../admin2/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../admin2/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../admin2/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../admin2/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../admin2/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


</body>
</html>


    </body>
</html>
