<?php 
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');
?>
<style>
     
     .menu-item-now{background-color:rgba(59,5,17,.493);display:inline-block;padding:15px 10px;height:30px;line-height:30px;color:#fff;text-decoration:none}
body{background-image:url('<?= BASE_URL.'assets/'; ?>img/Aboutbackground.jpg');background-size:100%}
.STRAP{background-color:rgba(119,7,13,.774);position:absolute;left:12px;top:540px;width:100%;text-align:center;color:#e7d0e2;font-family:Arial,Helvetica,sans-serif}
.main-section{border-width:5.556px;border-color:#67002a;border-style:solid;
    border-radius:23px;background-color:#040000;position:absolute;left:12px;top:600px;width:1250px;height:128.888px;z-index:6}
.main-section img{padding:6px;padding-top:20px;height:90px}
span{color:#fff;font-family:conan}
h4{color:#ff0;font-family:conan;font-size:x-large}

        
</style>    

<DIV class="STRAP">
    <h1>مشروع تخرج مجموعة رقم (4) شعبة نظم معلومات ادارية</h1>
</DIV>

<section class="main-section">
    <img src="<?= BASE_URL.'assets/'; ?>img/names.png">
</section>
<div style="min-height: 850px;"></div>
<?php
require_once($base_path.'include/footer.php');
?>