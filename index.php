<?php
/* Change this line only on the live server. */
set_include_path('/storage/ssd5/850/5249850/public_html/inc_/');

include ('inc_connect.php');
include ('inc_session.php');
include ('inc_verinfo.php');

if (isset($_SESSION['u_id']) && isset($_SESSION['u_username']) ) {
   
}
else {
    header ('Location: login.php');
}

?>

<html>

	<head>
		<link rel="icon" href="favicon.ico" type="image/ico">
		<link rel="stylesheet" type="text/css" href="style_index.css">
		<title>Aurora Tracker - Home</title>
	</head>
		
	<body>
	    
		<div id="wrap">
		    <h1>
		        Aurora Tracker <?php echo $verinfo; ?>
		        <small class="sm1">Version release date: <?php echo $verdate; ?></small>
		    </h1>
		    <h2>Welcome! <?php $current_user; ?></h2>
		    
		    <div id="navbar">
		        <?php include ('inc_navbar.php'); ?>
		    </div>
		    
		</div>
		
		
	
	</body>
</html>
