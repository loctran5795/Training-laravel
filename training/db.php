<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "debian-sys-maint";
$password = "2XN6Mr1RTVcoY1ZL";
$dbname = "training";

$conn = new mysqli($servername, $username, $password, $dbname);
require_once('users.php');
require_once('./modol/posts.php');