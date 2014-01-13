<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
    session_start();
?>

<html>
<head>
	<title> My Blogs </title>
    <link rel="stylesheet" type="text/css" href=<?php echo STATIC_DIR."/defaultStyle.css";?> media="screen" />
</head>

<body>
	<div id = "header">
		<h2>
			<?php echo $_SESSION['valid_user']."'s"?> Blog
	    </h2>

	    <div class = "bar">

        <a href = <?php echo MODEL_DIR.'/logout.php';?>> Logout </a> | <a href = <?php echo VIEW_DIR.'/default.php';?>> Home Page </a>

        <form action = <?php echo MODEL_DIR."/search.php";?> method = "post">
	    		<p> <input type = "text" name = "key" value = "title or date"> 
	    		    <input type = "submit" value = "search"> </p>
	    	</form> 

            <form action = <?php echo MODEL_DIR."/newpost.php";?> method = "post">
	    	    <p> <input type = "submit" value = "New Post"> </p>
	    	</form> 
	    </div>
	</div>

	<div id = "blogs">
		<?php
		    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
		    $query = "SELECT * FROM blog Where username = '".$_SESSION['valid_user']."' ORDER BY date DESC";
            $result = mysqli_query($link, $query);
            $rows = mysqli_num_rows($result);

            while ($rows > 0) {
            	$current_blog = mysqli_fetch_assoc($result);
            	echo $current_blog['date'];
            	echo "<a href = ".VIEW_DIR."/showpage.php?blog_id=".$current_blog['Blog_ID'].">".$current_blog['title']."</a><br>";
            	$rows = $rows - 1;
            }
		?>
   
</body>
</html>
