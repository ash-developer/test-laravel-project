<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Салтерра - @yield('title')</title>

    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/css/style.min.css" rel="stylesheet" />

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAmf1akHo8B662sOA_U1aVuvKB5xsDTc78&amp;libraries=places&amp;sensor=true&amp;language=ru"></script>
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/contact.js"></script>
</head>
<body>

    <div class="page container">
        <div class="header">
            <a class="logo pull-left" href="{{ route('main')  }}">
                <img src="img/logo.png">
            </a>
            <div class="images-block text-center">
                <img src="img/1.png">
                <img src="img/2.png">
                <img src="img/3.png">
                <img src="img/4.png">
            </div>
        </div>
        <div class="brands text-center">
            <img src="img/remeza.png">
            <img src="img/einhell.png">
            <img src="img/bosch.png">
            <img src="img/stihl.png">
            <img src="img/husqvarna.png">
            <img src="img/lavor.png">
            <img src="img/makita.png">
        </div>

        <div>
            <div class="main-menu pull-left">
                <ul>
                    <li>
                        <a href="{{ route('page', ['path' => 'main']) }}" style="font-size: 18px; color: #000000;">Главная</a>
                    </li>
                    <li>
                        <a href="{{ route('page', ['path' => 'services']) }}" style="font-size: 18px; color: #000000;">Услуги</a>
                    </li>
                    <li>
                        <a href="{{ route('page', ['path' => 'reviews']) }}" style="font-size: 18px; color: #000000;">Отзывы</a>
                    </li>
                    <li>
                        <a href="{{ route('page', ['path' => 'contact']) }}" style="font-size: 18px; color: #000000;">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            Салтерра &copy; 2014

            <div class="pull-right text-right">
                <strong>г.Гродно, ул.Горького 91 АБК №1 2 этаж, офис 221</strong><br />
                +375 29 <strong>531 38 34</strong>, +375 29 <strong>278 69 02</strong>
            </div>
        </div>
    </div>

</body>
</html>
