<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';          
    session_start();
    unset($_SESSION['valid_user']);

    header('Location:'.ROOT_DIR.'/index.php'); 
?>
