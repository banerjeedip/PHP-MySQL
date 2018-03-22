<?php
$DBHOST = "localhost";
$DBNAME = "test_products";
$DBUSER = "root";
 
$sLink = mysql_connect($DBHOST,$DBUSER,'') or die('Connection with MySql Server failed');
mysql_select_db($DBNAME, $sLink) or die('MySql DB was not found');
?> 