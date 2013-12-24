<html>
<head>
	<title> Search Result </title>
<head>

<body>
	<div id = "header">
		<h2> Search Result </h2>

	    <div class = "bar">

	    	<a href = 'logout.php'> Logout </a> | <a href = 'default.php'> Home Page </a>

	    	<form action = "search.php" method = "post">
	    		<p> <input type = "text" name = "key" value = <?php echo $_POST['key']; ?>> 
	    		    <input type = "submit" value = "search"> </p>
	    	</form> 

	    	<form action = "newpost.html" method = "post">
	    	    <p> <input type = "submit" value = "New Post"> </p>
	    	</form> 
	    </div>
	</div>

    <?php
       $key = $_POST['key'];
       $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

       $query = "SELECT * FROM blog WHERE date = '".$key."' or title = '".$key."'"; //how to order by date DESC
       $result = mysqli_query($link, $query);
       $rows = mysqli_num_rows($result);

       if ($rows === 0) {
       	  echo "No Result Found";
       }

       while ($rows > 0) {
        	$current_blog = mysqli_fetch_assoc($result);
           	echo $current_blog['username'];
           	echo $current_blog['date'];
           	echo "<a href = 'showpage.php?blog_id=".$current_blog['Blog_ID']."'>".$current_blog['title']."</a><br>";
           	$rows = $rows - 1;
        }  
?>