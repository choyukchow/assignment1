<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
    $blog_id = $_GET['blog_id'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $query = "DELETE FROM blog WHERE Blog_ID = '".$blog_id."'";
    mysqli_query($link, $query);

    header("Location:".VIEW_DIR."/default.php");
?>
