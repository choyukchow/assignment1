<html>
<head>
  <?php
    //$info = Request.QueryString("second_id"); 
    //<title> '".$info['title']."' <title>
    //require("default.php");
    //$info = $_GET['info'];
  ?>
  <title> Show page. </title>
</head>

<body>
  <?php
    require("default.php");
    $info = $_GET['info'];
    echo $info['title'];
  ?>
</body>
</html>