
<?php
date_default_timezone_set('Asia/Calcutta');
$date = date('Y-m-d H:i:s');
session_start();
//$connection = mysqli_connect("localhost","root","","notes");
include('dbconfig.php');





if(isset($_POST['approve_btn']))
{
    $id = $_POST['approve_id'];
    $status = 'approved';
    $time = @date('Y-m-d H:i:s');
   

    $query = "UPDATE notes SET status='$status', actions='$time' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Notes Approved Succesfully";
        header('location: noteslog.php');
    
    }
    else
    {
        $_SESSION['status'] = "Action Unsuccesful";
        header('location: noteslog.php');
    }
}



if(isset($_POST['block_btn']))
{
    $id = $_POST['block_id'];
    $status = 'blocked';
    $time = @date('Y-m-d H:i:s');
   

    $query = "UPDATE notes SET status='$status', actions='$time' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['warning'] = "Notes Blocked Succesfully";
        header('location: noteslog.php');
    
    }
    else
    {
        $_SESSION['status'] = "Action Unsuccesful";
        header('location: noteslog.php');
    }
}


if(isset($_POST['unblock_btn']))
{
    $id = $_POST['unblock_id'];
    $status = 'approved';
    $time = @date('Y-m-d H:i:s');
   

    $query = "UPDATE notes SET status='$status', actions='$time' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Notes Unblocked Succesfully";
        header('location: noteslog.php');
    
    
    }
    else
    {
        $_SESSION['status'] = "Action Unsuccesful";
        header('location: noteslog.php');
    }
}






?>