<html>
<head>
  <title> Show page. </title>
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
    echo $result['content']."<br>";  

    if ($result['username'] === $_SESSION['valid_user']) {
      echo "<a href='delete.php?blog_id=$blog_id'> Delete </a> | ";

      echo "<a href='editpage.php?blog_id=$blog_id'> Edit </a>";
    }

  echo "<form action = 'default.php' method = 'post'>
          <p> <input type = 'submit' value = 'Back to catalog'> </p>
        </form>";
  ?>
</body>
</html>.
