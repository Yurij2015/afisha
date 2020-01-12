<?php
$title = "Мои заказы";
require_once "public_header.php";
?>
<div class="container">
    <div class="row afisha">
        <div class="starthead bg-dark">
            <h1 class="starthead-center">Личный кабинет. Мои заказы</h1>
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
                    $user = Session::get('email');
                    $booking = $db->connect()->query("SELECT * FROM booking JOIN timetable t on booking.timetable_id = t.id JOIN repertoire r on t.repertoire_idrepertoire = r.idrepertoire JOIN cultural_institution ON r.cultural_institution = cultural_institution.id_cultural_institution  WHERE booking.user = \"$user\" ORDER BY idbook DESC ");
                    if ($booking) {
                        foreach ($booking as $row) {
                            ?>
                            <div class="col-md-12 mb-5 mt-5" id="info">
                                <img src="/admin/<?= $row['linkimg']; ?>" width="200px"
                                     class="float-left mr-3" alt="<?= $row['name']; ?>">
                                <p class="text-justify mb-0"><span
                                            class="font-weight-bold">Название театра:</span> <?= $row['ci_name']; ?></p>
                                <p class="text-justify mb-0"><span
                                            class="font-weight-bold"> Дата:</span> <?= $row['date'] . "&nbsp;" . $row['time']; ?>
                                </p>
                                <p class="text-justify mb-0"><span
                                            class="font-weight-bold">Название:</span> <?= $row['name']; ?>
                                </p>
                                <p class="text-justify mb-0"><span
                                            class="font-weight-bold">Стоимость:</span> <?= $row['cost']; ?>
                                </p>
                                <p class="text-justify mb-0"><span
                                            class="font-weight-bold">Ограничение по возрасту:</span> <?= $row['agelimitation']; ?>
                                </p>
                                <p class="text-justify mb-1"><span
                                            class="font-weight-bold">Автор:</span> <?= $row['author']; ?>
                                </p>
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
    <?php require_once "footer.php"; ?>
</div>
</div>
</body>
</html>