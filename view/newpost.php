<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
?>
<html>
<head>
	<title> New Post </title>
    <link rel="stylesheet" type="text/css" href=<?php echo STATIC_DIR."/defaultStyle.css";?> media="screen" />
</head>

<body>
    <form action = <?php echo MODEL_DIR."/newpost.php";?> method = "post">
		<p> Title: </p>
		<p> <input type = "text" name = "title"> </p>
		<p> Content: </p>
		<textarea rows="30" cols="80" name = "content">Your Blog. </textarea>
		<p> <input type = "submit" value = "Post"> </p>
    </form>
</body>
</html>
