<?php
require_once "../DbConnect.php";
require_once "../dbsettings.php";
require_once "Artist.php";

try {
    $db = new DbConnect($host, $user, $db, $pass);
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
$artists = $db->connect()->query("SELECT * FROM artists ORDER BY idartist DESC ");
if ($artists) {
    foreach ($artists as $row) {
        $artist = new Artist($row['name'], $row['description']);
        echo $artist->name();
        echo $artist->description();
        echo '<a href="' . $row['idartist'] . '" class="small">Редактировать</a><hr>';
    }
}
$db = null;
