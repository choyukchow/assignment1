<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

    $query = "SELECT * FROM user WHERE 
              username = '".$username."' and password = '".$password."'";
    $result = mysqli_query($link, $query);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {
       session_start();
       session_register("valid_user");
       $_SESSION['valid_user']=$username;

       header("Location:Default.php"); 
    } else {
    	echo "Your username or your password is incorrect.";
    	echo "<a href = 'login.html'> Go back to the login page. </a>";
    }
?>