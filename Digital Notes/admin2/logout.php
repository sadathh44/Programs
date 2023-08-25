<?php
if(isset($_POST['logout_btn']))
{
    session_start();
    session_destroy();
    unset($_SESSION[$_SESSION['username']);
}

?>