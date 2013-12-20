<?php
    session_start();
?>

<html>
<head>
	<title> My Home Page </title>
</head>

<body>
	<div id = "header">
		<h1>
			<?php echo $_SESSION['valid_user']."'s"?> Blog
	    </h1>

	    <div class = "bar">

	    	<a href = 'logout.php'> Logout </a> |

	    	<a href = 'mypage.php'> My Blogs. </a>

	    	<form action = "search.php" method = "post">
	    		<p> <input type = "text" name = "key" value = "title or date"> 
	    		    <input type = "submit" value = "search"> </p>
	    	</form> 

	    	<form action = "newpost.html" method = "post">
	    	    <p> <input type = "submit" value = "New Post"> </p>
	    	</form> 
	    </div>
	</div>
    
    <h3> What's new? </h3>

	<div id = "blogs">
		<?php
		    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");
		    $query = "SELECT * FROM blog ORDER BY date DESC";
            $result = mysqli_query($link, $query);
           /* $query = "SELECT * FROM $result ORDER BY DATE DESC"; //??
            $result = mysqli_query($link, $query); */
            $rows = mysqli_num_rows($result);

            while ($rows > 0) {
            	$current_blog = mysqli_fetch_assoc($result);
            	echo $current_blog['username'];
            	echo $current_blog['date'];
            	echo "<a href = 'showpage.php?blog_id=".$current_blog['Blog_ID']."'>".$current_blog['title']."</a>.<br>";
            	$rows = $rows - 1;
            }
		?>
   
</body>
</html>
