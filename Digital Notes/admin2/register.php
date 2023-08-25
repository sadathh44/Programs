<?php 

include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<link href="style45.css"></link>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" maxlength="15" pattern="[A-Za-z]+" title="must contain alphabets only" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" required>
            </div>
            <div class="input-box">
            <span class="details">Branch Name *</span>
            <select name="branch"  class="sel form-control" style="height: 70%;width: 100%; border-radius: 5px;border: 1px soild #D3D3D3;background: #fff;font-size: 18px;" required>
                <option value="null">Enter Branch Name</option>
                <option value="BCA">BCA</option>
                <option value="BSC">BSC</option>
                <option value="BBA">BBA</option>
                <option value="other">Other</option>
            </select>
           </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  minlength="8" maxlength="12" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" maxlength="12" required>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Add</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card  mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Faculty Management  
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Faculty Profile 
            </button>
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
      $query = "SELECT * FROM register where status = 't'";
      $query_run = mysqli_query($connection, $query);
    ?>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
          <tr>
          <th> Id </th>
            <th> Username </th>
            <th>Email </th>
            <th>Branch </th>
            <th>Password</th>
            <th>Active from</th>
            <th>Last Active</th>
            <th>Edit </th>
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
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['cat']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['created']; ?></td>
            <td><?php echo $row['lastlog']; ?></td>

            
            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value=" <?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
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




<?php

include('includes/scripts.php');
include('includes/footer.php');
    
?>