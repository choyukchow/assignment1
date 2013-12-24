<?php
    session_start();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

    $query = "INSERT INTO blog (username, date, title, content)
              VALUES ('".$_SESSION['valid_user']."', now(), '".$title."', '".$content."')";
    mysqli_query($link, $query);

    header("Location:Default.php");     
?>