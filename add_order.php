<?php
$title = "Забронировать билет";
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
            <?php
            $date = $_GET['date'];
            $time = $_GET['time'];
            $name = $_GET['name'];
            $timetable = $_GET['timetable'];

            ?>
            <div class="container">
                <div class="content" id="comments">
                    <div class="row col-md-12 mb-3 mt-3">
                        <div class="col-md-12">
                            <p>Вы бронируете место на спектакль <?= $name ?>, дата <?= $date ?>, время <?= $time ?> </p>
                            <form method="post" enctype="multipart/form-data" id="artistForm"
                                  action="add_order_handler.php">
                                <div class="form-group">
                                    <label for="customername" class="float-left">Ваше имя</label>
                                    <input type="text" class="form-control" name="customername" id="customername"
                                           required>
                                </div>
                                <input hidden name="timetable_id" value="<?= $timetable ?>">
                                <div class="form-group">
                                    <label for="phone" class="float-left">Номер телефона</label>
                                    <input type="text" class="form-control" name="phone" id="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="row" class="float-left">Ряд</label>
                                    <select class="form-control" name="row" id="row">
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) {
                                            ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="place" class="float-left">Место</label>
                                    <select class="form-control" name="place" id="place">
                                        <?php
                                        for ($i = 1; $i <= 18; $i++) {
                                            ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-danger float-right" value="Сохранить">
                                <button type="reset" class="btn btn-danger float-right mr-2">
                                    Очистить
                                </button>
                            </form>
                        </div>
                    </div>
                    <hr>

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