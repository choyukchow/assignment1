<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';    
    session_start();
?>
<html>
<head>
  <title> Show page. </title>
    <link rel="stylesheet" type="text/css" href=<?php echo STATIC_DIR."/defaultStyle.css";?> media="screen" />
</head>

<body>
  <?php
    //require("default.php");
    $blog_id = $_GET['blog_id'];
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    $query = "SELECT * FROM blog Where Blog_ID = '".$blog_id."'";
    $result_table = mysqli_query($link, $query);
    $result = mysqli_fetch_assoc($result_table);

    //header
    if (isset($_SESSION['valid_user'])) {
        echo "<div id = 'header'><div id = 'customheader'>";
        echo "<div class = 'log'>
                          <a href = ".MODEL_DIR."/logout.php> Logout </a> 
                    </div>";
        echo "<div class = 'search'>
                <form action = ".MODEL_DIR."/search.php method = 'post'>
                  <input type = 'text' name = 'key' value = 'title or date'> 
                  <input type = 'submit' value = 'search'> 
                </form> 
              </div> </div>";
        echo "<div class = 'title'>".$result['title']."</div>";
        echo "<div class = 'bar'> <a href = ".VIEW_DIR."/default.php> Home Page </a> |
                       <a href = ".VIEW_DIR."/mypage.php> My Blogs </a></div>";
    } else {
        echo "<div id = 'header'><div id = 'customheader'>";
        echo "<div class = 'log'>
                          <a href = ".VIEW_DIR."/login.php> Login </a> |
                          <a href = ".VIEW_DIR."/register.php> Register </a>
                    </div>";
        echo "<div class = 'search'>
                <form action = ".MODEL_DIR."/search.php method = 'post'>
                  <input type = 'text' name = 'key' value = 'title or date'> 
                  <input type = 'submit' value = 'search'> 
                </form> 
              </div> </div>";
        echo "<div class = 'title'>".$result['title']."</div>";
        echo "<div class = 'bar'> </div>";
    }
    

    //show content
    echo "<div id = 'content'> ";
    echo "<div id = 'post'>";
        echo '<div class = "left">'.$result['username'].' ';
        echo $result['date'].'</div>';
        echo "<div class = 'right'>";
        echo "<div class = 'blogcontent'>".nl2br($result['content'])."</div>";

    //add comment        
    if (isset($_SESSION['valid_user'])) {
        if ($result['username'] === $_SESSION['valid_user']) {
            echo "<div class = 'smallspace'> </div> <div class = 'delete_edit'>
                  <a href=".MODEL_DIR."/delete.php?blog_id=$blog_id> Delete </a> | 
                  <a href=".MODEL_DIR."/editpage.php?blog_id=$blog_id> Edit </a>
                  </div></div></div><div class = 'bigspace'></div>";
            echo "<hr/>";
        }

        //comment

        echo "<div id = 'post'>
             <form action = ".MODEL_DIR."/addcomment.php method = 'post'>
                <p> <textarea rows='5' cols='50' name = 'comment'>My comment... </textarea> </p>
                <p> <input type = 'hidden' name = 'blog_id' value = '".$blog_id."'> </p>
                <p> <input type = 'submit' value = 'Comment'> </p>
            </form></div>";

    } else {
        echo "<br><br> You need to ";
        echo "<a href=".VIEW_DIR."/login.php> login </a>";
        echo " to comment!</div>";
    }
    
    echo "<hr/>";

    //show comment
    $query = "SELECT * FROM comment WHERE Blog_ID = '".$blog_id."' ORDER BY date DESC";
    $result = mysqli_query($link, $query);
    $result_rows = mysqli_num_rows($result);

    if ($result_rows === 0) {
      echo "<div id = 'post'><br><br><br>Currently no comment >3< </div>";
    }

    while ($result_rows > 0) {
        $current_comment = mysqli_fetch_assoc($result);
        echo "<div id = 'post'>";
        echo '<div class = "left">'.$current_comment['username'].' ';
        echo $current_comment['date'].'</div>';
        echo "<div class = 'right'>";
        echo "<div class = 'blogcontent'>".nl2br($current_comment['comment'])."</div>";
        echo "</div><div class = 'smallspace'></div>";
        $result_rows = $result_rows - 1;
            }


  ?>
</body>