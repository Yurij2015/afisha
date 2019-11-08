<?php
require_once "../DbConnect.php";
require_once "../dbsettings.php";
//require_once "Artist.php";
$name = trim(htmlspecialchars($_POST['name']));
$description = trim(htmlspecialchars($_POST['description']));

if (!empty($name) && !empty($description)) {
    try {
        $db = new DbConnect($host, $user, $db, $pass);
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
    $artists = $db->connect()->query("INSERT INTO artists (`name`, `description`) VALUES ('{$name}','{$description}')");
    $db = null;
    echo 'Готово!';
} else {
    echo 'Было пусто';
}


