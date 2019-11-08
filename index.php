<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Афиша</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="public/images/turandot-140x80.png" alt="Logo" style="width:140px;">
        </a>
        <ul class="navbar-nav mr-auto">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Афиша
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Артисты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Отзывы</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link authcolor small" href="#"><i class="fas fa-user"></i> Авторизация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link authcolor small" href="#">Регистрация</a>
            </li>
        </ul>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/images/la.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="public/images/chicago.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="public/images/ny.jpg" alt="New York" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <div class="container">
        <div class="row afisha">
            <div class="starthead bg-dark">
                <h1 class="starthead-center">Афиша</h1>
            </div>
            <div class="row contentafisha">
                <div class="calendar contentafisha-center">Календарь</div>
                <div class="emptyplace"></div>
                <div class="search">
                    <form method="post" id="searchrequest">
                        <label for="search"></label>
                        <input placeholder="Поиск по спектаклям, артистам" id="search" name="search">
                        <span><i class="fa fa-search"></i></span>
                    </form>
                </div>

                <!--                    <div class="col-md-2">-->
                <!--                        <p class="text-dark">jkjkj</p>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-7">-->
                <!--                        <p>kjkjkjkk</p>-->
                <!--                    </div>-->
            </div>
        </div>
    </div>
</div>
</body>
</html>