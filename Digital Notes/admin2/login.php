<?php
 date_default_timezone_set('Asia/Calcutta');
 $date = date('Y-m-d H:i:s');
 
session_start();

include('includes/header.php'); 
$_SESSION['key']="";
$connection = mysqli_connect("localhost","root","","notes");
$message = " ";
$stay="";
if(isset($_POST['login_btn']))
{    
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
	$sql = "SELECT * FROM `register` WHERE `email` ='$email_login'";
	
	
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_assoc($result);
 
    
    
    do
	{ 
			  $stay=$row['password'];
			  $name=$row['username'];
			  $ch = $row['status'];
			  $cat=$row['cat'];
			  $email=$row['email'];
			  $_SESSION['username']=$name;
			  $_SESSION['cat']=$cat;
			  $_SESSION['email']=$email;


			   if($ch=="a")
			   {
				if($password_login==$stay)
				{   $_SESSION['key']="mainkeyisthe";
					header("location: index.php");
				}
				else
				{
					$message="invalid password or userid";
				}

			   }
			   else
			   {
				if($password_login==$stay)
				{ $_SESSION['key']="mainkeyisthe";
					$user= $_SESSION['email'];
					$lastlog=@date('Y-m-d H:i:s');
         		   $query="update register set lastlog='$lastlog' where email='$user'";
           			 $queryrun=mysqli_query($connection, $query);
				   header("location: ../admin/index.php");
				  // header("location: index.php");
				}
				else
				{
					$message="invalid password or userid";
				}

			   }

			   
	        

	

	}while($row = mysqli_fetch_assoc($result));

}


?>





<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg2.png">
		</div>
		<div class="login-content">
			<form action="login.php" method="POST" class="user">
				<img src="img/avatar.png">
				<h2 class="title">Admin Login</h2><br>
				<?php
				echo $message;
				
				?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email Id</h5>
           		   		<input type="text" class="input"  name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password"  required>
            	   </div>
            	</div><br>
                
					<a href="forgot-password.php" >Forgot Password?</a><br>
					
				<button type="submit" name="login_btn"  value = "login_btn" id= "login_btn" class="btn" >Login</button>
            	
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?php

include('includes/scripts.php');
    
?>