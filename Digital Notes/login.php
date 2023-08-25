<?php
     date_default_timezone_set('Asia/Calcutta');
     $date = date('Y-m-d H:i:s');

    
    session_start();
    include('dbconfig.php');
    $message="";
    if(count($_POST)>0) {
        $connection = mysqli_connect('localhost','root','','notes') or die('Unable To connect');
      if(isset($_POST['action']) && $_POST['action'] == "signin"){

          $result = mysqli_query($connection,"SELECT * FROM student WHERE email='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
          $row  = mysqli_fetch_array($result);
         
          if(is_array($row)) {
            $_SESSION['email']=$_POST["user_name"];
            $_SESSION['key']="maintest";
            $user= $_SESSION['email'];
            $lastlog=@date('Y-m-d H:i:s');
            $query="update student set lastlog='$lastlog' where email='$user'";
            $queryrun=mysqli_query($connection, $query);
            
            header("Location:home.php");
           
          } 
          
          else {
           $message = "Invalid Username or Password!";
          }
        }
        elseif(isset($_POST['action']) && $_POST['action'] == "signup"){
         if(empty($_POST['reg']) || empty($_POST['name']) || empty($_POST['email']))
                {
                    echo ' Please Fill in the Blanks ';
                }
                else
                { 
                  $reg = $_POST['reg'];
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $created = @date('Y-m-d H:i:s');
                  $log=mt_rand(60000000,99999999);
	                 $to_email = $email;
	    
                  $subject = "YUVARAJA COLLEGE MYSURU WELCOMES YOU ";
                   $body = " 

		  Dear  $name,
			Your Have Been Successfully  Registered  To Yuvaraja College Mysuru Online notes Portal
			Use the provided userid and password to login 
			 
		
		  USERID = $email
		  PASSWORD=$log";

      
        $headers = "From: yuvarajacollegemysore@gmail.com";
                  $query = "insert into student (reg, name,password,email,registered) values('$reg','$name','$log','$email','$created')";
                  $result = mysqli_query($connection,$query);
                  if ($result) {
                    echo '<script>alert("Registered Successfully. Check your mail ID")</script>';
                    if (mail($to_email, $subject, $body, $headers))
                      {
	
	
	                            $error="success";
                            	$info="Your UserId and Password is send to your EmailId";
	
	
	
                      }


                     else{
			                  $error="error";
		                    $info ="Mail cannot not be send please try forgot password your userid is your emailid";
                         }
                  }
                  else{
                     echo '<script>alert("Reg. Number  or Email already Registered, Contact your College ")</script>';
                  }
          
                }
        }        
      }  
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- Font Awesome -->
  <link rel="stylesheet" href="admin2/plugins/fontawesome-free/css/all.min.css">
    
    <link rel="stylesheet" href="signup/style.css" />
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="post"  class="sign-in-form">
            <input type="hidden" name="action" value="signin">
	<img src="assets/img/ycm logo1.png" style="width:160px; height:200px;" />           
            <h2 class="title">Sign in</h2>
            <div class="message"><?php if($message!="") { echo $message; } ?></div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="user_name" placeholder="User Id" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$"   required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password"  required  />
            </div><br>
            <div class="content">
              <a href="admin2/forget-password1.php" style="text-decoration:none;">Forgot password?</a>
            </div><br>
            <input type="submit" value="Login" class="btn solid" />
            
          </form>

          <form  method="post" class="sign-up-form">
            <input type="hidden" name="action" value="signup">
	<img src="assets/img/ycm logo1.png" style="width:130px; height:160px;" />
            <h2 class="title">Sign up</h2>
            <div class="input-field">
            <i class="fas fa-lightbulb"></i>
             
              <input type="text" name="reg" placeholder="Reg. Number"  minlength="8" maxlength="8" required />
            </div>
            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Name"  required  />
            </div>
            <div class="input-field">
            <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$"  required />
            </div>
            
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
             Sign up to get instant access to all of our exclusive study materials provided by our topknotch Lecturers
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            <br>
            <br>
          </div>
          <img src="signup/img/1.png" class="image" alt=""/>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
             Don't ask permission, Get on board back to your deck to access all of our exclusive study materials on the go.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="signup/img/2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="signup/app.js"></script>
  </body>
</html>
