<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
?>
<html>
<head>
	<title> register </title>
    <link rel="stylesheet" type="text/css" href=<?php echo STATIC_DIR."/defaultStyle.css";?> media="screen" />
</head>

<body>
<form action = <?php echo MODEL_DIR."/register.php";?> method = "post">
		<p> Username: </p>
		<p> <input type = "text" name = "username"> </p>
		<p> Password: </p>
		<p> <input type = "password" name = "password"> </p>
		<p> <input type = "submit" > </p>
	</form>
</body>
</html>
