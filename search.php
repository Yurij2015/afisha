<?php
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
                <div class="content">
                    <?php
                    $search = $_POST['search'];
                    $timetable = $db->connect()->query("SELECT DISTINCT idartist, repertoire.name AS reportoirename,repertoire.author,repertoire.description AS repertoiredescription,linkimg, agelimitation, artists.name AS artistname,artists.description AS artistdescription FROM repertoire,repertoire_has_artist,artists WHERE repertoire.name LIKE '%$search%' OR repertoire.idrepertoire = (SELECT repertoire_idrepertoire FROM repertoire_has_artist WHERE artist_idartist = (SELECT idartist FROM artists WHERE artists.name LIKE '%$search%') AND repertoire_has_artist.repertoire_idrepertoire = repertoire.idrepertoire AND repertoire_has_artist.artist_idartist = artists.idartist) AND repertoire_has_artist.repertoire_idrepertoire = repertoire.idrepertoire AND repertoire_has_artist.artist_idartist = artists.idartist");
                    if ($timetable) {
                        foreach ($timetable as $row) {
                            ?>
                            <div class="row col-md-12 mb-5 mt-5">
                                <div class="col-md-12" id="info">
                                    <img src="/admin/><?= $row['linkimg']; ?>" width="400px"
                                         class="float-left mr-3">
                                    <p class="text-justify mb-0"><span
                                                class="font-weight-bold">Название спектакля:</span> <?= $row['reportoirename']; ?></p>
                                    <p class="text-justify mb-0"><span
                                            class="font-weight-bold">Артист:</span> <?= $row['artistname']; ?></p>
                                    <p class="text-justify mb-0"><span
                                            class="font-weight-bold">Об артисте:</span> <?= $row['artistdescription']; ?></p>
                                    <p class="text-justify mb-0"><span
                                                class="font-weight-bold">Ограничение по возрасту:</span> <?= $row['agelimitation']; ?>
                                    </p>
                                    <p class="text-justify mb-1"><span
                                                class="font-weight-bold">Автор:</span> <?= $row['author']; ?></p>
                                    <p class="text-justify"><span
                                                class="font-weight-bold">Описание: </span><?= $row['repertoiredescription']; ?>
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