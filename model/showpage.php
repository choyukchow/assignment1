<html>
<head>
  <title> Show page. </title>
  <style>
    .blogcontent{
        width: 1200px;
       }
  </style>
</head>

<body>
  <?php
    //require("default.php");
    session_start();
    $blog_id = $_GET['blog_id'];
    $link = mysqli_connect("localhost", "root", "jc119@3fcmx", "assignment1");

    $query = "SELECT * FROM blog Where Blog_ID = '".$blog_id."'";
    $result_table = mysqli_query($link, $query);
    $result = mysqli_fetch_assoc($result_table);

    echo "<h1>".$result['title']."</h1><br>";
    echo $result['username'];
    echo $result['date']."<br>";
    echo "<div class='blogcontent'>".nl2br($result['content'])."<br></div>";  

    if ($result['username'] === $_SESSION['valid_user']) {
      echo "<a href='delete.php?blog_id=$blog_id'> Delete </a> | <a href='editpage.php?blog_id=$blog_id'> Edit </a>";
    }

    echo "<form action = 'default.php' method = 'post'>
            <p> <input type = 'submit' value = 'Back to catalog'> </p>
          </form>";

    //comment
    echo "<form action = 'addcomment.php' method = 'post'>
             <h6> My Comment </h6>
             <p> <textarea rows='5' cols='50' name = 'comment'>My comment... </textarea> </p>
             <p> <input type = 'hidden' name = 'blog_id' value = '".$blog_id."'> </p>
             <p> <input type = 'submit' value = 'Comment'> </p>
          </form>";
    
    //show comment
    $query = "SELECT * FROM comment WHERE Blog_ID = '".$blog_id."'";
    $result = mysqli_query($link, $query);
    $result_rows = mysqli_num_rows($result);

    if ($result_rows === 0) {
      echo "Currently no comment >3<";
    }

    while ($result_rows > 0) {
      $current_comment = mysqli_fetch_assoc($result);
      echo $current_comment['date']."|".$current_comment['username']."  ".$current_comment['comment']."<br>";
      $result_rows = $result_rows - 1;
    }
  ?>
</body>
</html>.
