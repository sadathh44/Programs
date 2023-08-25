
<?php
session_start();
//$connection = mysqli_connect("localhost","root","","notes");
include('dbconfig.php');





if(isset($_POST['updatebtn45']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
   

    $query = "UPDATE student SET name='$username', email='$email' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data Updated Succesfully";
        header('location: student.php');
    
    }
    else
    {
        $_SESSION['status'] = "Update Unsuccesful";
        header('location: student.php');
    }
}

if(isset($_POST['updatebtn456']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $username1= $_POST['edit_username1'];
    $headers="From: Uni.yuvarajasmysuru@gmail.com";
    if (mail($email, $username, $username1, $headers))
{
	
	
	header("location: enquiries.php");
   $_SESSION["mail1"]="send";

	
}
else{header("location: enquiries.php");
    $_SESSION["mail1"]="error";
    
}
}
    
   

   







if(isset($_POST['delete_btn45']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM student WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data Deleted Successfully";
        header('location: student.php');
    }
    else
    {
        $_SESSION['status'] = "Data Deletion Failed";
        header('location: student.php');
    }
}


if(isset($_POST['delete_btn456']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM enquiries WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data Deleted Successfully";
        header('location: enquiries.php');
    }
    else
    {
        $_SESSION['status'] = "Data Deletion Failed";
        header('location: enquiries.php');
    }
}




?>