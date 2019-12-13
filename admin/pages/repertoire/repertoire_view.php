<?php $title = "Репертуар" ?>
<?php
require_once "../../header.php";
?>
<div class="row">

    <div class="col-md-12">
        <?= "<h2 class='mt-4'>" . $title . "</h2>";
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="btn btn-primary float-lg-right mb-3">
                    Добавить запись
                </div>
                <?php
                require_once "../../../DbConnect.php";
                require_once "../../../dbsettings.php";
                require_once "Repertoire.php";

                try {
                    $db = new DbConnect($host, $user, $db, $pass);
                } catch (PDOException $exc) {
                    echo $exc->getMessage();
                }
                ?>
                <table class="table table-hover table-bordered">
                    <tbody>
                    <tr>
                        <th>Название спектакля</th>
                        <th>Автор</th>
                        <th>Описание</th>
                        <th>Изображение</th>
                        <th>Возврастное ограничение</th>
                        <th></th>
                    </tr>
                    <?php
                    $news = $db->connect()->query("SELECT * FROM repertoire ORDER BY idrepertoire DESC ");
                    if ($news) {
                        foreach ($news as $row) {
                            $news = new Repertoire($row['name'], $row['author'], $row['description'], $row['linkimg'], $row['agelimitation']);
                            ?>
                            <tr>
                                <td><?= $news->name(); ?></td>
                                <td><?= $news->author(); ?></td>
                                <td><?= $news->description(); ?></td>
                                <td><?= $news->linkimg(); ?></td>
                                <td><?= $news->agelimitation(); ?></td>

                                <td><?= '<a href="' . $row['idrepertoire'] . '" class="small">Удалить</a>' ?></td>
                            </tr>
                            <?php
                        }
                    }
                    $db = null;
                    ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php require_once "../../footer.php"; ?>

