<?php
/**define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'business_grid');
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
*/
$server = "businessgrid.cj5e1alds1yl.us-east-2.rds.amazonaws.com";
$username = "businessgrid";
$password = "WVHS2019#";
$database = "ebdb";
$link = mysqli_connect($server, $username, $password, $database);
//$link = new mysqli($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
?>