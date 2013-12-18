<?php    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

    $query = "INSERT INTO passwords (username, password)
              VALUES ('".$username."', '".$password."')";
    mysqli_query($link, $query);
    
    header("Location:Default.php"); 
    
?>
