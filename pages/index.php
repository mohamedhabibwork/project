<?php 
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');

require_once($base_path.'include/header.php');
?>
<style>
body{
    background-image: url("<?= BASE_URL.'/assets/img/background.png' ?>");
}
</style>
        
<div class="cycle-slideshow" 
data-cycle-speed="1200" 
data-cycle-timeout="900" 
data-cycle-fx='scrollHorz'
data-cycle-pause-on-hover='true'
>

        <!------start controlers ------>
        <span class="cycle-prev"><img src="<?= BASE_URL.'assets/'; ?>img/prev.png"></span>
        <span class="cycle-next"><img src="<?= BASE_URL.'assets/'; ?>img/next.png"></span>
        <span class="cycle-pager"></span>

        <img src="<?= BASE_URL.'assets/'; ?>img/1.jpg" alt="adv1"  >
        <img src="<?= BASE_URL.'assets/'; ?>img/2.jpg" alt="adv1" >
        <img src="<?= BASE_URL.'assets/'; ?>img/3.jpg" alt="adv1" >
        <img src="<?= BASE_URL.'assets/'; ?>img/4.jpg" alt="adv1" >
        <img src="<?= BASE_URL.'assets/'; ?>img/5.jpg" alt="adv1" >
    </div>

    <div class="advideos">
          <video   autoplay loop controls playsinline muted >  
        <source src="<?= BASE_URL.'assets/'; ?>videos/THE BLACKOUT INVASION EARTH Official Trailer (2020) Action, Sci-Fi Movie.mp4" type="video/mp4">

</video>  
</div>


<!-------------end img slidwe-------------> 

<br><br><br>
<div class="films"><h1>أحدث الافلام والمسلسلات </h1></div>
<br>











<div class="container">
       
    <section class="section1">
        <?php
        $searchAll=select('films',' where name like "%'.($_GET['search'] ??'').'%" order by id desc ');
        if (count($searchAll)===0) {
         echo "<h2 style='color:red' align='center'> لا يوجد اي نتائج </h2>";
        }
        foreach ($searchAll as $item) {
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
  
    <div class="smallad" > <img src="<?= BASE_URL.'assets/'; ?>img/ad3.gif" alt="اعلان" ></div>
  <?php
  foreach ([1,2,3,4,5,6] as $i) {
      $reslut=select('films',' where type='.$i.' order by id desc ');
      if (count($reslut)>0) {
        echo '<section>';
        foreach ($reslut as $item) {
          echo '<figure class="effect red">
                  <img src="'.BASE_URL.$item['photo'].'" alt="sample43" />
                  <figcaption>
                    <h4>'.$item['name'].'</h4>
                    <p>'.$item['description'].'</p>
                  </figcaption>
                  <a href="'.BASE_URL.'pages/BADBOY.php?id='.$item['id'].'"></a>
                </figure>';
      }

      echo '</section><div class="smallad"> <img src="'.BASE_URL.'assets/img/AD2.gif" alt="اعلان" ></div>';
      }


    }

       $reslut=select('films',' where type=2 order by id desc ');
       if (count($reslut)>0) {
         echo '<section>';
         foreach ($reslut as $item) {
           echo '<figure class="effect red">
                   <img src="'.BASE_URL.$item['photo'].'" alt="sample43" />
                   <figcaption>
                     <h4>'.$item['name'].'</h4>
                     <p>'.$item['description'].'</p>
                   </figcaption>
                   <a href="'.BASE_URL.'pages/BADBOY.php?id='.$item['id'].'"></a>
                 </figure>';
       }
       echo '</section><div class="smallad"> <img src="'.BASE_URL.'assets/img/AD2.gif" alt="اعلان" ></div>';
       }
      ?>


  </div>
  
  













<!--Start Footer-->

<?php
require_once($base_path.'include/footer.php');
?>