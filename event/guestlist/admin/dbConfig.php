<?php

define ("DB_HOST", "timothypatrick.timothypatrick.ca"); // set database host

define ("DB_USER", "shaynak1122"); // set database user

define ("DB_PASS","armadillo33"); // set database password

define ("DB_NAME","timothypatrick"); // set database name



$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");

$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

?>