<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';          
?>

<html>
<head>
    <title> Login Error </title>
    <link rel="stylesheet" type="text/css" href=<?php echo STATIC_DIR."/defaultStyle.css";?> media="screen" />
</head>

<body>
	<div id = "header">
      <div id = "customheader">
        <?php            
                echo "<div class = 'log'>
                          <a href = ".VIEW_DIR."/login.php> Login </a> | <a href = ".VIEW_DIR."/register.php> Register </a>
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
			 Login Error! 
        </div>

	    <div class = "bar">
        </div>
	</div>

    <div id = "content">
       
         Please double check your username and password :)        

        <p><a href = <?php echo VIEW_DIR."/login.php"; ?>> Go Back To Login Page </a></p>
    </div>
</body>
</html>
