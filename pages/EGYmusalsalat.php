<?php 
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');
?>


<style>
body{background-image:url("<?= BASE_URL.'assets/'; ?>img/filmback.jpg")}
.menu-item-now{background-color:rgba(59,5,17,.493);display:inline-block;padding:15px 10px;height:30px;line-height:30px;color:#fff;text-decoration:none}
section{text-align:center;width:1000px;height:400px;margin:auto;margin-bottom:30px;padding:15px;padding-top:1px;border-radius:5px}
figure.effect{width:25%;height:350px;margin:40px}

</style>
    <br><br><br>
        <div class="films"><h1> افلام مصرى  </h1></div>
<br>
<div class="container">
       
    <section class="section">
        <?php
        foreach (select('films',' where  type=2 order by id desc ') as $item) {
            echo '<figure class="effect red">
                      <img src="'.BASE_URL.$item['photo'].'" alt="sample43" />
                      <figcaption>
                        <h4>'.$item['name'].'</h4>
                        <p>'.$item['description'].'</p>
                      </figcaption>
                      <a href="'.BASE_URL.'pages/BADBOY.php?id='.$item['id'].'"></a>
                    </figure>';
        }

        ?>

    </section>
</div>

<?php
require_once($base_path.'include/footer.php');
?>