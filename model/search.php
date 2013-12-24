<?php
   include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
?>

<html>
<head>
	<title> Search Result </title>
<head>

<body>
	<div id = "header">
		<h2> Search Result </h2>

	    <div class = "bar">

        <a href = <?php echo MODEL_DIR.'/logout.php';?>> Logout </a> | <a href = <?php echo VIEW_DIR.'/default.php';?>> Home Page </a>

        <form action = <?php echo MODEL_DIR.'/search.php';?> method = "post">
	    		<p> <input type = "text" name = "key" value = <?php echo $_POST['key']; ?>> 
	    		    <input type = "submit" value = "search"> </p>
	    	</form> 

            <form action = <?php echo VIEW_DIR.'/newpost.php';?> method = "post">
	    	    <p> <input type = "submit" value = "New Post"> </p>
	    	</form> 
	    </div>
	</div>

    <?php
       $key = $_POST['key'];
       $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

       $query = "SELECT * FROM blog WHERE date = '".$key."' or title LIKE '%$key%' ORDER BY date DESC";
       $result = mysqli_query($link, $query);
       $rows = mysqli_num_rows($result);

       if ($rows === 0) {
       	  echo "No Result Found";
       }

       while ($rows > 0) {
        	$current_blog = mysqli_fetch_assoc($result);
           	echo $current_blog['username'];
           	echo $current_blog['date'];
           	echo "<a href = ".VIEW_DIR."/showpage.php?blog_id=".$current_blog['Blog_ID'].">".$current_blog['title']."</a><br>";
           	$rows = $rows - 1;
        }  
?>
