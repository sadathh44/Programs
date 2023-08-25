<?php
session_start();
if( $_SESSION['key']!="maintest")
{
  header("location: ../login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ======== Favicon ======= -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    
    <!-- ======== Boxicons ======= -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ======== Slider Js ======= -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
    />

    <!-- ======== StyleSheet ======= -->
    <link rel="stylesheet" href="css/styles.css" />
    <title>Yuvaraja E-learning</title>
  </head>
  <body>
    <!-- Preloader -->
    <div class="loader">
      <img src="./images/preloader.gif" alt="" />
    </div>
    <!-- header -->
    <header class="header" id="header">
      <!-- Navigation -->
      <div class="navigation">
        <nav class="nav d-flex">
          <div class="logo">
            <a href="#">
              <img src="./images/logo.png" />
            </a>
          </div>
          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="#header" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            
            <li class="nav-item">
              <a href="#trips" class="nav-link">Videos</a>
            </li>
           
          </ul>

          <a href="../home.php" class="btn sign-up">E-Notes</a>

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </nav>
      </div>

      <!-- Hero -->
      <div class="swiper-container slider-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/pic-1.jpg" alt="" />
          </div>

          <div class="swiper-slide">
            <img src="./images/pic-5.jpg" alt="hero image" />
          </div>
        
          <div class="swiper-slide">
            <img src="./images/pic-6.jpg" alt="hero image" />
          </div>

          

        
        </div>
      </div>

      <div class="content">
        <h1>
          Get Future Ready <br />
          By E-learning 
        </h1>
        <a href="#trips" class="btn">Get Started</a>
      </div>

      <!--div class="arrows d-flex">
        <div class="swiper-prev d-flex">
          <i class="bx bx-chevron-left swiper-icon"></i>
        </div>
        <div class="swiper-next d-flex">
          <i class="bx bx-chevron-right swiper-icon"></i>
        </div>
      </div-->
    </header>

    <main class="main">
      <!-- About Section -->
      <section class="section about" id="about">
        <div class="row container">
          <div class="col">
            <div class="title">
              <h1>About E-Learning</h1>
            </div>
            <p>
             The E-learning site has been established with a motto of providing students with videos which can be watched anywhere-anytime. Incase if you forget the older concepts in your previous class.. You can still watch those videos online any number of times. This will enhance your capabilites of learning and also save up time.
            You can also access e-notes from our portal at the same time. The blend of both e-notes and e-books makes you wanna learn in your own time even if you are in home.
            </p>
            
          </div>
          <div class="col">
            <div class="swiper-container slider-2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="./images/book.png" alt="book image" />
                </div>
               
                
              </div>
             
            </div>
          </div>
        </div>
      </section>
      
      <!-- discount Section -->
      <section class="section discount">
        <div class="overlay">
          <video class="video" loop>
            <source src="./images/video1.mp4" type="video/mp4" />
            
          </video>
        </div>
        <div class="content">
          <h1> A Modern Platform</h1>
            <h2>For A Future-Ready Academic Experience.</h2>
          <span class="video-control d-flex"><i class="bx bx-play"></i></span>
        </div>
      </section>

     
      
 <!-- Trip Section -->
 <section class="section contact" id="trips">
  <div class="title">
    <h1>
      Video Section
    </h1>
    <p>
      Watch from hundreds of lectures uploaded in our channel on the go.
    </p><br>
    <div class="video-control d-felx">
      <a href="https://www.youtube.com/channel/UCoNqLrrCwplX-TcByv9VEag/" class="btn" target="_blank">Watch All</a>
    </div>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-d3f81f33-30ff-4431-a70e-c24889ccc274"></div>
          

  </div>

  </section>
      
      

    </main>

    <!-- Footer -->
    <footer class="footer">
      <section class="section">
        <div class="title">
          <p id="footers">Copyright Yuvaraja College Mysuru | 2020-21 </p>
        </div>
      </section>
     
    </footer>

    <!-- ======== SwiperJS ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
    <!-- ======== SCROLL REVEAL ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <!-- ======== SliderJS ======= -->
    <script src="js/slider.js"></script>
    <!-- ======== IndexJS ======= -->
    <script src="js/index.js"></script>
  </body>
</html>
