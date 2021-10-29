<?php

$login = "root";
$password = "";
$hostname = "localhost";
$database = "database";

$connect = mysqli_connect($hostname, $login, $password, $database);
mysqli_set_charset($connect, 'utf8');
