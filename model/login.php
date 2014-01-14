<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';          
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $query = "SELECT * FROM passwords WHERE 
              username = '".$username."' and password = '".$password."'";
    $result = mysqli_query($link, $query);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {
       session_start();
       $_SESSION['valid_user']=$username;

       header("Location:".VIEW_DIR."/default.php"); 
    } else {

        header("Location:".VIEW_DIR."/loginError.php");
    }
?>
