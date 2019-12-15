<?php
$title = "Афиша. Главная страница";
require_once "public_header.php";
?>
<div class="container">
    <div class="row afisha">
        <div class="starthead bg-dark">
            <h1 class="starthead-center">Афиша</h1>
        </div>
        <div class="row contentafisha">
            <div class="calendar contentafisha-center"><i class="fa fa-calendar"></i>
                Календарь
            </div>
            <div class="emptyplace"></div>
            <div class="search">
                <form method="post" id="searchrequest" action="search.php">
                    <label for="search"></label>
                    <input placeholder="Поиск по спектаклям, артистам" id="search" name="search">
                    <button type="submit" class="fa fa-search" style="background: transparent; color: white; border: none"></button>
                </form>
            </div>
            <div class="container">
                <div class="content" id="content">
                    <?php
                    $timetable = $db->connect()->query("SELECT * FROM timetable JOIN repertoire ON timetable.repertoire_idrepertoire = repertoire.idrepertoire ORDER BY id DESC ");
                    if ($timetable) {
                        foreach ($timetable as $row) {
                            ?>
                            <div class="row col-md-12">
                                <div class="col-md-3 content-center">
                                    <img src="/admin/><?= $row['linkimg']; ?>" width="200px" class="mb-2">
                                </div>
                                <div class="col-md-4 content-center">
                                    <p><?= $row['name']; ?></p>
                                </div>
                                <div class="col-md-2 content-center">
                                    <p><?= $row['date'] . "&nbsp;" . $row['time']; ?></p>
                                </div>
                                <div class="col-md-3">
                                    <a href="information.php?id=<?= $row['id']; ?>#info"
                                       class="content-center info">Информация</a>
                                </div>
                            </div>
                            <hr>
                            <?php
                        }
                    }
                    $db = null;
                    ?>
                </div>
            </div>
        </div>

    </div>
    <footer class="row">
        <div class="col-md-12">
            <?= "Все права защищены " . "&copy; " . date("Y") ?>
        </div>
    </footer>
</div>
</div>
</body>
</html>