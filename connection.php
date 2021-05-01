<?php
$host = "localhost:3307"; 
$user = "root";
$password = "";
$database = "online_quiz";

$link = mysqli_connect ($host, $user, $password);
mysqli_select_db($link,$database);

?>