<?php $_SESSION['status']="";
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Student Profile </h6>
  </div>

  <div class="card-body">

  <?php

  $connection = mysqli_connect("localhost","root","","notes");

    if(isset($_POST['edit_btn1']))
    {   
        $id = $_POST['edit_id'];
    
        $query = "SELECT * FROM student WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach( $query_run as $row)
        {
            ?>
     
     <form action="code1.php" method="POST">

     <input type="hidden" name="edit_id" value="<?php echo $id ?>" >

         <div class="form-group">
                <label> Username </label>
                <input type="text" name="edit_username" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Username"  title="must contain alphabets only"  maxlength="15" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" required>
            </div>
            <br>
            <a href="student.php" class="btn btn-danger"> Cancel </a>
            <button type="submit" name="updatebtn45" class= "btn btn-primary"> Update </button>

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