<?php $title = "Артисты" ?>
<?php require_once "header.php";
?>
<div class="row">
    <div class="col-md-12">
        <?= "<h2>" . $title . "</h2>";
        ?>
        <div id="artist">
            <?php
            //            require_once "getartist.php";
            ?>
        </div>
        <form method="post" enctype="multipart/form-data" id="artistForm">
            <div class="form-group">
                <label for="name">ФИО</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Загрузить фото</label>
                <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
            </div>
            <button type="button" class="btn btn-success" onclick="addArtist(); showArtist() ">Сохранить</button>
        </form>
    </div>
</div>

<?php require_once "footer.php"; ?>

