<?php

require_once "modules/connect.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>The Happy Dog Family</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/images/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <?php
    include "modules/general/header.php";

    $id = str_replace(".php", "", substr($_SERVER['REQUEST_URI'], 1));

    debug_to_console($id);    

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
        echo "????????????: " . mysqli_error($connect);
    }

    switch ($_SESSION['lang']) {
        case "eng":
            $dog_name = $dog_name_eng;
            $title_1 = $title_1_eng;
            $text_1 = $text_1_eng;
            $title_2 = $title_2_eng;
            $text_2 = $text_2_eng;
            $title_3 = $title_3_eng;
            $text_3 = $text_3_eng;
            break;
        case "est":
            $dog_name = $dog_name_est;
            $title_1 = $title_1_est;
            $text_1 = $text_1_est;
            $title_2 = $title_2_est;
            $text_2 = $text_2_est;
            $title_3 = $title_3_est;
            $text_3 = $text_3_est;
            break;
        case "rus":
            $dog_name = $dog_name_rus;
            $title_1 = $title_1_rus;
            $text_1 = $text_1_rus;
            $title_2 = $title_2_rus;
            $text_2 = $text_2_rus;
            $title_3 = $title_3_rus;
            $text_3 = $text_3_rus;
            break;
        default:
            $dog_name = $dog_name_rus;
            $title_1 = $title_1_rus;
            $text_1 = $text_1_rus;
            $title_2 = $title_2_rus;
            $text_2 = $text_2_rus;
            $title_3 = $title_3_rus;
            $text_3 = $text_3_rus;
    }
    ?>

    <!-- ======= Hero ======= -->
    <section id="hero_contacts" class="d-flex align-items-center">
        <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-xl-12">
                            <h2><?php echo $terms['header_main'] ?> / <?php echo $dog_name; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a onclick="parent.location='index.php'" id="bread1"><?php echo $terms['header_main'] ?></a></li>
                <li><a onclick="parent.location='index.php#dogs'" id="bread1"><?php echo $terms['footer_shelter'] ?></a></li>
                <li><a><?php echo $dog_name; ?></a></li>
            </ol>
        </div>
    </section>
    <!-- End Breadcrumbs -->


    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-12 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 mt-12 mt-md-0">
                                    <img src="admin/images/<?php echo $upper_image; ?>" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <h2 class="entry-title">
                            <a><?php echo $title_1; ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a><time datetime="2020-01-01"><?php echo date("d.m.Y"); ?></time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content" style="color:black">
                            <p1><?php echo nl2br($text_1); ?></p1>
                            <h3><?php echo $title_2; ?></h3>
                            <p1><?php echo nl2br($text_2); ?></p1>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 mt-6 mt-md-0">
                                    <img src="admin/images/<?php echo $lower_image_1; ?>" class="img-fluid">
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 mt-6 mt-md-0">
                                    <img src="admin/images/<?php echo $lower_image_2; ?>" class="img-fluid">
                                </div>
                            </div>
                            <h3><?php echo $title_3; ?></h3>
                            <p1><?php echo nl2br($text_3); ?></p1>
                        </div>
                        <div class="entry-footer clearfix">
                            <div class="float-left">
                                <i class="icofont-folder"></i>
                                <ul class="cats">
                                    <li><a href="index.php#dogs"><?php echo $terms['footer_shelter'] ?></a></li>
                                </ul>
                            </div>

                            <div class="float-right share">
                                <a href="https://www.instagram.com/p/CQo2Yv-NQks/" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                            </div>

                        </div>

                    </article>
                    <div class="blog-author clearfix">
                        <img src="assets/images/logo.png" class="rounded-circle float-left" alt="">
                        <div class="social-links">
                            <a href="https://www.instagram.com/dog_family.tln/"><i class="icofont-instagram"></i></a>
                        </div>
                        <p>
                            <?php echo $terms['come_meet']; ?>
                        </p>
                    </div>
                    <!-- End Message -->
                </div>

            </div>
    </section>

    <section id="about" class="about section-bg4">
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 footer-contact">
                            <h3><a href="index.php"><img class="logoplus" style='height: 55px;' src="assets/images/logoFull.png"></a></h3>
                            <p>
                                J????raku tee 28, Tallinn 12014, Estonia<br>
                                <strong>Phone:</strong> +372 5029-71-9<br>
                                <strong>Email:</strong> happy.dog.family.tln@gmail.com<br>
                            </p>
                            <div class="social-links">
                                <a href="https://www.instagram.com/dog_family.tln/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 footer-links">
                            <h4><?php echo $terms['header_helpdogs'] ?></h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="helpdogs.php"><?php echo $terms['footer_shelter'] ?></a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="helpdogs.php"><?php echo $terms['footer_donations'] ?></a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="helpdogs.php"><?php echo $terms['footer_other_help'] ?></a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="admin/login.php">Admin Panel</a></li>
                            </ul>
                        </div>
                        <div class="mr-md-auto text-center text-md-left">
                            <div class="copyright" style="background: #fff; border-radius: 10px; color:black;">
                                &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
                                Designed by <a href="https://bootstrapmade.com/" style="color:black;">BootstrapMade</a>
                            </div>
                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer><!-- End Footer -->
    </section>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>