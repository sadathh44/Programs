<?php 

include('includes/header.php'); 
include('includes/navbar.php'); 

?>




<div class="container-fluid">

<!-- DataTales Example -->
<div class="card  mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Student Management  
           
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
      $query =" SELECT `id`, `reg`, `name`, `email`, `registered`, `lastlog` FROM `student` ";
      $query_run = mysqli_query($connection, $query);
    ?>

<table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th> Id </th>
            <th> Register Number </th>
            <th>Name </th>
            <th>Email</th>
            <th>Date Registered</th>
            <th>Last Active</th>
            <th>Edit </th>
            <th>Delete </th>
          </tr>
        </thead>
        <tbody>
     
        <?php
        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['reg']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['registered']; ?></td>
            <td><?php echo $row['lastlog']; ?></td>
            
            
           
          
            <td>
                <form action="student_edit.php" method="post">
                    <input type="hidden" name="edit_id" value=" <?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn1" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code1.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn45" class="btn btn-danger"> DELETE</button>
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
      </table>

    </div>
  </div>
</div>
</div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

 </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



<?php

include('includes/scripts.php');
include('includes/footer.php');
    
?>