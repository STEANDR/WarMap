@extends('layouts.main')

@section('description', 'В связи с тем, что многие способы игры по локальной сети в Warcraft 3 стали не актуальны, я решил помочь разобраться вам с теми, что еще остались. Первый способ. Подключение к игре ...')
@section('title', 'Как играть в Warcraft 3 по сети')

@section('content')
    <link rel="stylesheet" href="{{asset('css/network_game.css')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">

                    <div class="network_game">

                        <h1>Игра по сети</h1>
                        <div class="descript-wrap">

                        </div>
                        <img class="single-img" src="{{asset('images/NetworkGame/network_game.jpg')}}" alt="articleImage"
                             style="max-width: 100%; vertical-align: middle;height: auto;">
                        <p class="article-text"><h5>В связи с тем, что многие способы игры по локальной сети в Warcraft
                            3 стали не актуальны, я решил помочь разобраться вам с теми, что еще остались.</h5>
                        <br>
                        <h2><i class="fas fa-circle"></i>Первый способ.</h2>
                        <br>
                        <h3>Подключение к игре</h3>
                        <br>
                        <h5>Относительно недавно на просторах сети появился сервис IrinaBot. Это условно бесплатный
                            (т.к. присутвуют незначительные микротранзакции: вывести игру в топ, доступ к расширенному
                            списку команд, возможность создавать списки привилегированных игроков и.т.д)
                            сервис, который позволяет вам захостить любую выбранную вами карту у себя на сайте и
                            подключиться к ней другим игрокам. Вот краткая текстовая инструкция (Видео инструкция у нас
                            на ютуб канале: <a href="https://www.youtube.com/watch?v=rLkTxvux0iY">ТЫК!</a> ):

                            <br>1) Зайдите на сайт <a href="https://irinabot.ru">IrInA - Host Bot</a> и авторизуйтесь
                            через Vk или Discord.
                            <br><img class="single-img" src="{{asset('images/NetworkGame/Log_IrIna_bot.png')}}" alt="articleImage"
                                     style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br>2) Перейдите во вкладку "Настройки" и измените поле "Nickname IrInA connector"
                            <br><img class="single-img" src="{{asset('images/NetworkGame/Settings_IrIna_bot.png')}}"
                                     alt="articleImage" style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br><img class="single-img" src="{{asset('images/NetworkGame/Change_name_IrIna_bot.png')}}"
                                     alt="articleImage" style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br>3) Далее загружаете IrInA connector и необходим софт если он требуется (Visual C++ для
                            Visual Studio 2015(x86)). Заходите в меню "Справка" и выбираете "О коннекторе". Скачиваете,
                            нажимая на ссылки, показанные на скриншоте ниже.
                            <br><img class="single-img" src="{{asset('images/NetworkGame/Donwload_IrInA connector_IrIna_bot.png')}}"
                                     alt="articleImage" style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br>4) После загрузки, разархивируйте и запустите IrInA connector. У вас откроется консоль,
                            после этого можно зайти в Warcraft III. В меню выбираете локальная сеть, вводите имя и
                            сворачиваете игру.
                            <br><img class="single-img" src="{{asset('images/NetworkGame/IrInA connector_IrIna_bot.png')}}"
                                     alt="articleImage" style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br>5) Открываете главную страницу сайта и выбираете нужную игру из списка. После решения,
                            во что играть, нажимаете значок геймпада.
                            <br><img class="single-img" src="{{asset('images/NetworkGame/List_IrIna_bot.png')}}" alt="articleImage"
                                     style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br>Разворачиваете Warcraft III и в локальной сети появится выбранная вами карта.
                            <br><img class="single-img" src="{{asset('images/NetworkGame/network_game(2).png')}}" alt="articleImage"
                                     style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br>6) Играйте!
                        </h5>
                        <br>
                        <h3>Хостинг игры</h3>
                        <br><h5>1) Зайдите на сайт <a href="https://irinabot.ru">IrInA - Host Bot</a> и авторизуйтесь
                            через Vk или Discord.
                            <br><img class="single-img" src="{{asset('images/NetworkGame/Log_IrIna_bot.png')}}" alt="articleImage"
                                     style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br>2) Перейдите во вкладку "Создать игру" и произведите настройку параметров вашей
                            кастомки.
                            <br><img class="single-img" src="{{asset('images/NetworkGame/Create_game_IrIna_bot.png')}}"
                                     alt="articleImage" style="max-width: 100%; vertical-align: middle;height: auto;">
                            <br>Если вы не нашли нужную вам карту, вы можете загрузить ее, воспользовавшись
                            соответсвующей опцией на сайте.
                            <br>3) После всех настроек ваша карта появится в списке активных игр. Как к ней подключиться
                            описано выше в пункте "Подключение к игре"</h5>
                        <br>
                        <h2><i class="fas fa-circle"></i>Второй способ.</h2>
                        <br>
                        <h1>Скоро...</h1>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
