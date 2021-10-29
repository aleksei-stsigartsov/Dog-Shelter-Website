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

$id = $_POST["id"];
$status = $_POST["status"];
$date = date("d.m.Y");

$dog_name_rus = $_POST["dog_name_rus"];
$title_1_rus = $_POST["title_1_rus"];
$text_1_rus = $_POST["text_1_rus"];
$title_2_rus = $_POST["title_2_rus"];
$text_2_rus = $_POST["text_2_rus"];
$title_3_rus = $_POST["title_3_rus"];
$text_3_rus = $_POST["text_3_rus"];

$dog_name_est = $_POST["dog_name_est"];
$title_1_est = $_POST["title_1_est"];
$text_1_est = $_POST["text_1_est"];
$title_2_est = $_POST["title_2_est"];
$text_2_est = $_POST["text_2_est"];
$title_3_est = $_POST["title_3_est"];
$text_3_est = $_POST["text_3_est"];

$dog_name_eng = $_POST["dog_name_eng"];
$title_1_eng = $_POST["title_1_eng"];
$text_1_eng = $_POST["text_1_eng"];
$title_2_eng = $_POST["title_2_eng"];
$text_2_eng = $_POST["text_2_eng"];
$title_3_eng = $_POST["title_3_eng"];
$text_3_eng = $_POST["text_3_eng"];

$query = mysqli_query($connect, "SELECT * FROM `content_new` WHERE `id` = $id");
$row = mysqli_fetch_assoc($query);

if (empty($main_page_image)) {
    $main_page_image = $row['main_page_image'];
}
if (empty($upper_image)) {
    $upper_image = $row['upper_image'];
}
if (empty($lower_image_1)) {
    $lower_image_1 = $row['lower_image_1'];
}
if (empty($lower_image_2)) {
    $lower_image_2 = $row['lower_image_2'];
}

$path = "../" . $id . ".php";
unlink($path);

mysqli_query($connect, "UPDATE `content_new` SET `main_page_image` = '$main_page_image', `upper_image` = '$upper_image', 
`lower_image_1` = '$lower_image_1', `lower_image_2` = '$lower_image_2', `status` = '$status', `date` = '$date', 
`dog_name_rus` = '$dog_name_rus', `title_1_rus` = '$title_1_rus', `text_1_rus` = '$text_1_rus', `title_2_rus` = '$title_2_rus', 
`text_2_rus` = '$text_2_rus', `title_3_rus` = '$title_3_rus', `text_3_rus` = '$text_3_rus', `dog_name_est` = '$dog_name_est', 
`title_1_est` = '$title_1_est', `text_1_est` = '$text_1_est', `title_2_est` = '$title_2_est', `text_2_est` = '$text_2_est', 
`title_3_est` = '$title_3_est', `text_3_est` = '$text_3_est', `dog_name_eng` = '$dog_name_eng', `title_1_eng` = '$title_1_eng', 
`text_1_eng` = '$text_1_eng', `title_2_eng` = '$title_2_eng', `text_2_eng` = '$text_2_eng', `title_3_eng` = '$title_3_eng', 
`text_3_eng` = '$text_3_eng' WHERE `content_new`.`id` = $id");

$file = file_get_contents('./test.txt');

$f = fopen($path, "w+");
fwrite($f, $file);

header('Location: index.php');
