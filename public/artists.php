<?php $title = "Артисты" ?>
<?php require_once "header.php";
//require_once "../DbConnect.php";
//require_once "../dbsettings.php";
//require_once "Artist.php";
?>
<div class="row">
    <div class="col-md-12">
        <?php
        echo "<h2>" . $title . "</h2>";
        //        $db = new DbConnect($host, $user, $db, $pass);
        //        $artists = $db->connect()->query("SELECT * FROM artists");
        //        if ($artists) {
        //            foreach ($artists as $row) {
        //                $style = new Artist($row['name'], $row['description']);
        //                echo $style->name();
        //                echo $style->description();
        //            }
        //        }
        ?>

        <script>
            function showUser() {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getartist.php", true);
                xmlhttp.send();
            }
        </script>

        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">ФИО</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="phone">Описание</label>
                <textarea class="form-control" name="name" id="name"></textarea>
            </div>
            <div class="form-group">
                <label for="email">Загрузить фото</label>
                <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
            </div>
            <button type="button" class="btn btn-success" onclick="return showUser()">Сохранить</button>
        </form>

    </div>
</div>
<div id="txtHint"><b>Person info will be listed here.</b></div>

<?php require_once "footer.php"; ?>

