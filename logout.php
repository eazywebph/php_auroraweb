<?php
/* Change this line only on the live server. */
set_include_path('/storage/ssd5/850/5249850/public_html/inc_/');
include ('inc_session.php');
session_destroy();
header('Location: login.php');
?>