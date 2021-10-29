<?php

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

require_once "./connect.php";
if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}
$query = "SELECT * FROM `content_new`";

?>
<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/admin-style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="title">Админка</h1>
        </div>
        <div class="row">
            <?php
            if ($result = mysqli_query($connect, $query)) {
                $rowsCount = mysqli_num_rows($result);
                echo "<p>Записей: $rowsCount</p>";
                echo "<table><tr><th>#</th><th>Имя собаки</th></tr>";

                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["dog_name_rus"] . "</td>";
                    // echo "<td>" . $row["main_page_image"] . "</td>";
                    // echo "<td>" . $row["upper_image"] . "</td>";
                    // echo "<td>" . $row["title_1"] . "</td>";
                    // echo "<td>" . $row["text_1"] . "</td>";
                    // echo "<td>" . $row["title_2"] . "</td>";
                    // echo "<td>" . $row["text_2"] . "</td>";
                    // echo "<td>" . $row["lower_image_1"] . "</td>";
                    // echo "<td>" . $row["lower_image_2"] . "</td>";
                    // echo "<td>" . $row["title_3"] . "</td>";
                    // echo "<td>" . $row["text_3"] . "</td>";
                    // echo "<td>" . $row["date"] . "</td>";
                    echo "<td><div class=\"btn-group\" role=\"group\">
                    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      Действие
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                      <li><a class=\"dropdown-item\" href=\"remove.php?id=" . $row["id"] . "\">Удалить</a></li>
                      <li><a class=\"dropdown-item\" href=\"edit.php?id=" . $row["id"] . "\">Изменить</a></li>
                      <li><a class=\"dropdown-item\" href=\"../" . $row["id"] . ".php\">Перейти</a></li>
                    </ul>
                  </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($result);
            } else {
                echo "Ошибка: " . mysqli_error($connect);
            }
            mysqli_close($connect);
            ?>
        </div>

        <div class="row">
            <a class="btn btn-primary add-btn" href="new-add.php" role="button">Добавить запись</a>
        </div>

    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>