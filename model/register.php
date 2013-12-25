<?php    
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $query = "SELECT * FROM passwords WHERE username = '".$username."'";
    if (mysqli_num_rows(mysqli_query($link, $query)) or empty($username) or empty($passwords)){
        echo 'This username is not avaliable, please choose a another name!<br>';
        echo "<a href = ".VIEW_DIR."/register.php> Back to register page </a>";
    } else {
        $query = "INSERT INTO passwords (username, password)
            VALUES ('".$username."', '".$password."')";
        if (mysqli_query($link, $query)){
            session_start();
            $_SESSION['valid_user'] = $username;
        }

        header("Location:".VIEW_DIR."/default.php");
    }

?>
