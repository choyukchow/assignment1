<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
    session_start();
?>

<html>
<head>
	<title> My Home Page </title>
    <link rel="stylesheet" type="text/css" href=<?php echo STATIC_DIR."/defaultStyle.css";?> media="screen" />
</head>

<body>
	<div id = "header">
		<h1>
			Let's Blog!
	    </h1>

	    <div class = "bar">

        <?php
            if (isset($_SESSION['valid_user'])){
                header('Location: '.VIEW_DIR.'/default.php');
            } else {
                echo "<a href = ".VIEW_DIR."/login.php> Login </a> | <a href = ".VIEW_DIR."/register.php> Register </a>";
            } 
        ?>

        <form action = <?php echo MODEL_DIR.'/search.php';?> method = "post">
	    		<p> <input type = "text" name = "key" value = "title or date"> 
	    		    <input type = "submit" value = "search"> </p>
	    	</form> 

	    </div>
	</div>
    
    <h2> What's new? </h2>

	<div id = "blogs">
		<?php
		    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
		    $query = "SELECT * FROM blog ORDER BY date DESC";
            $result = mysqli_query($link, $query);
            $rows = mysqli_num_rows($result);

            while ($rows > 0) {
            	$current_blog = mysqli_fetch_assoc($result);
            	echo $current_blog['username'].' ';
            	echo $current_blog['date'].': ';
            	echo "<a href = ".VIEW_DIR."/showpage.php?blog_id=".$current_blog['Blog_ID'].">".$current_blog['title']."</a><br>";
            	$rows = $rows - 1;
            }
		?>
   
</body>
</html>
