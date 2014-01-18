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
      <div id = "customheader">
        <?php
                echo "<div class = 'log'>
                          <a href = ".MODEL_DIR."/logout.php> Logout </a> 
                    </div>";
        ?>
       
  
        <div class = "search">
            <form action = <?php echo MODEL_DIR.'/search.php';?> method = "post">
               <input type = "text" name = "key" value = "title or date"> 
               <input type = "submit" value = "search"> 
            </form> 
        </div>
      </div>
        

		<div class = "title">
			  What's new?
        </div>

	    <div class = "bar">
	    	<?php
                echo "<a href = ".VIEW_DIR."/newpost.php> New Post </a> |
	    	           <a href = ".VIEW_DIR."/mypage.php> My Blogs </a>";
	    	?>
        </div>
	</div>

	
	<div id = "content">
		<?php
		    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
		    $query = "SELECT * FROM blog ORDER BY date DESC";
            $result = mysqli_query($link, $query);
            $rows = mysqli_num_rows($result);

            while ($rows > 0) {
            	$current_blog = mysqli_fetch_assoc($result);
                echo "<div id = 'post'>";
            	echo '<div class = "left">'.$current_blog['username'].' ';
            	echo $current_blog['date'].'</div>';
            	echo "<div class = 'right'>
                        <div class = 'title'><a href = ".VIEW_DIR."/showpage.php?blog_id=".$current_blog['Blog_ID'].">".$current_blog['title'].
                        "</a><br></div>";
                echo "<div class = 'blogcontent'>".nl2br($current_blog['content'])."</div>";
                echo "</div><div class = 'bigspace'></div>";
            	$rows = $rows - 1;
            }

            //$rows = mysqli_num_rows($result);
            //echo "<div class = 'endbar'>".$rows." </div>";
		?>
    </div>
   
</body>
</html>
