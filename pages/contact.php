<?php 
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');

?>

<style>
.menu-item-now{background-color:rgba(59,5,17,.493);display:inline-block;padding:15px 10px;height:30px;line-height:30px;color:#fff;text-decoration:none}
.main_section{border-style:solid;border-width:5px;border-color:#9b036b;border-radius:10px;background-color:rgba(107,4,62,.466);position:absolute;left:40px;top:104px;
    width:1200px;height:390px;z-index:3}
.face{position:absolute;left:140px;top:110px;width:152px;height:158px;z-index:7;transition:all 1s ease-in-out}
.face:hover{transform:rotate(360deg)}
.whats{position:absolute;left:340px;top:110px;width:152px;height:158px;z-index:6;transition:all 1s ease-in-out}
.whats:hover{transform:rotate(360deg)}
.twetter{position:absolute;left:539px;top:110px;width:152px;height:158px;z-index:5;transition:all 1s ease-in-out}
.twetter:hover{transform:rotate(360deg)}
.insta{position:absolute;left:736px;top:110px;width:152px;height:158px;z-index:4;transition:all 1s ease-in-out}
.insta:hover{transform:rotate(360deg)}
.gmail{position:absolute;left:933px;top:110px;width:152px;height:158px;z-index:5;transition:all 1s ease-in-out}
.gmail:hover{transform:rotate(360deg)}
.main_section h4{text-align:center;MARGIN-top:28%;color:#d0ff00;font-size:larger;font-family:Arial,Helvetica,sans-serif}
body{background-image:url("<?= BASE_URL.'/assets/img/background.png' ?>")}


</style>

        <section class="main_section">
            <div class="face"><a target="blank" href="https://www.facebook.com/YalaForga-website-112326810431002/"><img src="<?= BASE_URL.'assets/'; ?>img/f.png" ></a></div>
            <div class="whats"><a href="https://chat.whatsapp.com/K7aAYnc5e073wzJzuT0hK3" target="blank"><img src="<?= BASE_URL.'assets/'; ?>img/w.png" ></a></div>
            <div class="twetter"><a href="https://twitter.com/ForgaYala" target="blank"><img src="<?= BASE_URL.'assets/'; ?>img/t.png" ></a></div>
            <div class="insta"><a  href="https://www.instagram.com/yalaforga/"target="blank" ><img src="<?= BASE_URL.'assets/'; ?>img/i.png"></a></div>
            <div class="gmail"><a href="mailto:yalaforga@gmail.com"><img src="<?= BASE_URL.'assets/'; ?>img/g.png" ></a></div>
            <h4>يتم إدارة هذا الموقع من خلال اعضاء المجموعة رقم 4 بالمعهد العالى للحاسبات  ونظم المعلومات الادارية بالتجمع الاول ,, للتواصل عن طريق الهاتف 01229253356</h4>
        </section>

<div style="min-height: 850px;"></div>
<?php require_once($base_path.'include/footer.php'); ?>