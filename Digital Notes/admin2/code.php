<?php

date_default_timezone_set('Asia/Calcutta');
$date = date('Y-m-d H:i:s');
session_start();
//$connection = mysqli_connect("localhost","root","","notes");
include('dbconfig.php');



if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $cat=$_POST['branch'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $created = @date('Y-m-d H:i:s');

    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {   $t='t';
            $query = "INSERT INTO register (username,email,password,status,cat,created) VALUES ('$username','$email','$password','$t','$cat',' $created')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['warning'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}





if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $cat=$_POST['branch'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password', status = 't',cat='$cat' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data Updated Succesfully";
        header('location: register.php');
    
    }
    else
    {
        $_SESSION['status'] = "Update Unsuccesful";
        header('location: register.php');
    }
}


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data Deleted Successfully";
        header('location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Data Deletion Failed";
        header('location: register.php');
    }
}

//login form validation

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
     
    $query = "SELECT * FROM register WHERE email=' $email_login' AND password='$password_login'  ";
    $query_run = mysqli_query($connection, $query);
    $n = mysqli_fetch_array($query_run);
   
    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] =  $email_login;
        echo $_SESSION['username'];
        header('location : index.php');
       
    }
    else
    {
        $_SESSION['status'] = "Invalid Email Id/ Password";
        header('location: login.php');
    } 

}




?> 