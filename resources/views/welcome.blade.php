<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BEER22</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #red;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #main-div {
              background-image: url('/images/img.jpg');
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="main-div">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Домашняя</a>
                    @else
                        <a href="{{ route('login') }}">Войти</a>
                        <a href="{{ route('register') }}">Стать Членом Клуба</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    BEER22
                </div>

                <div class="links">
                    <a href="#">Пивная Карта</a>
                    <a href="#">Закрытый Клуб</a>
                    <a href="#">АКЦИИ</a>
                    <a href="#">Новости</a>
                    <a href="#">Контакты</a>
                </div>
            </div>
        </div>
    </body>
</html>
