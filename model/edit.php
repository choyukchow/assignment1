<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment/config/global.php';
    $blog_id = $_POST['blog_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $query = "UPDATE blog
              SET title='".$title."', content = '".$content."'
              WHERE Blog_ID = '".$blog_id."'";
    mysqli_query($link, $query);

    header("Location:".VIEW_DIR.".'/default.php'");
?>
