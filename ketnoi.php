<?php
$connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
mysql_select_db("shoppie", $connect) or die("Database not found!");
mysql_query("SET NAMES 'utf8'");
?>