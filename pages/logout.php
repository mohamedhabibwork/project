<?php
define('BASE_URL',$_SERVER['HTTP_HOST']=='localhost'?'http://localhost/yalaforgaa/':($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER['HTTP_HOST'].'/');
$base_path=str_replace('\\','/',dirname(__DIR__).'/');
require_once($base_path.'helpers/config.php');
session_destroy();
redirect('pages/login.php');