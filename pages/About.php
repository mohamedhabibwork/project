<?php 
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');
?>
<style>
            .menu-item-now {
        background-color: rgba(59, 5, 17, 0.493);
        display: inline-block;
        padding: 15px 10px ;
        height: 30px;
        line-height: 30px;
        color: #fff;
        text-decoration: none;
    }

    body {
                background-image: url('<?= BASE_URL.'assets/'; ?>img/Aboutbackground.jpg');
                background-size: 100%;

                }

                .STRAP{
                    background-color:rgba(119, 7, 13, 0.774); ;
                    
                    position: absolute;
                    left: 12px;
                    top: 540px;
                    width: 100%;
                    text-align: center;
                    color: rgb(231, 208, 226);
                    font-family: Arial, Helvetica, sans-serif;


                }
                .main-section {
                    border-width: 5.556px;
                    border-color: rgb(103, 0, 42);
                    border-style: solid;
                    border-radius: 23px;
                    background-color: rgb(4, 0, 0);
                    position: absolute;
                    left: 12px;
                    top: 600px;
                    width: 1250px;
                    height: 128.888px;
                    z-index: 6;
}
                .main-section img {
                    padding: 6px;
                    padding-top: 20px;
                    height: 90px;
                }
                span{
                 color: #fff;    
                font-family: conan; 
            /* font-size: xx-large; */  
        }
                    h4{
                        color: yellow;
                        font-family: conan; 
                        font-size: x-large;  
                    }

        
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