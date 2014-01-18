<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
?>

<html>
<head>
	<title> Edit my blog. </title>
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
        Edit My Blog
        </div>

      <div class = "bar">
        <?php
                echo "<a href = ".VIEW_DIR."/default.php> Home Page </a> | 
                       <a href = ".VIEW_DIR."/mypage.php> My Blogs </a>";
        ?>
        </div>
  </div>

  <?php
      $blog_id = $_GET['blog_id'];
      $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

      $query = "SELECT * FROM blog WHERE Blog_ID = '".$blog_id."'";
      $result = mysqli_query($link, $query);
      $current_blog = mysqli_fetch_assoc($result);  

  ?>
  <div id = "content"> 
    <div id = "post"> 
    <form action = <?php echo MODEL_DIR."/edit.php";?> method = "post">
    <div class = "left">
      Title: 
      </div>
      
    <input type = "text" name = "title" class = "right"> 

    <div class = 'smallspace'></div>

    <div class = "left">
      Content:
    </div>
      
    <textarea rows="10" cols="50" name = "content" class = "right">Your Blog. </textarea>

    <div class = 'smallspace'></div>

      <input type = "submit" value = "Post" class = "right">
    </form>
    </div>
    </div>
</body>
