<?php

function getDatabase(){
    try{
        $db = new PDO(
            'mysql:host=127.0.0.1:3306;dbname=u998831891_cv_alternance;charset=utf8',
            'u998831891_rakulan_altern',
            'Esgi2023',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
    catch (Exception $e){
        die("failed to connect to the database !\n errors : " . $e->getMessage());
    }
    return $db;
}

if (!isset($_POST['name']) || empty($_POST['name']) || !isset($_POST['email']) || empty($_POST['email'])){

    header('location: error.php');

}

$db = getDatabase();

