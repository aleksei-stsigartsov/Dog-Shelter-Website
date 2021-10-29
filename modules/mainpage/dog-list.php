<section id="dogs<?php echo_lang(); ?>" class="services section-bg3 ">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p style="font-size: 30px; font-weight: 100; color:black; font-family:'Bad Script', cursive;">
                <?php echo $terms['index_dogs_looking'] ?></p>
        </div>
        <div class="dog-list-area row" style="margin-right: auto; margin-left: auto">
            <!--
            <div class="col-6 col-sm-6 col-md-4 mt-4 mt-md-0">
                <div class="single-dog-list" onclick="parent.location='blog-single.php'">
                    <img src="assets/images/dogs/charli/charli.jpg" alt class="img-fluid">
                    <div class="overlay">
                        <div class="text">Чарли</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 mt-4 mt-md-0">
                <div class="single-dog-list" onclick="parent.location='blog-single.php'">
                    <img src="assets/images/dogs/solomon/solomon.jpg" alt class="img-fluid">
                    <div class="overlay">
                        <div class="text">Соломон</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 mt-4 mt-md-0">
                <div class="single-dog-list" onclick="parent.location='blog-single.php'">
                    <img src="assets/images/dogs/charli2/charli2.jpg" alt class="img-fluid">
                    <div class="overlay">
                        <div class="text">Чарли</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 mt-4 mt-md-0">
                <div class="single-dog-list" onclick="parent.location='blog-single.php'">
                    <img src="assets/images/dogs/leja/1.jpg" alt class="img-fluid">
                    <div class="overlay">
                        <div class="text">Лея</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 mt-4 mt-md-0">
                <div class="single-dog-list" onclick="parent.location='blog-single.php'">
                    <img src="assets/images/dogs/dusja/freja.jpg" alt class="img-fluid">
                    <div class="overlay">
                        <div class="text">Дуся</div>
                    </div>
                </div>
            </div>
            -->

            <?php


            switch ($_SESSION['lang']) {
                case "rus":
                    $lang = "dog_name_rus";
                    break;
                case "est":
                    $lang = "dog_name_est";
                    break;
                case "eng":
                    $lang = "dog_name_eng";
                    break;
                default:
                    $lang = "dog_name_rus";
            }

            if (!$connect) {
                die("Ошибка: " . mysqli_connect_error());
            }
            $query = "SELECT * FROM `content_new` WHERE `status` = 'В приюте'";
            if ($result = mysqli_query($connect, $query)) {
                foreach ($result as $row) {
                    echo "<div class=\"col-6 col-sm-6 col-md-4 mt-4 mt-md-0\">";
                    echo "<div class=\"single-dog-list\" onclick=\"parent.location='" . $row["id"] . ".php'\">";
                    echo "<img src=\"admin/images/" . $row["main_page_image"] . "\" alt class=\"img-fluid\">";
                    echo "<div class=\"overlay\">";
                    echo "<div class=\"text\">" . $row[$lang] . "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                mysqli_free_result($result);
            } else {
                echo "Ошибка: " . mysqli_error($connect);
            }
            mysqli_close($connect);
            ?>

        </div>
</section><!-- End Dog Cards Section -->