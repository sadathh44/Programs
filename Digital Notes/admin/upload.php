<?php
 // define database related variables
   $db_name = 'notes';
   $host = 'localhost';
   $user = 'root';
   $password = '';


    $db = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
  
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
         
    

$error="";
         if (isset($_POST['upload'])==1) {
              $subcode=$_POST['scode'];
              $sub=$_POST['sub'];
              $branch=$_POST['branch'];
              $sem=$_POST['sem'];
              $uploadedby=$_SESSION['email'];
              

               $cover=$_FILES['cover'];

              $coverName = $_FILES['cover']['name'];
              $coverTmpName = $_FILES['cover']['tmp_name'];
              $coverSize = $_FILES['cover']['size'];
              $coverError = $_FILES['cover']['error'];
              $coverType = $_FILES['cover']['type'];
              $coverExt=pathinfo($coverName, PATHINFO_EXTENSION);
              $all = array( 'png', 'jpg', 'jpeg');
               if (in_array($coverExt, $all)) {
                if ($coverError === 0) {
                  if ($coverSize < 104857601) {

                    $q = "SELECT * FROM notes WHERE cover='$coverName'";

                    if (mysqli_num_rows(mysqli_query($db, $q)) == 0) {

                      $coverDestination = 'C:\\xampp\\htdocs\\notes\\notes\\images\\bookcover\\'.$coverName;
                      move_uploaded_file($coverTmpName, $coverDestination);
                    }
                  }
                }
              }      




              $file = $_FILES['notes'];

              $fileName = $_FILES['notes']['name'];
              $fileTmpName = $_FILES['notes']['tmp_name'];
              $fileSize = $_FILES['notes']['size'];
              $fileError = $_FILES['notes']['error'];
              $fileType = $_FILES['notes']['type'];

              $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
              $allowed = array('pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg');

              if (in_array($fileExt, $allowed)) {
                if ($fileError === 0) {
                  if ($fileSize < 104857601) {

                    $q = "SELECT * FROM notes WHERE notes='$fileName'";

                    if (mysqli_num_rows(mysqli_query($db, $q)) == 0) {

                      $fileDestination = 'C:\\xampp\\htdocs\\notes\\notes\\pdf\\'.$fileName;
                      move_uploaded_file($fileTmpName, $fileDestination);
                    
                      $created = @date('Y-m-d H:i:s');
                      //$description = mysqli_real_escape_string($db, $_POST['description']);
                      $sql = "INSERT INTO notes (subcode,  sub, branch,  sem, notes, cover, uploadedby, date, status ) VALUES ('$subcode','$sub','$branch','$sem','$fileName','$coverName', '$uploadedby', '$date', 'pending')";
                            mysqli_query($db, $sql);
                    
                      echo '<script>alert("File uploaded successfully")</script>';
                    
                    }
                    else{
                     echo '<script>alert("File already exixts. Check it out OR Change your filename and try again...")</script>';
                    }
                  }
                  else{
                    echo '<script>alert("File too large")</script>';
                  }
                }
                else{
                  echo '<script>alert("Error Uploading File. ")</script>';
                }
              }
              else{
                echo '<script>alert("Invalid file type.")</script>';
              }
        }
      }

?>




<!DOCTYPE html>
<html>
    <head>
        <title>upload</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  
  background: #007bff;
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  margin-top: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background:  #007BFF;
   color:#fff;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: #002fff;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}


form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}



        </style>
    </head>
    <body>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="container">
    <p ><span style="color:#007bff ;">Note:</span> For Non Acadamic Books Give Book ID As Subject Code and 0 for semester.</p>
    <br><div class="title" >Upload</div>
    <div class="content">
      <form method="POST" enctype="multipart/form-data">
        <div class="user-details">
           <div class="input-box">
            <span class="details">Branch Name *</span>
            <select name="branch"  class="sel" style="height: 70%;width: 100%; border-radius: 5px;border: none;background:  #007BFF;font-size: 18px;color:#fff;" required>
                <option value="<?php echo $_SESSION['cat']?>" ><?php echo $_SESSION['cat']?></option>
                
                <option value="other">Other</option>
            </select>
           </div>
           <div class="input-box">
            <span class="details">Semester *</span>
            <select name="sem"  class="sel" style="height: 70%;width: 100%; border-radius: 5px;border: none;background:  #007BFF;font-size: 18px;color:#fff;" required >
                <option value="1" >&nbspEnter Semester</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Subject Name * </span>
            <input type="text" name="sub" placeholder="Enter subject name" required>
          </div>
          <div class="input-box">
            <span class="details">Subjectcode *</span>
            <input type="text" name="scode" placeholder="Enter subject code" required>
          </div>
         
          <div class="input-box">
           <label for="file" class="details"> Choose Notes: * </label>
             <i data-toggle="tooltip" data-placement="top" title="Supported File Format: pdf, txt, doc, docx, png, jpg, jpeg" aria-hidden="true"></i>
           <input type="file" class="button"  id="notes" name="notes" required>
          </div>

          <div class="input-box">
           <label for="file" class="details"> Add Cover: </label>
             <i data-toggle="tooltip" data-placement="top" title="Supported File Format: png, jpg, jpeg" aria-hidden="true"></i>
           <input type="file" class="button"  id="cover" name="cover" >
          </div>
      

        </div>  
        <div class="button ">
          <input type="submit" name="upload" value="Upload">
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>


    </body>
</html>
