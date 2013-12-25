<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
    session_start();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $trimmedTitle = trim($title);
    if (empty($trimmedTitle)){
        echo "Title cannot be empty!!!<br>";
        echo "<a href = ".MODEL_DIR."/newpost.php> Back to new post page </a>";
    } else {
        $query = "INSERT INTO blog (username, date, title, content)
            VALUES ('".$_SESSION['valid_user']."', now(), '".$title."', '".$content."')";
        mysqli_query($link, $query);

        header("Location:".VIEW_DIR."/default.php");
    }
?>
