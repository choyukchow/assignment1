<html>
<head>
	<title> Edit my blog. </title>
</head>

<body>

  <?php
      $blog_id = $_POST['blog_id'];
      $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

      $query = "SELECT * FROM blog WHERE Blog_ID = '".$blog_id."'";
      $result = mysqli_query($link, $query);
      $current_blog = mysqli_fetch_assoc($result);  
  ?>

  <form action = "edit.php" method = "post">
		<p> Title: </p>
		<p> <input type = "text" name = "title" value = "<?php echo $current_blog['title'] ?>"> </p>
		<p> Content: </p>
		<textarea rows="30" cols="80" name = "content"> <?php echo $current_blog['content'] ?> </textarea>
		<p> <input type = "submit" value = "Post"> </p>
		<p> <input type = "hidden" name = "blog_id" value = "<?php echo $blog_id ?>" > </p>
	</from>

</body>