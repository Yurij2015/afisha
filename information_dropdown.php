<?php
$title = "Расписание по спектаклям";
require_once "public_header.php";
?>
<div class="container">
    <div class="row afisha">
        <div class="starthead bg-dark">
            <h1 class="starthead-center">Афиша</h1>
        </div>
        <div class="row contentafisha">
            <div class="calendar contentafisha-center">
                <form method="post" action="search_date.php#search_date">
                    <label>
                        <select class="form-control form-control-sm font-weight-bold" name="search" style="background: transparent; color: white; border: none;">
                            <option selected value="" disabled class="font-weight-bold">Календарь</option>
                            <?php
                            $timetable = $db->connect()->query("SELECT DISTINCT date FROM timetable");
                            foreach ($timetable as $timetabledate) {
                                ?>
                                <option value="<?php echo $timetabledate['date'] ?>"><?php echo $timetabledate['date'] ?></option>
                            <?php } ?>
                            ?>
                        </select>
                    </label>
                    <button type="submit" class="fa fa-search"
                            style="background: transparent; color: white; border: none">
                    </button>
                </form>
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
                <div class="content">
                    <?php
                    $idrepertoire = $_GET['idrepertoire'];
                    $timetable = $db->connect()->query("SELECT * FROM timetable JOIN repertoire ON timetable.repertoire_idrepertoire = repertoire.idrepertoire WHERE repertoire_idrepertoire = '{$idrepertoire}' ORDER BY id DESC ");
                    if ($timetable) {
                        foreach ($timetable as $row) {
                            ?>
                            <div class="row col-md-12 mb-5 mt-5">
                                <div class="col-md-12" id="info">
                                    <img src="/admin/><?= $row['linkimg']; ?>" width="400px"
                                         class="float-left mr-3">
                                    <p class="text-justify mb-0"><span
                                                class="font-weight-bold"> Дата:</span> <?= $row['date'] . "&nbsp;" . $row['time']; ?>
                                    </p>
                                    <p class="text-justify mb-0"><span
                                                class="font-weight-bold">Название:</span> <?= $row['name']; ?></p>
                                    <p class="text-justify mb-0"><span
                                                class="font-weight-bold">Ограничение по возрасту:</span> <?= $row['agelimitation']; ?>
                                    </p>
                                    <p class="text-justify mb-1"><span
                                                class="font-weight-bold">Автор:</span> <?= $row['author']; ?></p>
                                    <p class="text-justify"><span
                                                class="font-weight-bold">Описание: </span><?= $row['description']; ?>
                                    </p>
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