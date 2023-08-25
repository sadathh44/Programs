<?php 

include('includes/header.php'); 
include('includes/navbar.php'); 

?>
<link href="style45.css"></link>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile </h6>
  </div>

  <div class="card-body">

  <?php

  $connection = mysqli_connect("localhost","root","","notes");

    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];
    
        $query = "SELECT * FROM register WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach( $query_run as $row)
        {
            ?>
     
     <form action="code.php" method="POST">

     <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >

         <div class="form-group">
                <label> Username </label>
                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username" maxlenght="15" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" placeholder="Enter Email" required>
            </div>


            <div class="form=group">
            <div class="input-box">
            <span class="details">Branch Name *</span>
            <select name="branch"  class="sel form-control" style="height: 70%;width: 100%; border-radius: 5px;border: 1px soild #D3D3D3;background: #fff;font-size: 18px;" required>
                <option value="null"><?php echo $row['cat'] ?></option>
                <option value="BCA">BCA</option>
                <option value="BSC">BSC</option>
                <option value="BBA">BBA</option>
                <option value="other">Other</option>
            </select>
           </div>
        </div>





            <div class="form-group">
           
                <label>Password</label>
                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" minlength="8" maxlength="12" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div><br>
            <a href="register.php" class="btn btn-danger"> Cancel </a>
            <button type="submit" name="updatebtn" class= "btn btn-primary"> Update </button>

    </form>

            <?php
        }
    
        
    }
    
  ?>

           
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