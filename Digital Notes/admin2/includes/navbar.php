<?php
session_start();
include('dbconfig.php');
if($_SESSION["key"]!="mainkeyisthe")
{
    header('location: login.php');
}

?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
<i class="fas fa-lock"></i>
    <div class="sidebar-brand-text mx-3">Ycm Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Normal -->


<li class="nav-item">
    <a class="nav-link" href="register.php">
    <i class="fas fa-shield-alt"></i>
        <span>Faculty Management</span></a>
</li>





<li class="nav-item">
    <a class="nav-link" href="student.php">
    <i class="fas fa-user-graduate"></i>
        <span>Student Management</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="noteslog.php">
    <i class="fas fa-book"></i>
        <span>Notes Log</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Extras
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="../login.php">
    <i class="fas fa-chevron-circle-right"></i>
        <span>Student Login</span></a>
</li>



<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="enquiries.php">
    <i class="fas fa-paper-plane"></i>
        <span>Enquiries</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
    

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            
        

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="https://mail.google.com/mail/u/0/#inbox" target="_blank">
                    <i class="fas fa-envelope fa-fw"></i>
                    
                </a>
                
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                    <?php echo $_SESSION['username']; ?>
                    
                    </span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile_2.svg">
                </a>
               
               
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link btn btn-danger" href="login.php" >
                <i class="fas fa-power-off"></i>
                    
                </a>
                
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    


    

