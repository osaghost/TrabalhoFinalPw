<?php
session_start();

require __DIR__ . "/../../source/Boot/config.php";
require __DIR__ . "/../../source/autoload.php";

$db =  Source\Database\Connect::getInstance();

$name = $_POST['name'];
$usuario = $_POST['user'];
$password = $_POST['password'];
$lastupdated = date('Y-m-d H:i:s');

$insert = "INSERT INTO user (name, user, password, date_time) 
           VALUES ('{$name}','{$usuario}','{$password}','$lastupdated')";

try{
    $query = $db->query($insert);
    var_dump(
        $query,
        $db->lastInsertId(),
        $query->errorInfo()
    );
}catch (PDOException $exception) {
    var_dump($exception);
}

header('Location:loginto.php');


