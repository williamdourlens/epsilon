<?php
if(isset($env)){
    if($env == 'test'){
    }
    elseif($env == 'prod'){
    }
}
else{
    $db = new PDO('mysql:host=localhost;dbname=pictiokrecette;charset=utf8', 'root', '');
    // PHP 7.3.8

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
?>