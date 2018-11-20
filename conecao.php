<?php
$host = "127.0.0.1";
$user = "root";
$pw = "";
$db = "a_projeto";
$connect = new mysqli($host, $user, $pw, $db);
if($connect->connect_error){
    die("conection failed: ".$connect->connect_erro);
}else{
    //echo "coneção realizada com sucesso!!!";
    $connect->set_charset("utf8");
}return $connect;
?>