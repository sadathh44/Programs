<html>
</body>



<form action="test.php" method ="post">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>
<?php
 $subject = "YUVARAJA COLLEGE MYSURU WELCOME YOU ";
 $body ="djbaskjdbaskjbdkajsbdkjasbdk                refgdfgdfg gdf gdgdf gd gd gdgdfgd gdf gd fgd fgjabskjdbaskjdbasjbdaksjbdasjkbd";
 $headers = "From: Uni.yuvarajasmysuru@gmail.com";
 $to_email="yathish971@gmail.com";
 if (mail($to_email, $subject, $body, $headers))
{
	
	
	$error="success";
	$info="Your UserId and Password is send to your EmailId";
    echo $error;

	
	
	
}


else{
			$error="error";
			$info ="Mail cannot not be send please try forgot password your userid is your emailid";
            echo  $error;

}

if(isset($_POST['submit']))
{    
    $email_login = $_POST['fname'];
   
	$sql = "SELECT * FROM `register` WHERE `email` ='$email_login'";
	
	
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_assoc($result);
 
    
    
    do
	{ 
			  $stay=$row['password'];
           
			 if(isset($_POST['mail']))
{    
    $email_login = $_POST['email'];
   
	$sql = "SELECT * FROM `register` WHERE `email` ='$email_login'";
	
	echo $sql;
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
	
	
}
else{
    ?><script> swal("password cannot send","","error") ;  </script><?php
}
}

			   
	        

	

	}while($row = mysqli_fetch_assoc($result));

    $to_email=$email_login;
               
    $subject="About your  forgot password";
    $body=" Dear Teacher your password is :$stay";
    $headers = "From: Uni.yuvarajasmysuru@gmail.com";
    if (mail($to_email, $subject, $body, $headers))
{
	
	?><script> swal("password send","it is been send to your email id","success") ;  </script><?php
	
	
}
else{
    ?><script> swal("password cannot send","","error") ;  </script><?php
}
}



?>
</body>

</html>