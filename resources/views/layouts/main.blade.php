<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="У нас на сайте вы можете скачать карты для Warcraft 3 и Reforged, а также узнать много нового про игры Blizzard и последние новости, связанные с ними." />

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Иконки -->
    <script src="https://kit.fontawesome.com/54badee641.js" crossorigin="anonymous"></script>

    <!--Иконка сайта-->
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>@yield('title')</title>
</head>

<!--Меню-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <!-- Лого-->
    <a href="/index.php" class="navbar-brand">
        <img src="/images/Logo.png" width="100" height="50" alt="logo"/>
    </a>

    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="../index.php" class="nav-link disabled"><i class="fas fa-home"></i>Главная</a>
            </li>
            <li class="nav-item">
                <a href="../maps.php" class="nav-link"><i class="fas fa-map"></i>Карты</a>
            </li>
            <li class="nav-item">
                <a href="../companies.php" class="nav-link disabled"><i class="fab fa-fort-awesome-alt"></i>Компании</a>
            </li>
            <li class="nav-item ">
                <a href="../networkGame.php" class="nav-link disabled"><i class="fas fa-server"></i></i>Игра по сети</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled" data-toggle="modal" data-target="#exampleModalOne"><i class="fas fa-question"></i>Помощь</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled" data-toggle="modal" data-target="#exampleModalTwo"><i class="fas fa-gift"></i>Предложить карту</a>
            </li>
        </ul>
    </div>
</nav>
<body>

@yield('content')

<!--Футер-->
<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-light">Copyright ©«warmap.ru» 2020</span>
        <a href="http://www.youtube.com/c/TeddyBearsClub"><i class="fab fa-youtube"></i></a>
        <a href="https://vk.com/teddybearsclub"><i class="fab fa-vk"></i></a>
        <a href="https://www.twitch.tv/steandr"><i class="fab fa-twitch"></i></a>
        <a href="#" class=" btn btn-outline-light ml-3">Подняться наверх</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
