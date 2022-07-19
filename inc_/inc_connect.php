<?php

$amt_db_host = "localhost";
$amt_db_user = "aurora_web";
$amt_db_pass = "T233525-25";
$amt_db_db = "aurora_web";

$con = mysqli_connect ($amt_db_host,$amt_db_user,$amt_db_pass,$amt_db_db);
if (!$con) {
    die('Could not connect');
}

?>
