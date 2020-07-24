<?php 
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');
if ($_SERVER['REQUEST_METHOD']==="POST") {
    $email=strip_tags($_POST['email']);
    $password=$_POST['password'];
    if (login($email,$password)) {
        header('location:index.php');
    }else{
        $errors['email']=" email or password is wrong ";
    }
    
}

?>
    
    <style>
        body{ background-image: url('<?= BASE_URL . 'assets/img/background.png' ?>');}
        .menu-item-now {
        background-color: rgba(59, 5, 17, 0.493);
        display: inline-block;
        padding: 15px 10px ;
        height: 30px;
        line-height: 30px;
        color: #fff;
        text-decoration: none;
    }


    .welcome-msg{
    text-align: center;
    font-family: "AlGhadTV Regular" ;
    color: #e2ce19;
    font-size: 30PX;
    margin-bottom: center;
}
.animate-logo{
    margin-right: 25% ;
        width:300px;
   
}
.center-section{
    width: 600px;
    height: 480px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 100px;      
}

#sign-data{
    list-style: none;
    color: #fff;
    display: inline-block;
    padding: 12px;
    text-align: right;
    margin: 8px;
}

#adsection-left{

        position: absolute;
        left: 24px;
        top: 80PX;
        width: 260px;
        height: 478px;     
}
#adsection-right{
        position: absolute;
        left: 75.5%;
        top: 80PX;
        width: 260px;
        height: 478px;
        z-index: 4;
}
#adsection-left img{
    width: 100%;
    height: 100%;
}
#adsection-right img{
    width: 100%;
    height: 100%;
}



   /*-------------------*/

   .minisection {
    margin-top: 8px;
    background-color: #250116;
    border-radius: 30px;
    border: 2px solid rgba(238, 226, 226, 0.63);
    width: 490px;

        display: block;
        width:95%;

        padding: 0%;
        float: right;

        transition: all 1.1s;
        transform-style: preserve-3d;
        overflow: hidden;
        text-align: center;

}

section{
    
    border-radius: 15px; 
}
   input[name="email"] , input[name="password"]{
          color:white;
          margin: 20px 15px;
          padding-left:5px;
          font-size:16px;
          line-height:40px;
          text-transform: lowercase;
          background:transparent;
          text-align: center;
          border-radius:10px;
   
      }
      input[name="email"]:hover , input[name="password"]:hover{
          border:1px solid #068; 
          border-radius: 5px;
          transition:all .6s ease-in-out;
      }
      input::placeholder{
          color:rgba(240, 240, 240, 0.822);
          padding-left:18px;
          font-weight: 600;
          opacity:.7;
      }
      .button {
          color:#fff;
          margin:0 30px;
          padding:9px 80px;
          font-size:22px;
          font-weight: 600;
          border:none;
          border-radius:10px;
          background: linear-gradient(100deg,#1e4c97,#6f23b6);
          transition:all .7s ease-in-out;
      }
      .button:hover{
          cursor:pointer;
          border-radius:50px 4px 50px;
          background: linear-gradient(45deg,#2d0355,#5185da);
          transition:all .7s ease-in-out;
      }
      
      .transition{
          display: block;
          color: rgb(235, 235, 6);
          margin:25px 0 ;
          font-size:19px;
          font-weight:550;
          text-align: center;
          border-bottom:3px solid transparent;
      }
      .transition:hover{
          color:  #514bce;
          cursor: pointer;
      }


    .txtbox::placeholder{
        color: rgba(8, 0, 0, 0.767);
    }

    </style>    


        <section class="center-section">

         
            <div class="animate-logo"> <img src="<?= BASE_URL.'assets/'; ?>img/xz.gif"></div>
             <DIV class="welcome-msg"> ........ أهلا بعودتك من جديد ........</DIV>
             
         <section class="minisection">
        
            <form method="post" action="./login.php">
                <input type="email" minlength="5" required name="email" placeholder="Email" ><br>
                <?= (isset($errors) && isset($errors['email']))?' <div style="color:red">'.$errors['email'].' </div><br/> ':'' ?>
                <input type="Password" minlength="8" required name="password" placeholder="Password"><br>
                <?= (isset($errors) && isset($errors['password']))?' <div style="color:red">'.$errors['password'].' </div> ':'' ?>
                <input type="Submit" value="Login" class="button">
                
                <a class ="transition" href="<?= BASE_URL.'pages/'; ?>regester.php"> Create Account </a> 
                
                </form>
 
     <section id="adsection-left">
        <img src="<?= BASE_URL.'assets/'; ?>img/left adv.gif">
    </section>
    <section id="adsection-right">
        <img src="<?= BASE_URL.'assets/'; ?>img/left adv.gif">
    </section>
</section>
<?php require_once($base_path.'include/footer.php'); ?>