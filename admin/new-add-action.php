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

$main_page_image = $_FILES["main_page_image"]["name"];
$upper_image = $_FILES["upper_image"]["name"];
$lower_image_1 = $_FILES["lower_image_1"]["name"];
$lower_image_2 = $_FILES["lower_image_2"]["name"];
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

$directory = "/images";
$filecount = 1;
$files = glob($directory . "*");
if ($files) {
    $filecount = count($files);
}

move_uploaded_file($_FILES["main_page_image"]["tmp_name"], "images/" . $main_page_image);
move_uploaded_file($_FILES["upper_image"]["tmp_name"], "images/" . $upper_image);
move_uploaded_file($_FILES["lower_image_1"]["tmp_name"], "images/" . $lower_image_1);
move_uploaded_file($_FILES["lower_image_2"]["tmp_name"], "images/" . $lower_image_2);

// mysqli_query($connect, "INSERT INTO `content` (`id`, `dog_name`, `main_page_image`, 
// `upper_image`, `title_1`, `text_1`, `title_2`, `text_2`, `lower_image_1`, `lower_image_2`, 
// `title_3`, `text_3`, `date`, `status`) VALUES (NULL, '$dog_name', '$main_page_image', 
// '$upper_image', '$title_1', '$text_1', '$title_2', '$text_2', '$lower_image_1', '$lower_image_2', 
// '$title_3', '$text_3', '$date', '$status')");

mysqli_query($connect, "INSERT INTO `content_new` (`id`, `main_page_image`, `upper_image`, `lower_image_1`, 
`lower_image_2`, `status`, `date`, `dog_name_rus`, `title_1_rus`, `text_1_rus`, 
`title_2_rus`, `text_2_rus`, `title_3_rus`, `text_3_rus`, `dog_name_est`, `title_1_est`, 
`text_1_est`, `title_2_est`, `text_2_est`, `title_3_est`, `text_3_est`, `dog_name_eng`, 
`title_1_eng`, `text_1_eng`, `title_2_eng`, `text_2_eng`, `title_3_eng`, `text_3_eng`) 
VALUES (NULL, '$main_page_image', '$upper_image', '$lower_image_1', '$lower_image_2', 
'$status', '$date', '$dog_name_rus', '$title_1_rus', 
'$text_1_rus', '$title_2_rus', '$text_2_rus', '$title_3_rus', 
'$text_3_rus', '$dog_name_est', '$title_1_est', '$text_1_est', 
'$title_2_est', '$text_2_est', '$title_3_est', '$text_3_est', 
'$dog_name_eng', '$title_1_eng', '$text_1_eng', '$title_2_eng', 
'$text_2_eng', '$title_3_eng', '$text_3_eng')");

$get_id_query = mysqli_query($connect, "SELECT `id` FROM `content_new` WHERE `dog_name_rus` = '$dog_name_rus'");
$row = mysqli_fetch_assoc($get_id_query);

$fname = $row["id"] . ".php";
$path = "../" . $fname;
$file = file_get_contents('./test.txt');

$f = fopen($path, "w+");
fwrite($f, $file);
header('Location: ../' . $fname);
