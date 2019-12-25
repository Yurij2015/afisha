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
            <div class="calendar contentafisha-center">
                <form method="post" action="search_date.php#search_date">
                    <label>
                        <select class="form-control form-control-sm font-weight-bold" name="search"
                                style="background: transparent; color: white; border: none;">
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
                    <button type="submit" class="fa fa-search"
                            style="background: transparent; color: white; border: none"></button>
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
                                    <img src="/admin/<?= $row['linkimg']; ?>" width="200px" class="mb-2 mt-2">
                                </div>
                                <div class="col-md-4 content-center mt-2">
                                    <p><?= $row['name']; ?></p>
                                </div>
                                <div class="col-md-2 content-center mt-2">
                                    <p><?= $row['date'] . "&nbsp;" . $row['time']; ?></p>
                                </div>
                                <div class="col-md-3 mt-2">
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