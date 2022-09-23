<?php
session_start();

require __DIR__ . "/../../source/Boot/config.php";
require __DIR__ . "/../../source/autoload.php";

$db =  Source\Database\Connect::getInstance();

$name = $_POST['name'];
$contact = $_POST['contact'];
$modality = $_POST['modality'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$city = $_POST['city'];

$insert = "INSERT INTO teams (team_name, contact, modality, gender, state, city) 
           VALUES ('{$name}','{$contact}','{$modality}','{$gender}','{$state}','{$city}')";

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

header('Location: panelfront.php');
?>

