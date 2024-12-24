<?php
 
$servername = "lrgs.ftsm.ukm.my";
$username = "a189563";
$password = "smallgreendog";
$dbname = "a189563";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
?>