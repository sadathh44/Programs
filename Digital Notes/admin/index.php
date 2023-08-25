<?php
session_start();
$_SESSION["b"]=0;
if($_SESSION["key"] != "mainkeyisthe")
{
    header('location: ../admin2/login.php');
}
else
{
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital notes</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <!---google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">



</head>
<body>


<!-- header section starts  -->

<header>

<a  class="logo"><b> Teacher Page</b></a>
<div style=" float: right;">

<div style=" float: right;">
<a href="../admin2/login.php"><button class="button">Logout</button></a></div>


</header>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>Hello, <?php echo $_SESSION['username'];?></h1><br>
    <p><q>A good teacher can inspire hope, ignite the imagination, and install the love of learning </q></p>
  
</div>

<div class="box-container">
      <a href="upload.php" >
    <div class="box">
       <i class="fas fa-upload"></i>
        <h3>Upload</h3>
        <p>Upload your Files/ Notes to the website</p>
    </div></a>
    
    <a href="../notes/view.php">
    <div class="box">
        <i class="fas fa-eye"></i>
        <h3>View</h3>
        <p>View the existing files on the website </p>
    </div></a>

    <a href="manage.php">
    <div class="box">
    <i class="fas fa-cogs"></i>
        <h3>Manage</h3>
        <p>Manage existing/ Previously uploaded files </p>
    </div></a>

</div>

</section>

<!-- home section ends -->

<!-- about section starts  -->



















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>

    
</body>
</html>