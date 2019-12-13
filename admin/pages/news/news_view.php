<?php $title = "Новости" ?>
<?php
require_once "../../header.php";
?>
<div class="row">
    <div class="col-md-12">
        <?= "<h2 class='mt-3'>" . $title . "</h2>";
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="btn btn-primary float-lg-right mb-3">
                    Добавить запись
                </div>
                <?php
                require_once "../../../DbConnect.php";
                require_once "../../../dbsettings.php";
                require_once "News.php";

                try {
                    $db = new DbConnect($host, $user, $db, $pass);
                } catch (PDOException $exc) {
                    echo $exc->getMessage();
                }
                ?>
                <table class="table table-hover table-bordered">
                    <tbody>
                    <tr>
                        <th>Название новости</th>
                        <th>Содержание новости</th>
                        <th>Изображение</th>
                        <th></th>
                    </tr>
                    <?php
                    $news = $db->connect()->query("SELECT * FROM news ORDER BY idnews DESC ");
                    if ($news) {
                        foreach ($news as $row) {
                            $news = new News($row['name'], $row['description']);
                            ?>
                            <tr>
                                <td><?= $news->name(); ?></td>
                                <td><?= $news->description(); ?></td>
                                <td><?= $row['linkimg']; ?></td>
                                <td><?= '<a href="' . $row['idnews'] . '" class="small">Удалить</a>' ?></td>
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

