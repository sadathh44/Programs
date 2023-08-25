<?php
session_start();
$connection = mysqli_connect("localhost","root","","notes");




if(isset($_POST['delete_btn']))
{
    require_once "connection.php";
   
    $id=$_REQUEST['delete_id'];

    $select_stmt= $db->prepare('SELECT * FROM notes WHERE id =:id');	//sql select query
    $select_stmt->bindParam(':id',$id);
    $select_stmt->execute();
    $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
    unlink("C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$row['notes']);
unlink("C:\\xampp\\htdocs\\notes\\notes\\images\\bookcover\\".$row['cover']);  //unlink function permanently remove your file
    
    //delete an orignal record from db
    $delete_stmt = $db->prepare('DELETE FROM notes WHERE id =:id');
    $delete_stmt->bindParam(':id',$id);
    $delete_stmt->execute();
  


    if($delete_stmt)
    {
        $_SESSION['success'] = "Notes Deleted Successfully";
        header('location: manage.php');
    }
    else
    {
        $_SESSION['status'] = "Data Deletion Failed";
        header('location: register.php');
    }
}





?> 