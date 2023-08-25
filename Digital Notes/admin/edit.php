<?php

require_once "connection.php";
date_default_timezone_set('Asia/Calcutta');
$date = date('Y-m-d H:i:s');
session_start();
$_SESSION["b"]=0;
if($_SESSION["key"] != "mainkeyisthe")
{
    header('location: ../admin2/login.php');
}
else
{
    


if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; //get "update_id" from index.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $db->prepare('SELECT * FROM notes WHERE id =:id'); //sql select query
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute(); 
		$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
	}
	catch(PDOException $e)
	{
		$e->getMessage();
	}
	
}

if(isset($_REQUEST['btn_update']))
{
	try
	{
		$sub=$row['sub'];
    $subcode=$row['subcode'];
    $notes=$row['notes'];
    $sem=$row['sem'];
    $branch=$row['branch'];
		$name	=$_REQUEST['txt_name'];	
    $name2=$_REQUEST['txt_name2'];
    $name3=$_REQUEST['txt_name3'];
    $name4=$_REQUEST['txt_name4'];	
	$name5='pending';	
	$updated = @date('Y-m-d H:i:s'); //textbox name "txt_name"
		
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];	//file name "txt_file"
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
			
		$path="C:\\xampp\\htdocs\\notes\\notes\\pdf\\".$image_file; //set upload folder path
		
		$directory="C:\\xampp\\htdocs\\notes\\notes\\pdf\\"; //set upload folder path for update time previous file remove and new file upload for next use
		
		if($image_file)
		{
			

				
				if(!file_exists($path)) //check file not exist in your upload folder path
				{
					if($size < 5478126988) //check file size 5MB
					{
						unlink($directory.$row['notes']); //unlink function remove previous file
						move_uploaded_file($temp, "C:\\xampp\\htdocs\\notes\\notes\\pdf\\" .$image_file);	//move upload file temperory directory to your upload folder	
					}
					else
					{
						$errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
					}
				}
				else
				{	
					$errorMsg="File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
				}
			
		}
		else
		{
			$image_file=$row['notes']; //if you not select new image than previous image sam it is it.
		}
	
		if(!isset($errorMsg))
		{
			$update_stmt=$db->prepare('UPDATE notes SET sub=:name_up, subcode=:name_up2, sem=:name_up3, branch=:name_up4, notes=:file_up, status=:name_up5, updated=:name_up6  WHERE id=:id'); //sql update query
			$update_stmt->bindParam(':name_up',$name);
			$update_stmt->bindParam(':name_up2',$name2);
			$update_stmt->bindParam(':name_up3',$name3);
			$update_stmt->bindParam(':name_up4',$name4);
			$update_stmt->bindParam(':name_up5',$name5);
			$update_stmt->bindParam(':name_up6',$updated);

			$update_stmt->bindParam(':file_up',$image_file);	//bind all parameter
			$update_stmt->bindParam(':id',$id);
			 
			if($update_stmt->execute())
			{
				$updateMsg="File Update Successfully.......";	//file update success message
				header("refresh:3;index.php");	//refresh 3 second and redirect to index.php page
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Update Files</title>
		

<link rel="stylesheet" href="css/style2.css">
<script src="admin2/js/jquery.min.js"></script>
<script src="admin2/plugins/bootstrap/js/bootstrap.min.js"></script>
		
</head>

	<body>
	
	

	
	<div class="container">
  <br><div class="title" >Update</div>
	
	<div class="content">
			
 
		
		<?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>WRONG ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($updateMsg)){
		?>
			
				 <?php echo $updateMsg; ?>
			
        <?php
		}
		?>   
		
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
					
			
      <div class="user-details">
      

        <div class="input-box">
            <span class="details">Semester *</span>
            <select name="txt_name3"  class="sel" style="height: 70%;width: 100%; border-radius: 5px;border: none;background:  #007BFF;font-size: 18px;color:#fff;" required>
                <option value="<?php echo $sem;?>">&nbsp<?php echo $sem;?></option>
                <option value="0">&nbsp0</option>
                <option value="1">&nbsp1</option>
                <option value="2">&nbsp2</option>
                <option value="3">&nbsp3</option>
                <option value="4">&nbsp4</option>
                <option value="5">&nbsp5</option>
                <option value="6">&nbsp6</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Branch Name *</span>
            <select name="txt_name4"  class="sel" style="height: 70%;width: 100%; border-radius: 5px;border: none;background:  #007BFF;font-size: 18px;color:#fff;" required>
                <option  value="<?php echo $branch;?>">&nbsp<?php echo $branch;?></option>
                <option value="other">Other</option>
            </select>
           </div>

        <div class="input-box">
            <span class="details">Subject Name * </span>
            <input type="text" name="txt_name" class="form-control" value="<?php echo $sub; ?>" required/>
        </div>

        <div class="input-box">
            <span class="details">Subject Code * </span>
            <input type="text" name="txt_name2" class="form-control" value="<?php echo $subcode;?>" required/>
        </div>

        
        
       
        

        
        <div class="input-box">
  
            <span class="details">File Name: <?php echo $notes;?></span>
            <i data-toggle="tooltip" data-placement="top" title="Supported File Format: pdf, txt, doc, docx, png, jpg, jpeg" aria-hidden="true"></i>
          <input type="file" name="txt_file" class="form-control"/>
        </div>
				
	
					
  </div>	
				<div class="button">
				
				<input type="submit"  name="btn_update"  value="Update">
				
				</div>
        <div class="button">
        <a href="index.php"><input type="button" style="background:#d83844;" value="Cancel"></a>
      </div>
					
			</form>
			
		</div>
  </div>
		
	</div>
			
	</div>
										
	</body>
</html>