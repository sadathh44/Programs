<?php
session_start();
$email= $_SESSION['email'];
$connection = mysqli_connect("localhost","root","","notes");
$sql = "SELECT * FROM `student` WHERE `email` ='$email'";
	
	if( $_SESSION['key']!="maintest")
  {
    header("location: login.php");
  }
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);

  
  
  do
{ 
      $stay=$row['name'];
         
    


}while($row = mysqli_fetch_assoc($result));


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Notes Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Modal CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KnightOne - v4.3.0
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a><span style="color: #007BFF;">Yuvaraja's </span>Mysore</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar order-last order-lg-0" >
            <ul>
              <li><a class="nav-link active" href="home.php">About</a></li>
              <li><a class="nav-link " href="notes/index.php">Notes</a></li>
              <li><a class="nav-link " href="learn/index.php">Learn</a></li>
              <li><a class="nav-link " href="#faq">FAQ's</a></li>
              <li><a class="nav-link " href="#college">College</a></li>
              <li><a class="nav-link " href="contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

          <a href="login.php"  class="get-started-btn scrollto"  >Logout</a>
         
         
        </div>
      </div>

    </div>
  </header><!-- End Header -->

 
   <section id="hero2" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <center><img width="15%" src="assets/img/ycm logo1.png"></center><br>
          <h1><span style="color:#fff;text-transform:capitalize;">Hi, <?php echo $stay;?></span> <br>Good to see you today</h1>
          <h2>You can now access notes from our page</h2>
          <a href="notes/index.php" class="get-started-btn scrollto">Get Started</a>
        </div>
      </div>
    </div>
  </section>
 
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
   <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="section-title">
            <h2> <BR>We Are Working On</h2>
          </div>
           <div class="container" data-aos="fade-up">
           <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="assets/img/pro.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Vision</h3>
              <p >
                To equip the students with all the resourses they might need.The Digital notes management system provides easy access of notes to the students making their life so much easier. The additional courses give knowledge, skill and aptitude to meet the requirements of the companies.
              </p>
              <h3>What we do for you</h3>
              <ul>
                <li><i class="bi bi-check-circle"></i>Access notes anywhere 24x7.</li>
                <li><i class="bi bi-check-circle"></i>Gives you right notes for your academics so that you don’t study wrong notes resulting in reduced exam scores.</li>
                <li><i class="bi bi-check-circle"></i>To counsel the students to improve their career exposure.</li>
                <li><i class="bi bi-check-circle"></i>Enhance your skills by accessing online courses to kick start a bright career..</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->
   <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container">
  
          <div class="row counters">
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Department</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
              <p>Lecturers</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p>Notes</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="2000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Active User</p>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Counts Section -->
      <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Courses</h2>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <center><img src="assets/img/BSC.PNG" class="img-fluid" alt="..."></center>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>BSC</h4>
                </div>

                <h3>Bachelors of Science</h3>
                <p>Yuvaraja’s college is well known for its courses in Bachelors of Sciences. Many of famous scientists & Business tycoons have graduated from this branch.</p><br>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <center><img src="assets/img/BCA.PNG" class="img-fluid" alt="..."></center>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>BCA</h4>
                 
                </div>

                <h3>Bachelors of Computer Application</h3>
                <p>The Department of Computer Science has been equipped with the state-of-art technology to train students to face the upcoming Cyber era. </p>
               
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <center><img src="assets/img/BBA.PNG" class="img-fluid" alt="..."></center>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>BBA</h4>
                </div>

                <h3>Bachelors of Arts</h3>
                <p> The course would give ample opportunities for employment in the innumerable ever expanding Business Environment at the national or global level.</p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->
      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="content">
                <h3>Why Digital notes?</h3>
                <p>
                    This website acts as a bridge between teachers & students. One can access his favorite subject’s notes, download it anytime he wants. This not only saves money for printing, but also helps reduce pollution caused due to papers
                </p>
                <div class="text-center">
                  <a href="notes/index.php" class="more-btn">Learn More<i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-receipt"></i>
                      <h4>Accesseblity</h4>
                      <p>The platform gives you access to notes 24x7.  Thousands of pages worth books in your tiny pocket with just a click.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Extra Courses</h4>
                      <p>The courses have been especially designed as per the present trend. A student can learn through these courses absolutely free. This with get you better job opportunities.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-images"></i>
                      <h4>Novels</h4>
                      <p>Feeling bored? Access our library of Novels/ Educational books to fill your life with excitement.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/1.png" class="testimonial-img" alt="">
                  <h3>	Dr. B.N Yashodha</h3>
                  <h4>The Principal</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    In an age when people are relentlessly using cell phones, this website has become a bridge to connect teachers & students together. Students can now access notes in their hour of need without searching it here and there
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/2.png" class="testimonial-img" alt="">
                  <h3>DR. HC Devaraje Gowda </h3>
                  <h4>Administrative officer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>As the administrative officer of the college, it is my pleasure to inform all the beloved students of Yuvaraja’s college that their wait is over. They need not wait outside Xerox shops in Ramswamy to get their notes, they need not ask teachers every semester to send notes, they need not wait to prepare for their exams.


                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/3.png" class="testimonial-img" alt="">
                  <h3>3.	Dr. K.B Umesha</h3>
                  <h4>Controller of Examination</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>I think that the students were in need of a platform where they can get everything at the time they want. I have send students struggling to get quality notes, but with this platform, they can score better marks. Hope to see better grades in upcoming years.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/4.png" class="testimonial-img" alt="">
                  <h3>Ms. H. Annapoorna</h3>
                  <h4>HOD</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Finally, I could see a few advancements in our college, especially in the field of technology. Most of us had been relying upon physical notes which not only costed much, but they would not have been of any use once the sem was done. Hope that our students make use of this system
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/5.png" class="testimonial-img" alt="">
                  <h3>Mr. Chandriah T</h3>
                  <h4>Assistant professor, Dept of C.S</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    This was the most needed platform in our college. We had to forward notes to the students every now and then. Sometimes the notes were lost or misplaced because of which we had to compose the notes again. This platform is a big relief for us.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/6png.png" class="testimonial-img" alt="">
                  <h3>Hemachandra K</h3>
                  <h4>Assistant professor, Dept of B.B.A</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I have been in this college from the past 6 years, other colleges advanced in terms of technology but our college didn’t. I was waiting for this day when our college would go digital in terms of every process. Finally, I could see the change. Hope that the students make use of this piece of wonder.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
 
    <!-- ======= Faq Section ======= -->

 

    <br><br><section id="faq" class="faq">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Got some doubts about this page? no worries you can look for questions which most of the users ask. If you cannot find your answer in this.. then you can contact us via the contact page and we will answer your questions.</p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Who can access e-notes?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                     This service is exclusively made available for Yuvaraja college students. No other students can login to this page. If you are here, then consider yourself special. Because you are a Yuvaraja. </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Can i print these notes? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Absolutely yes! The notes can be downloaded in PDF's, so that you can take a print out later and use them. Afterall nobody wants to get their eyes weaker. </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">What do i do if i have to change my email? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                     Thats easy. You can contact the college webmaster and submit your letter of request with a photocopy of your college ID. Your mail will be changed within 2-3 working days.  </p>
                  </div>
                </li>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">I forgot my password. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
               You can click the forgot password link in the login page. An email with passsword will be sent to you!.</p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End Faq Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="college" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Views of our college and its departments. Wondering why we are including this section?..... <b><i>Its a Mystery</i></b></p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">College</li>
              <li data-filter=".filter-card">Departments</li>
              <li data-filter=".filter-web">Others</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Front View</h4>
              
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
             
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>New Building</h4>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Function hall</h4>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
             
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dept of Electronics</h4>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dept of Microbiology</h4>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dept of Chemistry</h4>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Home Science Building</h4>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
             </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Corridoor</h4>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Parking</h4>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <!--contact-->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Locate Us</h2>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.143744156095!2d76.63894491429865!3d12.306105132461552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf7aa75f8aa925%3A0x4d38b02e009a85b3!2sYUVARAJA&#39;S%20COLLEGE%20MYSURU%20%2C%20UNIVERSITY%20OF%20MYSURU!5e0!3m2!1sen!2sin!4v1627072806280!5m2!1sen!2sin" width="600" height="450"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="Location">
                <i class="ri-map-pin-line"></i>
                <h4>Location:</h4>
                <p>Jhansi Rani Lakshmi Bai Rd, K.G Koppal, Mysore Karnataka</p>
             
              </div>

              
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    

   
   
 
  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      
     
      <div class="footer-wrap">
        <div class="container first_class">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <h3>YUVARAJAS DEGREE COLLEGE</h3>
                <h6 style="color:#007BFF">MYSORE</h6>
                <p>INDIA - 571577</p><br>
              </div>
              <div class="col-md-4 col-sm-6">
              <form class="newsletter">
                 <input type="text" placeholder="Email Address"> 
                 
              </form>
              
              </div>
              <div class="col-md-4 col-sm-6">
              <div class="col-md-12">
                <div class="standard_social_links">
              <div>
                <li class="round-btn btn-facebook"><a href=" https://www.facebook.com/YuvarajasCollege/"><i class="fab fa-facebook-f"></i></a>
      
                </li>
                <li class="round-btn btn-linkedin"><a href="https://in.linkedin.com/school/yuvarajas-college-mysuru/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
      
                </li>
                <li class="round-btn btn-twitter"><a href="https://twitter.com/yuvarajas9?lang=en"><i class="fab fa-twitter" aria-hidden="true"></i></a>
      
                </li>
                <li class="round-btn btn-instagram"><a href="https://www.instagram.com/yuvaraja_memes/?hl=en"><i class="fab fa-instagram" aria-hidden="true"></i></a>
      
                </li>
                <li class="round-btn btn-whatsapp"><a href="https://wa.me/qr/YAGF4EBPKIGFC1"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
      
                </li>
                <li class="round-btn btn-envelop"><a href="mailto:principal@ycm.uni-mysore.ac.in" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      
                </li>
              </div>
            </div>  
              </div>
                
            </div>
        </div>
          <div class="second_class">
            <div class="container second_class_bdr">
            <div class="row">
              <div class="col-md-4 col-sm-6">
      
                <div class="footer-logo">
                                 <center><img width="30%" src="assets/img/ycm logo1.png" alt="footer_logo" class="img-fluid"></center> 
                </div><br>
                <p style="text-align:justify">Yuvaraja’s College one of the four constituent Colleges of the University of Mysore is rich in history. It was first established as an Intermediate College on 24th June 1928.</p>
              </div>
              <div class="col-md-2 col-sm-6">
                <h3>Quick  LInks</h3>
                <ul class="footer-links">
                  <li><a href="http://ycm.uni-mysore.ac.in/" target="_blank">Home</a>
                  </li>
                  <li><a href="home.php">About us</a>
                  </li>
                  <li><a href="contact.php" >Contact Us</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="col-md-6">
                      <div class="contact-us contact-us-last">
                          
                          <!-- End contact Icon -->
                          <div class="contact-info">
                            <div class="contact-icon">
                              <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                          </div>
                              <h3>0821-2419292</h3>
                              <p>Give us a call</p><br>
                          <div class="contact-icon">
                              <i class="fa fa-map-o" aria-hidden="true"></i>
                          </div><br>
                              <h3>MYSORE </h3>
                              
                          </div>
                          <!-- End Contact Info -->
                      </div>
                      
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                 
                     
                       <div class="gmap_canvas">
                          <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.143821944005!2d76.63894491402667!3d12.306099891294947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf7aa75f8aa925%3A0x4d38b02e009a85b3!2sYUVARAJA&#39;S%20COLLEGE%20MYSURU%20%2C%20UNIVERSITY%20OF%20MYSURU!5e0!3m2!1sen!2sin!4v1627318853459!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                             
                        </div>
                <div class="clearfix"></div>
                              
                         
              </div>
            </div>
            
          </div>
          </div>
          
          <div class="row">
            
            <div class="container-fluid">
            <div class="copyright"> Copyright 2021 | All Rights Reserved by Yuvaraja College</div>
            </div>
            
          </div>
        </div>
  
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>

  <!--modal files-->
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>