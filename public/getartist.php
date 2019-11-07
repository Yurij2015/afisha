<?php
require_once "../DbConnect.php";
require_once "../dbsettings.php";
require_once "Artist.php";

$db = new DbConnect($host, $user, $db, $pass);
$artists = $db->connect()->query("SELECT * FROM artists");
if ($artists) {
    foreach ($artists as $row) {
        $artist = new Artist($row['name'], $row['description']);
        echo $artist->name();
        echo $artist->description();
    }
}
