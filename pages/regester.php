<?php 
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');
if ($_SERVER['REQUEST_METHOD']==="POST") {
    $email=strip_tags($_POST['email']); $password=$_POST['password']; $password_2=$_POST['password_2'];
    global $pdo;
if ($password !==$password_2) {$errors['password_2']=" password not match ";}
elseif(emailExists($email)){$errors['email']=" email already exists ";}
elseif (register($email,$password)) { redirect('pages/login.php');}
else{ $errors['email']=" somting is wrong ";}}
?>
<style>
.menu-item-now{background-color:rgba(59,5,17,.493);display:inline-block;padding:15px 10px;height:30px;line-height:30px;color:#fff;text-decoration:none}
.welcome-msg{text-align:center;font-family:"AlGhadTV Regular";color:#83b3e0;font-size:20PX;margin-bottom:center}
.animate-logo{margin-right:33%;width:220px}
.center-section{width:600px;height:530px;margin-left:auto;margin-right:auto;margin-top:100px}
#sign-data{list-style:none;color:#fff;display:inline-block;padding:12px;text-align:right;margin:8px}
#adsection-left{position:absolute;left:24px;top:80PX;width:260px;height:530px}
#adsection-right{position:absolute;left:75.5%;top:80PX;width:260px;height:530px;z-index:4}
#adsection-left img{width:100%;height:100%}
#adsection-right img{width:100%;height:100%}
.regstor{margin-top:5px;background-color:#250116;border-radius:30px;border:2px solid rgba(238,226,226,.63);display:block;width:95%;margin:3%;padding:0;float:right;height:83%;transition:all 1.1s;transform-style:preserve-3d;overflow:hidden;text-align:center;border-radius:10px}
.regstor h1{margin:10px auto 12px;font-size:30px;color:#e7da1d}
.regstor h1 span{color:#e9e6eb;font-size:35px;border-bottom:3px solid #6c63ff}
input{margin:15px 15px 10px 15px;padding:0 7px;font-size:16px;line-height:30px;border-radius:20px;border:2px solid transparent;box-shadow:0 4px 6px rgba(0,0,0,.5);background:#f3f3f3;transition:all .5s ease-in-out}
input:hover{transform:translate(-5px,-5px)}
input{margin:30px 0 0 20px}
.r{color:#06051d;font-size:30px;letter-spacing:1px}
.button2{margin:15px 28%;color:#fff;padding:7px 80px;font-size:22px;font-weight:600;border:none;border-radius:10px;background:linear-gradient(100deg,#1e4c97,#6f23b6);transition:all .7s ease-in-out}
.button2:hover{background:linear-gradient(45deg,#2d0355,#5185da);cursor:pointer;border-radius:50px 4px 50px;background:linear-gradient(45deg,#2d0355,#5185da);transition:all .7s ease-in-out}
.transition2{margin:10px 10px 15px 15px;color:#f1eeee;text-align:left;font-weight:500;display:block;color:#dacc10;margin:5px 0;font-size:19px;text-align:center;border-bottom:3px solid transparent}
.transition2:hover{color:#eef4f7;cursor:pointer}
.r{color:wheat;font-size:30px;letter-spacing:1px}
.m{margin:10px 10px 15px 15px;width:20px}
.txtbox ::placeholder{color:rgba(8,0,0,.767)}
</style>    
        <section class="center-section">
            <div class="animate-logo"> <img src="<?= BASE_URL.'assets/'; ?>img/xz.gif"></div>
             <form action="./regester.php" method="POST" class="regstor">
                <h1>sign <span>in</span>...</h1>
                <input type="email" required minlength="8" name="email" placeholder=" Email" ><br>
                <?= (isset($errors) && isset($errors['email']))?' <div style="color:red">'.$errors['email'].' </div> ':'' ?>
                <input type="password" required minlength="8" name="password" placeholder="Password"> <br>
                <?= (isset($errors) && isset($errors['password']))?' <div style="color:red">'.$errors['password'].' </div> ':'' ?>
                <input type="password" required minlength="8" name="password_2" placeholder="Enter Password again "><br> 
                <?= (isset($errors) && isset($errors['password_2']))?' <div style="color:red">'.$errors['password_2'].' </div> ':'' ?>
               <input type="submit"value="Register" class="button2"><br> 
               <a class ="transition2" href="login.php"> Back login </a> </label>
            </form>
<section id="adsection-left"><img src="<?= BASE_URL.'assets/'; ?>img/left adv.gif"> </section> <section id="adsection-right"> <img src="<?= BASE_URL.'assets/'; ?>img/left adv.gif"> </section>
<?php require_once($base_path.'include/footer.php'); ?>             