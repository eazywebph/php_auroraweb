<?php
/* Change this line only on the live server. */
set_include_path('inc_/');

include ('inc_connect.php');
include ('inc_session.php');
?>


<html>

	<head>
		<link rel="icon" href="favicon.ico" type="image/ico">
		<link rel="stylesheet" type="text/css" href="style_index.css">
		<title>Aurora Tracker - Login</title>
	</head>
		
	<body>
	    <div id="login">
    	    <p>Please enter your username and password.</p>
    	    <form method="post" action="process_login.php" />
    	    <input type="text" maxlength="25" size="15" name="frm_user" />
    	    <input type="password" maxlength="25" size="15" name="frm_pass" />
    	    <input type="submit" value="Login" />
    	    </form>
    	    <p class="reg01"><a href="register.php">Register.</a><a href="recover.php">Forgot your password.</a></p>
	    </div>
	    
	</body>

</html>