<?php
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'include/header.php');
if (!$_SESSION['login']) {
    redirect('pages/index.php');
}
if ($_SERVER['REQUEST_METHOD']==="POST") {
    $name=strip_tags($_POST['name'] ?? '');
    $type=strip_tags($_POST['type'] ?? '');
    $description=strip_tags($_POST['description'] ?? '');
    $year=floatval($_POST['year'] ?? date('Y'));

    foreach (['name','type','description','year'] as  $item)  if (empty($$item)) $errors[$item]=$item." is empty ";


    $errors= array();
    $file_name_photo = uniqid('photo',false).$_FILES['photo']['name'];
    $file_tmp = $_FILES['photo']['tmp_name'];

    if(empty($errors)==true) $photo=move_uploaded_file($file_tmp,str_replace('\\', '/', dirname(__DIR__).'\assets\photos\\').$file_name_photo);


    $file_name_video = uniqid('video',false).$_FILES['video']['name'];
    $file_tmp = $_FILES['video']['tmp_name'];

    if(empty($errors)==true)  $video=move_uploaded_file($file_tmp,str_replace('\\', '/', dirname(__DIR__).'\assets\videos\\').$file_name_video);

    if (!empty($file_name_photo) && !empty($file_name_video)){
        if (create('films', ' name,video,photo,description,type,year,user_id', " '$name','assets/videos/$file_name_video','assets/photos/$file_name_photo','$description','$type' ,$year,".$_SESSION['user_id'])){
            $message=" film added success ";
            redirect('pages/index.php');
        }else{
            $errors['name']=" not added ";
        }
    }
}

?>


        <style>
        body{ background-image: url("<?= BASE_URL.'assets/'; ?>img/filmback.jpg"); }
        .menu-item-now {
        background-color: rgba(59, 5, 17, 0.493);
        display: inline-block;
        padding: 15px 10px ;
        height: 30px;
        line-height: 30px;
        color: #fff;
        text-decoration: none;
    }
    
        section {
            text-align: center;
            width: 1000px;
            min-height: 400px;
            margin:  30px auto;
            padding:1px 15px 15px  ;
            border-radius: 5px;

        }
        .section input , .section select{
            border: 0;
            padding: 5px;
            width: 50%;
            margin: 5px;
            font-size:14px;
            border-radius:10px;
        }
        .section textarea{
            width: 50%;
            border: 0;
            resize: none;
        }
        .section button{
            padding: 5px;
            border:0 ;
            font-size:20px;
        }
        .section button:hover{
            background-color: rgb(155, 3, 107);
            color: white;
        }
        </style>
    
        <div class="container">
            <br> <br> <br>
            <div class="films"> <h1> انشاء فديو </h1> </div>

            <section class="section">
                <?= isset($message)?"<div style='color: green'> ".$message." </div>":"" ?>
                <form action="./create_movie.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="name">اسم الفديو</label>
                        <input type="text" class="form-control" required minlength="3" name="name" id="name" placeholder="اسم الفديو"/>
                        <?= (isset($errors) && isset($errors['name']))?' <div style="color:red">'.$errors['name'].' </div><br/> ':'' ?>
                    </div>

                    <div class="form-group">
                        <label for="video">الفديو</label>
                        <input type="file" accept="video/*" class="form-control" required name="video" id="video"/>
                        <?= (isset($errors) && isset($errors['video']))?' <div style="color:red">'.$errors['video'].' </div><br/> ':'' ?>
                    </div>

                    <div class="form-group">
                        <label for="photo">الصورة</label>
                        <input type="file" accept="image/*" class="form-control" required name="photo" id="photo"/>
                        <?= (isset($errors) && isset($errors['photo']))?' <div style="color:red">'.$errors['photo'].' </div><br/> ':'' ?>
                    </div>

                    <div class="form-group">
                        <label for="description">الوصف</label>
                        <textarea  class="form-control" required rows="5" minlength="3" name="description" id="description"></textarea>
                        <?= (isset($errors) && isset($errors['description']))?' <div style="color:red">'.$errors['description'].' </div><br/> ':'' ?>
                    </div>
                    <div class="form-group">
                        <label for="type">نوع الفديو</label>
                        <select class="form-control" required name="type" id="type">
                            <option value="1">افلام هندي</option>
                            <option value="2">افلام مصري</option>
                            <option value="3">افلام تركي</option>
                            <option value="4">افلام عربي</option>
                            <option value="5">افلام اجنبي</option>
                            <option value="6">افلام كرتون</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="year">السنه</label>
                        <input type="number" maxlength="4" minlength="4" min="1800" max="2200" class="form-control" name="year" value="<?= date('Y') ?>" id="year"/>
                    </div>

                    <button type="submit" class="btn btn-primary">اضافه فديو</button>
                </form>


            </section>
        </div>

<?php
require_once($base_path.'include/footer.php');
?>