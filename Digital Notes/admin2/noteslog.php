<?php 

include('includes/header.php'); 
include('includes/navbar.php'); 

?>




<div class="container-fluid">

<!-- DataTales Example -->
<div class="card  mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Notes Log 
           
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
      date_default_timezone_set('Asia/Calcutta');
      $date = date('Y.m.d');
      $time = date('h:i:sa');
     
      $query =" SELECT `id`, `sub`, `subcode`, `branch`, `sem`, `uploadedby`, `date` FROM `notes` ";
      $query_run = mysqli_query($connection, $query);
    ?>

<table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th> Subject </th>
            <th> Subject Code </th>
            <th>Branch </th>
            <th>Semester</th>
            <th>Uploaded By</th>
            <th>Uploaded on</th>
            <th>Last Updated</th>
            <th>Last Action</th>
            <th>View</th>
            <th>Action</th>
          
            
            
          
            
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
         
            <? 
               $id=$row['id'];
               
                 $sql1="select * from notes where id='$id'";
                 $row=mysqli_fetch_assoc(mysqli_query($connection,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);        
             ?>

              <?php
                $id=$row['id'];
                $q = "select * from notes where id='$id'";        
                $r = mysqli_query($connection, $q);
                $i = 1;
                if($row = mysqli_fetch_assoc($r)) { 
                   
                    ?>
                     <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['sub']; ?></td>
            <td><?php echo $row['subcode']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['sem']; ?></td>
            <td><?php echo $row['uploadedby']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['updated']; ?></td>
            <td><?php echo $row['actions']; ?></td>
                    <td><a class="btn btn-success" href="view_file.php?notes=<?php echo $row['notes']; ?>" >View
                    </a></td>

                    <?php
            if($row['status']=='pending')
            {
              ?>
              <td>
              <form action="code4.php" method="post">
                <input type="hidden" name="approve_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="approve_btn" class="btn btn-primary"> Approve</button>
              </form>
             </td>
             <?php
            }
            else if($row['status']=='approved')
            {
              ?>
              <td>
              <form action="code4.php" method="post">
                <input type="hidden" name="block_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="block_btn" class="btn btn-danger"> Block</button>
              </form>
             </td>
              <?php
            }
            else{
              ?>
              <td>
              <form action="code4.php" method="post">
                <input type="hidden" name="unblock_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="unblock_btn" class="btn btn-warning"> Unblock</button>
              </form>
             </td>
              <?php
            }
            ?>
             
           


            <?php } ?>
            
          
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