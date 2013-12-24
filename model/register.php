<?php    
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $query = "SELECT * FROM passwords WHERE username = '".$username."'";
    if (mysqli_num_rows(mysqli_query($link, $query))){
        echo 'This username is not avaliable, please choose a another name!<br>';
    } else {
        $query = "INSERT INTO passwords (username, password)
            VALUES ('".$username."', '".$password."')";
        mysqli_query($link, $query);

        header("Location:".VIEW_DIR."/default.php");
    }

?>
