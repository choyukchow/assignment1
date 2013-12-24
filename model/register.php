<?php    
    include $_SERVER['DOCUMENT_ROOT'].'/assignment/config/global.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $query = "INSERT INTO passwords (username, password)
              VALUES ('".$username."', '".$password."')";
    mysqli_query($link, $query);
    
    header("Location:".VIEW_DIR.".'/default.php'");
    
?>
