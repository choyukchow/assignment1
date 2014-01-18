<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assignment1/config/global.php';
?>
<html>
<head>
	<title> register </title>
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
			  Register
        </div>

	    <div class = "bar">
	    	<?php
                echo "<a href = ".VIEW_DIR."/default.php> Home Page </a> | 
                       <a href = ".VIEW_DIR."/mypage.php> My Blogs </a>";
	    	?>
        </div>
	</div>

	<div id = "content"> 
    <div id = "post"> 
    <form action = <?php echo MODEL_DIR."/register.php";?>  method = "post">
		 <div class = "left">
			 Username:  
	    </div>
		
		<input type = "text" name = "username" class = "right"> 

		<div class = 'smallspace'></div>

		<div class = "left">
		    Password: 
		</div>
		
		<input type = "password" name = "password" class = "right"> 

        <input type = "submit" value = "Login" class = "right"> 

	    </form>
	</div>
    </div>
</body>
</html>
