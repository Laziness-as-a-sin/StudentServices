<?php

session_start();
if ($_SESSION['user']) {
    
} else {
    header("location:index.php");
}
$user = $_SESSION['user'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $details = mysql_real_escape_string($_POST['details']);
    $theme = mysql_real_escape_string($_POST['theme']);
    $time = strftime("%X"); //time
    $date = strftime("%B %d, %Y"); //date
    $category = mysql_real_escape_string($_POST['category']);
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("DB") or die("Cannot connect to database");
    mysql_query("INSERT INTO ads (details, time_posted, date_posted, name_u, theme, category) VALUES ('$details', '$time', '$date', '$user', '$theme', '$category')");
    Print '<script>alert("Successfully added!");</script>';
    Print '<script>window.location.assign("home.php");</script>';
    header("location:home.php");
} else {
    header("location:home.php");
}

