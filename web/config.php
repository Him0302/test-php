<?php

session_start();

$db_host = "database-1.ci3hffp1cf30.us-east-1.rds.amazonaws.com";
$db_user = "admin";
$db_pass = "Him8843*";
$db_name = "";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysql->set_charset("utf8");

?>
