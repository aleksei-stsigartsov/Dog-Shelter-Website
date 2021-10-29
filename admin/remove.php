<?php

require_once "connect.php";

session_start();
$connect = mysqli_connect("localhost", "root", "", "database");
$query = "SELECT * FROM `admin` WHERE `id` = 1";
if ($result = mysqli_query($connect, $query)) {
    foreach ($result as $row) {
        if ($_SESSION["login"] != $row["login"] && $_SESSION["password"] != $row["pass_hash"]) {
            header('Location: login.php');
        }
    }
    mysqli_free_result($result);
}

$id = $_GET["id"];
mysqli_query($connect, "DELETE FROM `content_new` WHERE `content_new`.`id` = $id");
$path = "../" . $id . ".php";
unlink($path);
header('Location: index.php');
