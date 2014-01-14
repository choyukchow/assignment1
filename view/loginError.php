<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';          
?>

<html>
<head>
    <title> Login Error </title>
    <link rel="stylesheet" type="text/css" href=<?php echo STATIC_DIR."/defaultStyle.css";?> media="screen" />
</head>

<body>
    <div id = "header">
        <h2>
            Login Error! Please double check your username and password :)
        </h2>

        <a href = <?php echo VIEW_DIR."/login.php"; ?>> Go Back To Login Page </a>
    </div>
</body>
</html>
