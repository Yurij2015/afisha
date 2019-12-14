<?php $title = "Репертуар артиста" ?>
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
                require_once "Timetable.php";

                try {
                    $db = new DbConnect($host, $user, $db, $pass);
                } catch (PDOException $exc) {
                    echo $exc->getMessage();
                }
                ?>
                <table class="table table-hover table-bordered">
                    <tbody>
                    <tr>
                        <th>Артист</th>
                        <th>Репертуар</th>
                        <th></th>
                    </tr>
                    <?php
                    $repertoire_has_artist = $db->connect()->query("SELECT * FROM repertoire_has_artist ORDER BY artist_idartist DESC ");
                    if ($repertoire_has_artist) {
                        foreach ($repertoire_has_artist as $row) {
                            ?>
                            <tr>
                                <td><?= $row['repertoire_idrepertoire']; ?></td>
                                <td><?= $row['artist_idartist']; ?></td>
                                <td><?= '<a href="' . $row['id'] . '" class="small">Редактировать</a>' ?></td>
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

