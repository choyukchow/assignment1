<html>
<head>
	<title> Successful comment! </title>
    <link rel="stylesheet" type="text/css" href=<?php echo STATIC_DIR."/defaultStyle.css";?> media="screen" />
</head>

<body>
  <h1> Successful comment! </h1>

  <?php
      include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
      session_start();
      $comment = $_POST['comment'];
      $blog_id = $_POST['blog_id'];
      $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

      $query = "INSERT INTO comment (Blog_ID, date, username, comment)
              VALUES (".$blog_id.", now(), '".$_SESSION['valid_user']."', '".$comment."')";
      mysqli_query($link, $query);

      echo "<a href = '".VIEW_DIR."/showpage.php?blog_id=".$blog_id."'> Back to blog</a><br>";
  ?>
</body>
