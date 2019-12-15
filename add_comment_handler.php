<?php
require_once "DbConnect.php";
require_once "dbsettings.php";
$authorname = trim(htmlspecialchars($_POST['authorname']));
$content = $_POST['content'];

if (!empty($date) && !empty($time) && !empty($duration) && !empty($repertoire_idrepertoire)) {
    try {
        $db = new DbConnect($host, $user, $db, $pass);
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
    $timetable = $db->connect()->query("INSERT INTO timetable (`date`, `time`, `duration`, `repertoire_idrepertoire`) VALUES ('{$date}','{$time}','{$duration}', '{$repertoire_idrepertoire}')");
    $db = null;
    header('location: comments.php.php?msg=Отзыв добавлен.');
} else {
    echo 'Empty';
}

