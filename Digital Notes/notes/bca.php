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
if( $_SESSION['key']!="maintest")
   {
     header("location: ../login.php");
   }
$error="";

?>  



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>
            BCA
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="app.css">
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
            <a href="index.php" class="logo">
            <span class="iconify" data-icon="eva:arrow-back-fill" data-inline="false"></span> 
                    &nbsp <span class="main-color">BCA</span>(Bachelors Of Computer Application)
                </a>
               
                <!-- MOBILE MENU TOGGLE -->
                
            </div>
        </div>
    </div>
    <!-- END NAV -->

    <!-- HERO SECTION -->
    
        <!-- TOP MOVIES SLIDE -->
        

   <!-- LATEST MOVIES SECTION -->
   <div class="section">
    <div class="container">
        <div class="section-header">
            SEMESTER 1
        </div>
            <? 
                 $branch='BCA';
                 $sql1="SELECT * from notes where branch='$branch' and sem='1'  and status='approved'";
                 $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);        
             ?>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
                $branch='BCA';
                $q = "SELECT * FROM notes WHERE branch='$branch' and sem='1'  and status='approved'";               
                $r = mysqli_query($db, $q);
                $i = 1;
                while($row = mysqli_fetch_assoc($r)) { 
                    $img='images\\bookcover\\'.$row['cover'];
                    ?>
                    <a href="view_file.php?notes=<?php echo $row['notes']; ?>" class="movie-item">
                    <img src="<?php echo $img; ?>" alt="Not Found" onerror=this.src="images/undefined.jpg">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            <?php echo $row['sub']; ?>
                        </div>
                        
                    </div>
                    </a>
            <?php } ?>
            
        </div>
      </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section-header">
                SEMESTER 2
            </div>
             <? 
                 $branch='BCA';
                 $sql1="SELECT * from notes where branch='$branch' and sem='2'  and status='approved'";
                 $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);        
             ?>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
                $branch='BCA';
                $q = "SELECT * FROM notes WHERE branch='$branch' and sem='2'  and status='approved'";               
                $r = mysqli_query($db, $q);
                $i = 1;
                while($row = mysqli_fetch_assoc($r)) { 
                    $img='images\\bookcover\\'.$row['cover'];
                    ?>
                    <a href="view_file.php?notes=<?php echo $row['notes']; ?>" class="movie-item">
                    <img src="<?php echo $img; ?>" alt="Not Found" onerror=this.src="images/undefined.jpg">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            <?php echo $row['sub']; ?>
                        </div>
                        
                    </div>
                    </a>
            <?php } ?>
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->
   <!-- LATEST MOVIES SECTION -->
   <div class="section">
    <div class="container">
        <div class="section-header">
            SEMESTER 3
        </div>
         <? 
                 $branch='BCA';
                 $sql1="SELECT * from notes where branch='$branch' and sem='3'  and status='approved'";
                 $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);        
             ?>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
                $branch='BCA';
                $q = "SELECT * FROM notes WHERE branch='$branch' and sem='3' and status='approved' ";               
                $r = mysqli_query($db, $q);
                $i = 1;
                while($row = mysqli_fetch_assoc($r)) { 
                    $img='images\\bookcover\\'.$row['cover'];
                    ?>
                    <a href="view_file.php?notes=<?php echo $row['notes']; ?>" class="movie-item">
                    <img src="<?php echo $img; ?>" alt="Not Found" onerror=this.src="images/undefined.jpg">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            <?php echo $row['sub']; ?>
                        </div>
                        
                    </div>
                    </a>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END LATEST MOVIES SECTION -->
    
   <!-- LATEST MOVIES SECTION -->
   <div class="section">
    <div class="container">
        <div class="section-header">
            SEMESTER 4
        </div>
        <? 
                 $branch='BCA';
                 $sql1="SELECT * from notes where branch='$branch' and sem='4'  and status='approved'";
                 $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);        
             ?>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
                $branch='BCA';
                $q = "SELECT * FROM notes WHERE branch='$branch' and sem='4'  and status='approved'";               
                $r = mysqli_query($db, $q);
                $i = 1;
                while($row = mysqli_fetch_assoc($r)) { 
                    $img='images\\bookcover\\'.$row['cover'];
                    ?>
                    <a href="view_file.php?notes=<?php echo $row['notes']; ?>" class="movie-item">
                    <img src="<?php echo $img; ?>" alt="Not Found" onerror=this.src="images/undefined.jpg">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            <?php echo $row['sub']; ?>
                        </div>
                        
                    </div>
                    </a>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END LATEST MOVIES SECTION -->
    
   <!-- LATEST MOVIES SECTION -->
   <div class="section">
    <div class="container">
        <div class="section-header">
            SEMESTER 5
        </div>
         <? 
                 $branch='BCA';
                 $sql1="SELECT * from notes where branch='$branch' and sem='5'  and status='approved'";
                 $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);        
             ?>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
                $branch='BCA';
                $q = "SELECT * FROM notes WHERE branch='$branch' and sem='5'  and status='approved'";               
                $r = mysqli_query($db, $q);
                $i = 1;
                while($row = mysqli_fetch_assoc($r)) { 
                    $img='images\\bookcover\\'.$row['cover'];
                    ?>
                    <a href="view_file.php?notes=<?php echo $row['notes']; ?>" class="movie-item">
                    <img src="<?php echo $img; ?>" alt="Not Found" onerror=this.src="images/undefined.jpg">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            <?php echo $row['sub']; ?>
                        </div>
                        
                    </div>
                    </a>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END LATEST MOVIES SECTION -->
    <!-- END LATEST CARTOONS SECTION -->
    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                SEMESTER 6
            </div>
             <? 
                 $branch='BCA';
                 $sql1="SELECT * from notes where branch='$branch' and sem='6'  and status='approved'";
                 $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);        
             ?>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
                $branch='BCA';
                $q = "SELECT * FROM notes WHERE branch='$branch' and sem='6'  and status='approved'";               
                $r = mysqli_query($db, $q);
                $i = 1;
                while($row = mysqli_fetch_assoc($r)) { 
                    $img='images\\bookcover\\'.$row['cover'];
                    ?>
                    <a href="view_file.php?notes=<?php echo $row['notes']; ?>" class="movie-item">
                    <img src="<?php echo $img; ?>" alt="Not Found" onerror=this.src="images/undefined.jpg">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            <?php echo $row['sub']; ?>
                        </div>
                        
                    </div>
                    </a>
            <?php } ?>
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->

   

    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="container">
            <div class="row">
                 <center>
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                            <i></i>Yuvaraja's <span class="main-color">College</span>
                        </a><br>
                        <p>
                            Yuvaraja’s College one of the four constituent Colleges of the University of Mysore is rich in history. It was first established as an Intermediate College on 24th June 1928 and in the year 1947-48, after Independence, the college .
                        </p>
                       
                    </div><br><br>
                </div>
                <div class=" col-md-6 col-sm-12">
                    <img width="20%" src="../assets/img/ycm logo1.png">
                    
                </div>
               </center>
            </div>
        </div>
        <!-- COPYRIGHT SECTION --><br>
    <div class="copyright">
        Copyright 2021 <a  target="_blank">
            Yuvaraja College Mysore</a>
    </div>
    <!-- END COPYRIGHT SECTION -->
    </footer>
    <!-- END FOOTER SECTION -->


    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>

</body>

</html>