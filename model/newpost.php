<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
    session_start();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $query = "INSERT INTO blog (username, date, title, content)
              VALUES ('".$_SESSION['valid_user']."', now(), '".$title."', '".$content."')";
    mysqli_query($link, $query);

    header("Location:".VIEW_DIR."/default.php");
?>
