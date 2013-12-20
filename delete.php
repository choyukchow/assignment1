<?php
    $blog_id = $_POST['blog_id'];
    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

    $query = "DELETE FROM blog WHERE Blog_ID = '".$blog_id."'";
    mysqli_query($link, $query);

    header("Location:Default.php");     
?>