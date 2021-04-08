<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="@yield('description')"/>

    <!--CSS-->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Иконки -->
    <script src="https://kit.fontawesome.com/54badee641.js" crossorigin="anonymous"></script>

    <!--Иконка сайта-->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>

    <title>@yield('title')</title>
</head>

<!--Меню-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <!-- Лого-->
    <a href="{{route('allMaps')}}" class="navbar-brand">
        <img src="{{asset('images/Logo.png')}}" width="100" height="50" alt="logo"/>
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
                <a href="{{route('allMaps')}}" class="nav-link"><i class="fas fa-map"></i>Карты</a>
            </li>
            <li class="nav-item ">
                <a href="{{route('networkGame')}}" class="nav-link"><i class="fas fa-server"></i></i>Игра по сети</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled" data-toggle="modal" data-target="#exampleModalOne"><i
                        class="fas fa-question"></i>Помощь</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled" data-toggle="modal" data-target="#exampleModalTwo"><i
                        class="fas fa-gift"></i>Предложить карту</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>
</html>
