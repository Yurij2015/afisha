<?php
$title = "Артисты";
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
                    <button type="submit" class="fa fa-search"
                            style="background: transparent; color: white; border: none"></button>
                </form>
            </div>
            <div class="container">
                <div class="content" id="artists">
                    <?php
                    $artists = $db->connect()->query("SELECT * FROM artists ORDER BY idartist DESC ");
                    if ($artists) {
                        foreach ($artists as $row) {
                            ?>
                            <div class="row col-md-12 mb-3 mt-3">
                                <div class="col-md-12" id="info">
                                    <img src="/admin/<?= $row['linkphoto']; ?>" width="300px"
                                         class="float-left mr-3">
                                    <p class="text-justify mb-0"><span
                                                class="font-weight-bold">ФИО артиста:</span> <?= $row['name']; ?></p>
                                    <p class="text-justify"><span
                                                class="font-weight-bold">Информация: </span><?= $row['description']; ?>
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