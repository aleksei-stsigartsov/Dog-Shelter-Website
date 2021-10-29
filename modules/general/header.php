<?php
echo "<link href='assets/css/style.css' rel='stylesheet'> ";

// $login = "root";
// $password = "";
// $hostname = "localhost";
// $database = "database";

// $connect = mysqli_connect($hostname, $login, $password, $database);

function debug_to_console($output)
{
  echo "<script>console.log('Output: " . $output . "' );</script>";
}

function echo_lang()
{
}

if (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = "est";
} else {
  if (array_key_exists('btnEng', $_POST)) {
    $_SESSION['lang'] = "eng";
  } else if (array_key_exists('btnEst', $_POST)) {
    $_SESSION['lang'] = "est";
  } else if (array_key_exists('btnRus', $_POST)) {
    $_SESSION['lang'] = "rus";
  }
}

$lang = $_SESSION['lang'];

//session_start();

$termsTable = mysqli_query($connect, "SELECT * FROM `terms` where `lang` = '$lang'");
$terms = array();
while ($oneTerm = mysqli_fetch_assoc($termsTable)) {
  $terms[$oneTerm['code']] = $oneTerm['text'];
}

debug_to_console($lang);
?>
<header id="header" class="fixed-top">
  <div class="container-fluid" style="background-color:#fff;">

    <div class="row justify-content-center">
      <div class="col-xl-10 d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="index.php"><img style="height: 500px" class="logoplus" src="assets/images/logoFull.png"><span></span></a></h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="index.php" class="link-hover-top"><?php echo $terms['header_main'] ?></a></li>
            <li><a href="index.php#about"><?php echo $terms['header_about'] ?></a></li>
            <li><a href="index.php#dogs" class="link-hover-center"><?php echo $terms['header_dogs'] ?></a></li>
            <li><a href="foundhome.php" class="link-hover-center"><?php echo $terms['header_foundhome'] ?></a></li>
            <li><a href="helpdogs.php"><?php echo $terms['header_helpdogs'] ?></a>
            <li><a href="contacts.php"><?php echo $terms['header_contacts'] ?></a></li>
            <li class="drop-down"><a href=""><?php echo $terms['header_language'] ?></a>
              <ul>
                <form method="post">
                  <li><input type="submit" name="btnEng" class="button spcbtn" value="ENG" /></li>
                  <li><input type="submit" name="btnEst" class="button spcbtn" value="EST" /></li>
                  <li><input type="submit" name="btnRus" class="button spcbtn" value="RUS" /></li>
                </form>
              </ul>
            </li>
            <li><a href="https://www.instagram.com/dog_family.tln/" class="instagram"><img src="assets/images/inst.png" target="_blank" style="height:20px;"></a></li>
        </nav><!-- .nav-menu -->

        <ul>

          <ul>

      </div>
    </div>

  </div>
</header><!-- End Header -->