<html>
<head>
	<title> My Home Page </title>
</head>

<body>
	<?php
	session_start();
    $_SESSION['valid_user']='xuanxuan';
    ?>

	<div id = "header">
		<a class = "title" href='/'>
			My Blog
	    </a>

	    <div class = "bar">
	    	<span style = "text-transform:lowercase;">
	    	<form action = "search.php" method = "post">
	    		<p> <input type = "text" name = "key" value = "title or date"> 
	    		    <input type = "submit" value = "search"> </p>
	    	</form> 
	    	<form action = "newpost.html" method = "post">
	    	    <p> <input type = "submit" value = "New Post"> </p>
	    	</form> 
	    </div>
	</div>
</body>