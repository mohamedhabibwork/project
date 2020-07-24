<?php
session_start();
ob_start();
//connection database
try { $GLOBALS['pdo']=new PDO("mysql:dbname=yalaforgaa;host=localhost",'root','',[ PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE=>PDO::ERRMODE_SILENT ]); }
catch (Exception $e) { exit(' database connection fail '); }
// create function
function create(string $table,string $names,string $values){
    global  $pdo;
    try { $stm=$pdo->prepare("insert into ".$table." (".$names.") VALUES (".$values.") "); return $stm->execute();}
    catch (Exception $e) { return false; }
}
// update function
function update(string $table,string $statement,int $id){
    global  $pdo;
    try { $stm=$pdo->prepare("update ".$table." SET ".$statement." WHERE id=".$id); return $stm->execute(); }
    catch (Exception $e) { return false; }
}
// delete function 
function delete(string $table,int $id){
    global  $pdo;
    try { $stm=$pdo->prepare("delete from ".$table." WHERE id=".$id); return $stm->execute(); }
    catch (Exception $e) { return false; }
}
// select function
function select(string $table,string $statement="",string $column=" * "){
    global  $pdo;
    try {
        $stm=$pdo->prepare("select ".$column." from ".$table." ".$statement);
        $stm->execute();
        return $stm->fetchAll();
    }
    catch (Exception $e) { return false; }
}

function login(string $email,string $password){
    $data=select('users'," where  email= '".$email."' AND password='".md5($password)."' ");
    if(count($data)===0){ return false; }
    $_SESSION['login']=true;
    $_SESSION['user_id']=$data[0]["id"];
    return true;
}

function redirect(string $page="pages/index.php"){ header('Location: '.BASE_URL.$page);}
function register(string $email,string $password){ return create('users',"email,password"," '".$email."' , '".md5($password)."' "); }
function emailExists(string $email){ return count(select('users',"where email='".$email."'")) > 0; }