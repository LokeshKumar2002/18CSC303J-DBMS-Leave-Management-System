<?php

define('DB_NAME', 'sourcecodester_leavedb');


define("DB_USER", "root");

define("DB_PASS", "");


define("DB_HOST", "localhost");


$db_con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


$db_con->set_charset("utf8");
?>
