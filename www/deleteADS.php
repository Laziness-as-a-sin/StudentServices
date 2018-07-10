<?php
$id = $_POST['idishnik'];
$username = mysql_real_escape_string($_POST['username']);
mysql_connect("localhost", "root", "") or die (mysql_error()); 
mysql_select_db("DB") or die ("Cannot connect to database");
mysql_query("DELETE FROM ads WHERE id1='$id'");
$_SESSION['user'] = $username; 
header("location: home.php");