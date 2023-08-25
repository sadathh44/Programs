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
           Delete Notes
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
                <a href="../admin/index.php" class="logo">
                    <span class="iconify" data-icon="eva:arrow-back-outline" data-inline="false"></span> 
                    <span style="font-weight:600;">View Notes</span>
                </a>
               
                
            </div>
        </div>
    </div>
    <!-- END NAV -->

    <!-- HERO SECTION -->
    <div class="hero-section">
       
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="../admin/images/2.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                        <div class="item-content-title top-down">
                        <span style="font-weight:600;">View Your</span> <span style="font-weight:400;"> <br>Uploaded<br> Notes</span>
                            </div>
                                       
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                <i class='bx bxs-quote-left' ></i>
                                    <span>View your subject code below to delete them later &nbsp</span>
                                    <i class='bx bxs-quote-right' ></i>
                                </div>
                                
                            </div>
                            <div class="item-content-description top-down delay-4">
                          
                          </div>
                           
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        

    <!-- LATEST MOVIES SECTION -->
 
    <!-- END LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
               Your Notes
            </div>
            <? 
                 $branch=$_SESSION['cat'];
                 $sql1="select * from notes where branch='$branch' and uploadedby='$_SESSION['email'];' and status='approved'";
                 $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);  
             ?>


            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <?php
                 $branch=$_SESSION['cat'];
                 $usernames=$_SESSION['email'];
                $q = "select * from notes where branch='$branch' and uploadedby='$usernames'  and status='approved'";             
                $r = mysqli_query($db, $q);
                $i = 1;
                while($row = mysqli_fetch_assoc($r)) { 
                    $img='images\\bookcover\\'.$row['cover'];
                    ?>
                    
                    <a href="view_file.php?notes=<?php echo $row['notes']; ?>" class="movie-item">
                    <img src="<?php echo $img; ?>" alt="Not Found" onerror=this.src="images/undefined.jpg">
                    <div class="movie-item-content">
                    <div class="movie-item-title">
                              &nbsp&nbsp<?php echo $row['sub']; ?>
                        </div><br>
                        <div>
                        &nbsp&nbsp<b>Subcode:</b> <?php echo $row['subcode']; ?>
                     
                     

                        </div>
                        
                    </div>
                    </a>
                                       
               


                <?php } ?>

                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section-header">
               Your Inspirations
            </div>
            <? 
                  $branch='other';
                 $sql1="select * from notes where branch='$branch' and uploadedby='$_SESSION['email'];'";
                 $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
                 unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);  
             ?>


            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <?php
                 $branch='other';
                 $usernames=$_SESSION['email'];
                $q = "select * from notes where branch='$branch' and uploadedby='$usernames'";             
                $r = mysqli_query($db, $q);
                $i = 1;
                while($row = mysqli_fetch_assoc($r)) { 
                    $img='images\\bookcover\\'.$row['cover'];
                    ?>
                    
                    <a href="view_file.php?notes=<?php echo $row['notes']; ?>" class="movie-item">
                    <img src="<?php echo $img; ?>" alt="Not Found" onerror=this.src="images/undefined.jpg">
                    <div class="movie-item-content">
                    <div class="movie-item-title">
                              &nbsp&nbsp<?php echo $row['sub']; ?>
                        </div><br>
                        <div>
                        &nbsp&nbsp<b>Subcode:</b> <?php echo $row['subcode']; ?>
                     
                     

                        </div>
                        
                    </div>
                    </a>
                                       
               


                <?php } ?>

                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>


    
    <!-- END LATEST CARTOONS SECTION -->

   

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