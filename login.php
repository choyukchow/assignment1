<?php
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

    $query = "SELECT * FROM passwords WHERE 
              username = '".$username."' and password = '".$password."'";
    $result = mysqli_query($link, $query);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {
       session_start();
       $_SESSION['valid_user']=$username;

       header("Location:default.php"); 
    } else {
    	echo "Your username or your password is incorrect.<br>";
    	echo "<a href = 'login.html'> Go back to the login page. </a>";
    }
?>
