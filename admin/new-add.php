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
?>

<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
            <h1 class="title">????????????????</h1>
        </div>
        <div class="row">
            <form action="new-add-action.php" method="post" enctype="multipart/form-data">
                <!-- ???????? ???? ?????????????? ???????????????? -->
                <div class="mb-3">
                    <label for="img" class="form-label">???????? ???? ?????????????? ????????????????</label>
                    </br>
                    <input type="file" id="img" name="main_page_image" accept="image/*" onchange="readURL(this);" />
                    <img id="blah" src="#" alt="your image" />
                </div>
                <!-- ?????????????? ???????? -->
                <div class="mb-3">
                    <label for="img" class="form-label">?????????????? ????????</label>
                    </br>
                    <input type="file" id="img" name="upper_image" accept="image/*" onchange="readURL2(this);" />
                    <img id="blah2" src="#" alt="your image" />
                </div>
                <!-- ???????????? ?????????? ?????????? -->
                <div class="mb-3">
                    <label for="img" class="form-label">???????????? ?????????? ??????????</label>
                    </br>
                    <input type="file" id="img" name="lower_image_1" accept="image/*" onchange="readURL3(this);" />
                    <img id="blah3" src="#" alt="your image" />
                </div>
                <!-- ???????????? ?????????? ???????????? -->
                <div class="mb-3">
                    <label for="img" class="form-label">???????????? ?????????? ????????????</label>
                    </br>
                    <input type="file" id="img" name="lower_image_2" accept="image/*" onchange="readURL4(this);" />
                    <img id="blah4" src="#" alt="your image" />
                </div>
                <!-- ???????????? -->
                <label for="exampleInputEmail1" class="form-label">????????????</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" checked value="?? ????????????">
                    <label class="form-check-label" for="flexRadioDefault1">
                        ?? ????????????
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="???? ?? ????????????">
                    <label class="form-check-label" for="flexRadioDefault2">
                        ???? ?? ????????????
                    </label>
                </div>

                <!-- ?????????????? -->
                <div class="mb-3">
                    <h3>??????????????</h3>
                </div>
                <!-- ?????? ???????????? -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????? ????????????</label>
                    <input type="text" name="dog_name_rus" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????????????? 1 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 1</label>
                    <input type="text" name="title_1_rus" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 1 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 1</label>
                    <textarea class="form-control" name="text_1_rus" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- ?????????????????? 2 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 2</label>
                    <input type="text" name="title_2_rus" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 2 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 2</label>
                    <textarea class="form-control" name="text_2_rus" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- ?????????????????? 3 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 3</label>
                    <input type="text" name="title_3_rus" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 3 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 3</label>
                    <textarea class="form-control" name="text_3_rus" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <!-- ?????????????????? -->
                <div class="mb-3">
                    <h3>??????????????????</h3>
                </div>
                <!-- ?????? ???????????? -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????? ????????????</label>
                    <input type="text" name="dog_name_est" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????????????? 1 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 1</label>
                    <input type="text" name="title_1_est" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 1 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 1</label>
                    <textarea class="form-control" name="text_1_est" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- ?????????????????? 2 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 2</label>
                    <input type="text" name="title_2_est" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 2 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 2</label>
                    <textarea class="form-control" name="text_2_est" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- ?????????????????? 3 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 3</label>
                    <input type="text" name="title_3_est" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 3 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 3</label>
                    <textarea class="form-control" name="text_3_est" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <!-- ???????????????????? -->
                <div class="mb-3">
                    <h3>????????????????????</h3>
                </div>
                <!-- ?????? ???????????? -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????? ????????????</label>
                    <input type="text" name="dog_name_eng" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????????????? 1 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 1</label>
                    <input type="text" name="title_1_eng" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 1 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 1</label>
                    <textarea class="form-control" name="text_1_eng" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- ?????????????????? 2 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 2</label>
                    <input type="text" name="title_2_eng" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 2 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 2</label>
                    <textarea class="form-control" name="text_2_eng" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- ?????????????????? 3 -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">?????????????????? 3</label>
                    <input type="text" name="title_3_eng" class="form-control" id="exampleInputEmail1">
                </div>
                <!-- ?????????? 3 -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">?????????? 3</label>
                    <textarea class="form-control" name="text_3_eng" id="exampleFormControlTextarea1" rows="3"></textarea>
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