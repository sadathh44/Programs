<?php
$conn3 = mysqli_connect("localhost","root","","notes");
$ad = 1;
if(isset($_POST['sumbit']))
  {
	date_default_timezone_set('Asia/Calcutta');
	$date = date('Y-m-d H:i:s');
    $old = htmlspecialchars( $_POST['name']);
    
    $new = htmlspecialchars($_POST['email']);
	$sub =  htmlspecialchars($_POST['sub']);
    $cp =htmlspecialchars( $_POST['message']);
	$sql="INSERT INTO `enquiries`(`name`, `email`, `subject`, `message`, `time`) VALUES ('$old','$new','$sub','$cp', '$date')";
	
	mysqli_query($conn3,$sql);
	
	$ad=5;
}



?>




<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<!--link-stylesheet----------->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--using-fontAwesome------------>
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<!--contact-form-container------------------->
	<section id="contact">
	<!--socail----------->
	<div class="social">
	<!--icons--------->
	<a href="https://www.facebook.com/YuvarajasCollegeMysore/" target="_blank"><i class="fab fa-facebook-f"></i></a>
	<a href="https://twitter.com/yuvarajas9?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
	<a href="https://www.instagram.com/explore/locations/531084506924631/yuvarajas-college-mysore?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
	<a href="mailto:principal@ycm.uni-mysore.ac.in"><i class="fas fa-envelope"></i></a>
	<a href="tel:0821-2419292"><i class="fas fa-phone-alt"></i></a>
		
	</div>
	<!--contact-box------------->
	<div class="contact-box">
	<!--heading---------->
	<div class="c-heading">
	<h1>Get In Touch</h1>
	<p>Call Or Email Us Regarding Question Or Issues</p>
	</div>
	<!--inputs------------------>
	<div class="c-inputs">
	<form action="contact.php" method="POST">
	<input type="text" name= "name" placeholder="Full Name"/>	
	<input type="email" name = "email" placeholder="Example@gmail.com"/>
	<input type="text" name= "sub" placeholder="Subject"/>
	<textarea name="message"  placeholder="Write Message"></textarea>

	<!--sumbit-btn----------->
	<button name="sumbit" type="sumbit" value="sumbit">SEND</button>
	</form>
	</div>
		
	</div>
	<!--map------------------->
	<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.143744156095!2d76.63894491429865!3d12.306105132461552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf7aa75f8aa925%3A0x4d38b02e009a85b3!2sYUVARAJA&#39;S%20COLLEGE%20MYSURU%20%2C%20UNIVERSITY%20OF%20MYSURU!5e0!3m2!1sen!2sin!4v1627072806280!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	</section>

<script>


if(<?php echo $ad?>==5)
{
	
	swal(
  'Thank You for contacting us',
  'Your query will be replied within 24 hours',
  'success'
);
}

</script>
	<?php
	if ($ad==5){
	
	$ad=1;
	}
	?>

</body>

</html>
