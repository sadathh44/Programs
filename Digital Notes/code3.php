<?php
              $connection = mysqli_connect("localhost","root","","notes");
              if(isset($_POST['contact']))
              {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $sub = $_POST['subject'];
                $message = $_POST['message'];

                $query = "insert into enquiries values('$name','$email','$sub','$message') ";
                $query_run = mysqli_query($connection, $query);

    
}


?>