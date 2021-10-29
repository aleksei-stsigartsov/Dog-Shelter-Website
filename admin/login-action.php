<?php
$connect = mysqli_connect("localhost", "root", "", "database");

if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}

$query = "SELECT * FROM `admin` WHERE `id` = 1";
if ($result = mysqli_query($connect, $query)) {
    foreach ($result as $row) {
        if ($_POST["login"] == $row["login"] && md5($_POST["password"]) == $row["pass_hash"]) {

            session_start();
            $_SESSION["login"] = $row["login"];
            $_SESSION["password"] = $row["pass_hash"];
            header('Location: index.php');
        } else {
            echo "not success";
        }
    }
    mysqli_free_result($result);
} else {
    echo "Ошибка: " . mysqli_error($connect);
}
mysqli_close($connect);
