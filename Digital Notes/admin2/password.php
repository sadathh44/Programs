




<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/forgot-password.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Reset Password</title>
    </head>
    <body>
        <div class="d-flex align-items-center light-blue-gradient" style="height: 100vh;">
            <div class="container" >
                <div class="d-flex justify-content-center">
                    <div class="col-md-7">
                        <div class="card rounded-0 shadow">
                            <div class="card-body">
                                <h2>Reset Password</h2><br>
                                <form action="password.php" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">We get it, stuff happens. <br>Just enter your email address below and we'll send you your password! </label><br>
                                        <input  name = "email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" required>
                                       
                                    </div>
                                    <button type="submit"  name =" mail"class="btn btn-primary">Send Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    $headers="From: Uni.yuvarajasmysuru@gmail.com";
    if (mail($to_email, $subject, $body, $headers))
{
	
	?><script> swal("password send","it is been send to your email id","success") ;  </script><?php
	
	
}
else{
    ?><script> swal("password cannot send","","error") ;  </script><?php
}
}

?>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            </div>
    </body>
</html>
