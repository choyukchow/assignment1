<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
?>
<html>
<head>
	<title> Login page </title>
</head>

<body>
    <form action = <?php echo MODEL_DIR."/login.php";?> method = "post">
		    <p> Username: </p>
		    <p> <input type = "text" name = "username"> </p>
		    <p> Password: </p>
		    <p> <input type = "password" name = "password"> </p>
		    <p> <input type = "submit" value = "Login"> </p>
	    </form>

        <form action = <?php echo VIEW_DIR."/register.php";?> method = "post">
		    <p> <input type = "submit" value = "Register"> </p>
	    </form>
</body>
</html>
