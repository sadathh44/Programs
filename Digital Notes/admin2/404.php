<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
if($_SESSION["key"]!="mainkeyisthe")
{
    
}
else
{
    
}

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Page Not Found</p>
                        <p class="text-gray-500 mb-0">It looks like the page doesnt exist...</p>
                        <a href="index.php">&larr; Back to Dashboard</a>
                    </div>

                </div>
                <!-- /.container-fluid -->
                

 </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</div>

<?php

include('includes/scripts.php');
include('includes/footer.php');
    
?>


