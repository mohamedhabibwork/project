<?php
require_once($base_path.'helpers/config.php'); 
?>

<!DOCTYPE html>
<html dir="rtl">
    <head>
        <title> YALA FORGA <?= isset($title)? (' - '.$title):'' ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL.'assets/'; ?>style.css">
        <link rel="shortcut icon" href="<?= BASE_URL.'assets/'; ?>video.svg" type="image/x-icon" />   


 </head>
      

    <body>
        <nav class="menu">

          <div><a href="<?= BASE_URL.'pages/'; ?>index.php"><img src="<?= BASE_URL.'assets/'; ?>img/logo.png" class="MYlogo"></a>
            <div id="logo">YALAFORGA</div>
            <a target="blank" href="https://www.facebook.com/YalaForga-website-112326810431002/"><img src="<?= BASE_URL.'assets/'; ?>img/fb.png" class="facebook"></a>
          </div>
          

          <ul id="rmenu">
            <?php
            if (isset($_SESSION['login'])) {
                echo '<li><a class="menu-item" href="'.(BASE_URL).'pages/logout.php" > تسجيل الخروج </a> </li>';
            
            }else{
                echo '<li><a class="menu-item" href="'.BASE_URL.'pages/login.php" > تسجيل الدخول </a> </li>';
            }
            ?>
              <li><div class="search-button" ><button type="button" onclick="searchForm.submit()" >إ بـحـث</button></div>
              </li>
              <li><div class="txtbox"><form action="<?= BASE_URL.'pages/'; ?>index.php" name="searchForm" method="get"> <input name="search"  type="text" placeholder="Search.."/> </form> 
            </div></li>

              <li><a class="menu-item" href="contact.php"> تواصل معنا </a></li>
              <li><a class="menu-item" href="About.php"> من نحن  </a></li>
              <li><p class="menu-item"> افلام </p>
                  <div class="sub-content">
                      <div class="sub-drop">
                      <ul >
                                  <li><a href="<?= BASE_URL.'pages/'; ?>ARFILMS.php">افلام عربى  </a> </li>
                                  <li><a href="<?= BASE_URL.'pages/'; ?>ENFILMS.php">افلام أجنبى </a></li>
                                  <li><a href="<?= BASE_URL.'pages/'; ?>cartoon.php">افلام كرتون </a></li>
                                  <li><a href="<?= BASE_URL.'pages/'; ?>EGYmusalsalat.php">افلام مصرى  </a> </li>
                                  <li><a href="<?= BASE_URL.'pages/'; ?>INDImusalsalat.php">افلام هندى </a></li>
                                  <li><a href="<?= BASE_URL.'pages/'; ?>TURmusalsalat.php">افلام تركى </a></li>
                              </ul>
                          </div>    
                      </div>
                  </li>
                      </ul>
      </nav>