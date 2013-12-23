<?php
    session_start();
    $comment = $_POST['comment'];
    $blog_id = $_POST['blog_id'];
    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

    $query = "INSERT INTO comment (Blog_ID, date, username, comment)
              VALUES (".$blog_id.", now(), '".$_SESSION['valid_user']."', '".$comment."')";
    mysqli_query($link, $query);

    header("Location:showpage.php");     
?>