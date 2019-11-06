<?php
echo "online service";

require_once "DbConnect.php";
require_once "Category.php";

$db = new DbConnect("localhost", "root", "zazu", "");
$db->connect();


if ($db->connect()) {
    echo "<p>есть контакт</p>";
}

$category = $db->connect()->query("SELECT * FROM category");
foreach ($category as $row) {
    $style = new Category($row['Name'], $row['Description']);
    echo $style->name();
    echo $row['Description'];
}