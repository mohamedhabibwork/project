<?php
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');

if (isset($_SESSION['login']) && $_SERVER['REQUEST_METHOD']==="POST" && count($film=select('films','where id ='.($_GET['id'] ?? 0)))>0 && delete('films', (int) $_GET['id']));

if (!isset($_GET['id']) || count($film=select('films','where id ='.($_GET['id'] ?? 0))) === 0){ redirect('pages/index.php');}
$film=$film[0];

?>
<style>
body{background-image:url("<?= BASE_URL.'assets/'; ?>img/filmback.jpg")}
.VIDEO-BOX{box-shadow:7px 10px 20px rgba(255,255,255,.11);position:absolute;right:70PX;top:120px;width:800px;height:400px;background-color:#000}
.VIDEO-BOX video{width:100%;height:100%}
.details-SECTION{background-color:rgba(3,0,2,.521);box-shadow:5px 6px 7px rgba(255,255,255,.281);text-align:center;color:#fff;position:absolute;width:350PX;height:400PX;right:900PX;
  top:100PX;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif}
.details-SECTION img{width:70%;height:70%;padding:10PX}
.details-SECTION img:hover{width:90%;height:80%;transition:width 2s,height 2s,transform 2s}
.details-SECTION span{color:#ff0}
.films{margin-top:500PX;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;background-color:rgba(37,2,26,.5)}
section{background-color:rgba(37,2,26,.5);box-shadow:5px 6px 7px rgba(255,255,255,.301);padding:15px;padding-top:1px;padding-bottom:4px;border-radius:5px;max-height:550px;margin:20px;
  overflow:hidden}
figure.effect{font-family:HAND;color:#fff;position:relative;overflow:hidden;background-color:rgba(37,2,26,.5);margin:10px;height:250px;width:15%;text-align:center;float:right}
figure.effect *{-webkit-box-sizing:padding-box;box-sizing:padding-box;-webkit-transition:all .3s ease-out;transition:all .3s ease-out}
figure.effect img{opacity:1;width:100%}
figure.effect figcaption{top:50%;left:40px;right:40px;position:absolute;-webkit-transform:translateY(-50%);transform:translateY(-50%)}
figure.effect figcaption h4{position:relative;font-weight:400;text-transform:uppercase;margin:0;-webkit-transform:translateY(70%);transform:translateY(70%);opacity:0}
figure.effect figcaption h4 span{font-weight:800}
figure.effect figcaption p{font-size:.6em;font-weight:500;opacity:0;margin:0}
figure.effect:after,figure.effect:before{position:absolute;top:20px;right:20px;bottom:20px;left:20px;content:'';opacity:0;-webkit-transition:opacity .6s,-webkit-transform .6s;
  transition:opacity .6s,-webkit-transform .6s,-moz-transform .6s,-o-transform .6s,transform .6s}
figure.effect:before{border-top:1px double #fff;border-bottom:1px double #fff;-webkit-transform:scale(0,1);transform:scale(0,1)}
figure.effect:after{border-right:1px double #fff;border-left:1px double #fff;-webkit-transform:scale(1,0);transform:scale(1,0)}
figure.effect a{left:0;right:0;top:0;bottom:0;position:absolute;z-index:1}
figure.effect{background:rgba(155,3,107,.2)}
figure.effect.hover img,figure.effect:hover img{opacity:.2;-webkit-filter:blur(5px);filter:blur(5px);-webkit-transform:scale(1.1);transform:scale(1.1)}
figure.effect.hover figcaption h4,figure.effect.hover figcaption p,figure.effect:hover figcaption h4,figure.effect:hover figcaption p{opacity:1;border-color:rgba(255,255,255,.5);
  -webkit-transition-delay:.2s;transition-delay:.2s;-webkit-transform:translateY(0);transform:translateY(0)}
figure.effect.hover figcaption p,figure.effect:hover figcaption p{-webkit-transition-delay:.3s;transition-delay:.3s}
figure.effect.hover:after,figure.effect.hover:before,figure.effect:hover:after,figure.effect:hover:before{opacity:.8;-webkit-transform:scale(1);transform:scale(1)}
.footer{background-color:rgba(35,35,35,.7);color:#dfd7d7;padding:10px 0;overflow:hidden;width:auto;text-align:center;height:98px}
.footer h2 a{color:#fff;text-decoration:none}
.footer .copyright{margin-top:20px;float:left}
.footer .copyright span{color:#9b036b}
</style>            
    <DIV class="VIDEO-BOX">
        <video controls src="<?= BASE_URL.$film['video']; ?>"></video>
        <?php
            if (isset($_SESSION['login'])){
              echo  ' <form action="?id='.$film['id'].'" method="post"><button type="submit" style="color: white;background-color: crimson;font-size:24px;padding: 5px;border: 0;">حذف</button></form> ';
            }
        ?>
        <hr>

    </DIV>

    <section class="details-SECTION"> <h4><?= $film['name'] ?> </h4>
        <p> <?= $film['description'] ?> </p>
        
        <img src="<?= BASE_URL.$film['photo']; ?>">
        </section>
        <br><br><br>
        <div class="films"><h1>""نقتترح عليك مشاهدة هذا ايضا  "" </h1></div>
        <br>
        <div class="container">
            <section class="section1">
                <?php
                foreach (select('films',' where type='.$film['type'].' and where not in ('.$film['id'].') order by id desc ') as $item) {
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