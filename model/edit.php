<?php
    $blog_id = $_POST['blog_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

    $query = "UPDATE blog
              SET title='".$title."', content = '".$content."'
              WHERE Blog_ID = '".$blog_id."'";
    mysqli_query($link, $query);

    header("Location:Default.php");     
?>