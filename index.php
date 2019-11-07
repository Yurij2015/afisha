<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
    echo "online service";
    require_once "DbConnect.php";
    require_once "Category.php";
    $db = new DbConnect("localhost", "afisha", "afisha", "3004917779");
    $db->connect();
    if ($db->connect()) {
        echo "<p>есть контакт</p>";
    }
    $category = $db->connect()->query("SELECT * FROM category");
    if ($category) {
        foreach ($category as $row) {
            $style = new Category($row['Name'], $row['Description']);
            echo $style->name();
            echo $row['Description'];
        }
    }
    ?>
</div>
</body>
</html>
