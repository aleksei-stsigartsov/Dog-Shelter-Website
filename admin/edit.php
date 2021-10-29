<?php

require_once "./connect.php";

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

$query = "SELECT * FROM `content_new` WHERE `id` = " . $id . "";

if ($result = mysqli_query($connect, $query)) {

    foreach ($result as $row) {
        $main_page_image = $row["main_page_image"];
        $upper_image = $row["upper_image"];
        $lower_image_1 = $row["lower_image_1"];
        $lower_image_2 = $row["lower_image_2"];
        $status = $row["status"];

        $dog_name_rus = $row["dog_name_rus"];
        $title_1_rus = $row["title_1_rus"];
        $text_1_rus = $row["text_1_rus"];
        $title_2_rus = $row["title_2_rus"];
        $text_2_rus = $row["text_2_rus"];
        $title_3_rus = $row["title_3_rus"];
        $text_3_rus = $row["text_3_rus"];

        $dog_name_est = $row["dog_name_est"];
        $title_1_est = $row["title_1_est"];
        $text_1_est = $row["text_1_est"];
        $title_2_est = $row["title_2_est"];
        $text_2_est = $row["text_2_est"];
        $title_3_est = $row["title_3_est"];
        $text_3_est = $row["text_3_est"];

        $dog_name_eng = $row["dog_name_eng"];
        $title_1_eng = $row["title_1_eng"];
        $text_1_eng = $row["text_1_eng"];
        $title_2_eng = $row["title_2_eng"];
        $text_2_eng = $row["text_2_eng"];
        $title_3_eng = $row["title_3_eng"];
        $text_3_eng = $row["text_3_eng"];
    }
    mysqli_free_result($result);
} else {
    echo "Ошибка: " . mysqli_error($connect);
}

