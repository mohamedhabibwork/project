<?php 
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');
?>

            <style>
                            body{
              background-image: url("<?= BASE_URL.'assets/'; ?>img/filmback.jpg");
              }


                .VIDEO-BOX{
                    box-shadow: 7px 10px 20px rgba(255, 255, 255, 0.11);
                    position: absolute;
                    right: 70PX;
                    top: 120px;
                    width: 800px;
                    height: 400px;
                    background-color: black;
                }
                .VIDEO-BOX video{
                    width: 100%;    
                    height: 100%;
                }

                .details-SECTION{
                    background-color: rgba(3, 0, 2, 0.521);
                    box-shadow: 5px 6px 7px rgba(255, 255, 255, 0.281);
                    text-align: center;
                    color: white;
                    position: absolute;
                    width: 350PX;
                    height: 400PX;
                    right: 900PX;
                    top: 100PX;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                .details-SECTION img{
                    width: 70%;
                    height: 70%;
                    padding: 10PX;
                }
                .details-SECTION img:hover{
                    width: 90%;
                    height: 80% ;
                    transition: width 2s, height 2s, transform 2s;
                }
                .details-SECTION span{
                    color: yellow;
                }

                .films{
                    margin-top: 500PX;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    background-color: rgba(99, 5, 5, 0.705);

                }


                .films-section{
                    background-color: rgb(95, 3, 66);
                    border: 2px dotted rgba(0, 0, 0, 0);
                    padding: 20px;
                    border-radius: 5px;
                    display: table;
                    margin: 0PX auto;

                }
                .movie-row{
                overflow: hidden;
                padding: 4px;
                top: 40px;
                }
                .movie-box{
                    overflow: hidden;
                    height: 250px;
                    width: 190px;
                    margin-left: 8px;
                    padding: 4px;
                    border: 1px dotted rgba(0, 0, 0, 0);
                    float: left;
                }

                .movie-img{
                    height: 100%;
                    width: 100%;
                    overflow: hidden;
                    transition: all 0.5s;
                    font-family: Arial, Helvetica, sans-serif;
                    

}
                footer {
                    text-align: center;
                    margin-top: 4%;
                    background-color: rgb(53, 46, 44);
                    height: 60px;
                }


            </style>
                                   
        <DIV class="VIDEO-BOX">
        <video controls src="<?= BASE_URL.'assets/'; ?>VIDEOS/The Main Event.mp4"></video>
    </DIV>

    <section class="details-SECTION">                   <h4>  The Main<span> Event</span></h4>
        <p>بعد اكتشافه لقناع سحري، يدخل مصارع طموح يبلغ من العمر 11 عامًا في مسابقة ليصبح نجم (دبليو دبليو إي) المستقبلي</p>
      </figcaption>
        
        <img src="<?= BASE_URL.'assets/'; ?>IMG/The Main Event.jpg">
        </section>

        <br><br><br>
        <div class="films"><h1>""نقتترح عليك مشاهدة هذا ايضا  "" </h1></div>
        <br>
        
        <div class="container">
       
            <section class="section1">
                    

              
                    
              <figure class="effect red">
                <img src="<?= BASE_URL.'assets/'; ?>img/bad.jpg" alt="sample43" />
                <figcaption>
                  <h4>Bad <span> boys </span> </h4>
                  <p>يعود (بيرنت)  الذى أصبح مفتشا- للعمل مع زميله القديم (لوري)  الذي يعاني من اكتئاب مرحلة منتصف العمر، بعد ان يقوم مرتزق ألباني برصد جائزة مالية لمن يأتي برأس الثنائي انتقاما لأخيه الذي قتل علي يديهما</p>
                </figcaption>
                <a href="../films/BADBOY.HTML"></a>
              </figure>
            
               <figure class="effect red">
                <img src="<?= BASE_URL.'assets/'; ?>img/like.jpg" alt="sample43" />
                <figcaption>
                  <h4>Like a   <span>Boss </span> </h4>
                  <p>تحاول فتاتين البحث عن ذاتهما من خلال إنشاء شركة للتجميل، وبينما تعشق إحداهما العمل، تعشق الأخرى المال بشكل أكبر، ولكن تظهر امرأة غنية تسعى للسيطرة عليهما واستغلال أفكارهما لمصلحتها الشخصية</p>
                </figcaption>
                <a href="../FILMS/likeabos.html"></a>
              </figure>
              <figure class="effect red">
                <img src="<?= BASE_URL.'assets/'; ?>img/The Main Event.jpg" alt="sample43" />
                <figcaption>
                  <h4>  The Main<span> Event</span></h4>
                  <p>بعد اكتشافه لقناع سحري، يدخل مصارع طموح يبلغ من العمر 11 عامًا في مسابقة ليصبح نجم (دبليو دبليو إي) المستقبلي</p>
                </figcaption>
                <a href="../FILMS/The Main Event.HTML"></a>
              </figure>
              <figure class="effect yellow"><img src="<?= BASE_URL.'assets/'; ?>img/ju.jpg" alt="sample49" />
                <figcaption>
                  <h4>Jumanji: <span>  The Next Level </span> </h4>
                  <p>يعود فريق من الأصدقاء إلى جومانجي لإنقاذ أحدهم، يحتاج اللاعبون إلى شجاعة أكبر، ويخوضوا مغامرة من الصحاري القاحلة إلى الجبال الثلجية للهروب من أخطر لعبة في العالم</p>
                </figcaption>
                <a href="../FILMS/JU.HTML"></a>
              </figure>
            
            
              <figure class="effect red">
                <img src="<?= BASE_URL.'assets/'; ?>img/TOALL.jpg" alt="sample43" />
                <figcaption>
                  <h4>To All  <span>the Boys</span></h4>
                  <p>Lara Jean and Peter have just taken their relationship from pretend to officially official when another recipient of one of her old love letters enters the picture</p>
                </figcaption>
                <a href="../films/TOALL.html"></a>
              </figure>
             
        
              <figure class="effect yellow"><img src="<?= BASE_URL.'assets/'; ?>img/littlw women.jpg" alt="sample49" />
                <figcaption>
                  <h4>Little <span>Women</span></h4>
                   <p>يروي قصة نضوج أربع شقيقات من عائلة مارش عقب الحرب اﻷهلية اﻷمريكية</p>
                </figcaption>
                <a href="../films/littlw women.html"></a>
              </figure>  









                        </section>
                    </div>
<?php
require_once($base_path.'include/footer.php');
?>