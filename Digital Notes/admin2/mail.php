<?php
$connection = mysqli_connect("localhost","root","","notes");
if(isset($_POST['mail']))
{    
    $email_login = $_POST['email'];
   
	$sql = "SELECT * FROM `register` WHERE `email` ='$email_login'";
	
	
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_assoc($result);
 
    
    
    do
	{ 
			  $stay=$row['password'];
           
			

			   
	        

	

	}while($row = mysqli_fetch_assoc($result));

    $to_email=$email_login;
               
    $subject="About your  forgot password";
    $body=" Dear Teacher your password is :$stay";
    $headers = "From: Uni.yuvarajasmysuru@gmail.com";
    if (mail($to_email, $subject, $body, $headers))
{
	
	?><script> swal("password send","it is been send to your email id","success") ;  </script><?php
	header("Loaction: forget-password.php");
    ?>asdfghjklqwertyuio<?php
	
}
else{
    ?><script> swal("password cannot send","","error") ;  </script><?php
}
}
?>