//mysqli_close($connect);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./add-style.css">
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah4').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="title">Изменить</h1>
        </div>
        <div class="row">
            <form action="edit-action.php" method="post">
                <input type="hidden" value="<?php echo $id; ?>" name="id">

                <!-- Фото на главную страницу -->
                <div class="mb-3">
                    <label for="img" class="form-label">Фото на главную страницу</label>
                    </br>
                    <input type="file" id="img" src="<?php echo $main_page_image; ?>" value="<?php echo $main_page_image; ?>" name="main_page_image" accept="image/*" onchange="readURL(this);" />
                    <img id="blah" src="<?php echo $main_page_image; ?>" alt="your image" />
                </div>

                <!-- Верхнее фото -->
                <div class="mb-3">
                    <label for="img" class="form-label">Верхнее фото</label>
                    </br>
                    <input type="file" id="img" name="upper_image" accept="image/*" onchange="readURL2(this);" />
                    <img id="blah2" src="<?php echo $upper_image; ?>" alt="your image" />
                </div>

                <!-- Нижняя фотка слевау -->
                <div class="mb-3">
                    <label for="img" class="form-label">Нижняя фотка слева</label>
                    </br>
                    <input type="file" id="img" name="lower_image_1" accept="image/*" onchange="readURL3(this);" />
                    <img id="blah3" src="<?php echo $lower_image_1; ?>" alt="your image" />
                </div>

                <!-- Нижняя фотка справа -->
                <div class="mb-3">
                    <label for="img" class="form-label">Нижняя фотка справа</label>
                    </br>
                    <input type="file" id="img" name="lower_image_2" accept="image/*" onchange="readURL4(this);" />
                    <img id="blah4" src="<?php echo $lower_image_2; ?>" alt="your image" />
                </div>

                <!-- Статус -->
                <label for="exampleInputEmail1" class="form-label">Статус</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" <?php echo ($status == 'В приюте') ? 'checked' : '' ?> value="В приюте">
                    <label class="form-check-label" for="flexRadioDefault1">
                        В приюте
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" <?php echo ($status == 'Не в приюте') ? 'checked' : '' ?> value="Не в приюте">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Не в приюте
                    </label>
                </div>

                <!-- Русский -->
                <div class="mb-3">
                    <h3>Русский</h3>
                </div>
                <!-- Имя собаки -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Имя собаки</label>
                    <input type="text" name="dog_name_rus" class="form-control" id="exampleInputEmail1" value="<?php echo $dog_name_rus; ?>">
                </div>
                <!-- Заголовок 1 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 1</label>
                    <input type="text" name="title_1_rus" class="form-control" id="exampleInputEmail1" value="<?php echo $title_1_rus; ?>">
                </div>
                <!-- Текст 1 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 1</label>
                    <textarea class="form-control" name="text_1_rus" id="exampleFormControlTextarea1" rows="3"> <?php echo $text_1_rus; ?> </textarea>
                </div>
                <!-- Заголовок 2 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 2</label>
                    <input type="text" name="title_2_rus" class="form-control" id="exampleInputEmail1" value="<?php echo $title_2_rus; ?>">
                </div>
                <!-- Текст 2 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 2</label>
                    <textarea class="form-control" name="text_2_rus" id="exampleFormControlTextarea1" rows="3"><?php echo $text_2_rus; ?> </textarea>
                </div>
                <!-- Заголовок 3 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 3</label>
                    <input type="text" name="title_3_rus" class="form-control" id="exampleInputEmail1" value="<?php echo $title_3_rus; ?>">
                </div>
                <!-- Текст 3 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 3</label>
                    <textarea class="form-control" name="text_3_rus" id="exampleFormControlTextarea1" rows="3"><?php echo $text_3_rus; ?></textarea>
                </div>

                <!-- Эстонский -->
                <div class="mb-3">
                    <h3>Эстонский</h3>
                </div>
                <!-- Имя собаки -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Имя собаки</label>
                    <input type="text" name="dog_name_est" class="form-control" id="exampleInputEmail1" value="<?php echo $dog_name_est; ?>">
                </div>
                <!-- Заголовок 1 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 1</label>
                    <input type="text" name="title_1_est" class="form-control" id="exampleInputEmail1" value="<?php echo $title_1_est; ?>">
                </div>
                <!-- Текст 1 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 1</label>
                    <textarea class="form-control" name="text_1_est" id="exampleFormControlTextarea1" rows="3"> <?php echo $text_1_est; ?> </textarea>
                </div>
                <!-- Заголовок 2 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 2</label>
                    <input type="text" name="title_2_est" class="form-control" id="exampleInputEmail1" value="<?php echo $title_2_est; ?>">
                </div>
                <!-- Текст 2 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 2</label>
                    <textarea class="form-control" name="text_2_est" id="exampleFormControlTextarea1" rows="3"><?php echo $text_2_est; ?> </textarea>
                </div>
                <!-- Заголовок 3 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 3</label>
                    <input type="text" name="title_3_est" class="form-control" id="exampleInputEmail1" value="<?php echo $title_3_est; ?>">
                </div>
                <!-- Текст 3 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 3</label>
                    <textarea class="form-control" name="text_3_est" id="exampleFormControlTextarea1" rows="3"><?php echo $text_3_est; ?></textarea>
                </div>

                <!-- Английский -->
                <div class="mb-3">
                    <h3>Английский</h3>
                </div>
                <!-- Имя собаки -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Имя собаки</label>
                    <input type="text" name="dog_name_eng" class="form-control" id="exampleInputEmail1" value="<?php echo $dog_name_eng; ?>">
                </div>
                <!-- Заголовок 1 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 1</label>
                    <input type="text" name="title_1_eng" class="form-control" id="exampleInputEmail1" value="<?php echo $title_1_eng; ?>">
                </div>
                <!-- Текст 1 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 1</label>
                    <textarea class="form-control" name="text_1_eng" id="exampleFormControlTextarea1" rows="3"> <?php echo $text_1_eng; ?> </textarea>
                </div>
                <!-- Заголовок 2 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 2</label>
                    <input type="text" name="title_2_eng" class="form-control" id="exampleInputEmail1" value="<?php echo $title_2_eng; ?>">
                </div>
                <!-- Текст 2 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 2</label>
                    <textarea class="form-control" name="text_2_eng" id="exampleFormControlTextarea1" rows="3"><?php echo $text_2_eng; ?> </textarea>
                </div>
                <!-- Заголовок 3 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок 3</label>
                    <input type="text" name="title_3_eng" class="form-control" id="exampleInputEmail1" value="<?php echo $title_3_eng; ?>">
                </div>
                <!-- Текст 3 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст 3</label>
                    <textarea class="form-control" name="text_3_eng" id="exampleFormControlTextarea1" rows="3"><?php echo $text_3_eng; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>