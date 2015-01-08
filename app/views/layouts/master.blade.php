<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Салтерра</title>

    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/css/style.css" rel="stylesheet" />
    <style type="text/css">
        * {
            font-family: 'Ubuntu', sans-serif;
            font-size: 14px;
        }
    </style>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAmf1akHo8B662sOA_U1aVuvKB5xsDTc78&amp;libraries=places&amp;sensor=true&amp;language=ru"></script>
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
</head>
<body style="margin-bottom: 120px;">

    <div class="container" style="margin-bottom: 40px;">
        <div>
            <a class="pull-left">
                <img src="img/logo.png" style="width: 200px;">
            </a>
            <div class="text-center" style="margin-left: 200px; padding-top: 20px;">
                <img src="img/1.png" style="height: 108px; margin-right: 30px;">
                <img src="img/2.png" style="height: 108px; margin-right: 30px;">
                <img src="img/3.png" style="height: 108px; margin-right: 30px;">
                <img src="img/4.png" style="height: 108px;">
            </div>
        </div>
        <div class="text-center" style="padding-top: 30px; padding-bottom: 0;">
            <img src="img/remeza.png" style="height: 30px; margin-right: 20px;">
            <img src="img/einhell.png" style="height: 30px; margin-right: 20px;">
            <img src="img/bosch.png" style="height: 30px; margin-right: 20px;">
            <img src="img/stihl.png" style="height: 30px; margin-right: 20px;">
            <img src="img/husqvarna.png" style="height: 30px; margin-right: 20px;">
            <img src="img/lavor.png" style="height: 30px; margin-right: 20px;">
            <img src="img/makita.png" style="height: 30px; margin-right: 20px;">
        </div>

        <div>
            <div class="pull-left" style="width: 200px;">
                <ul style="list-style: none; margin: 0; padding: 0; margin-top: 40px;">
                    <li style="margin-bottom: 15px;" ui-sref-active="active">
                        <a href="<?= URL::to('/') ?>" style="font-size: 18px; color: #000000;">Главная</a>
                    </li>
                    <li style="margin-bottom: 15px;" ui-sref-active="active">
                        <a href="<?= URL::to('/services') ?>" style="font-size: 18px; color: #000000;">Услуги</a>
                    </li>
                    <li style="margin-bottom: 15px;" ui-sref-active="active">
                        <a ui-sref="reviews" style="font-size: 18px; color: #000000;">Отзывы</a>
                    </li>
                    <li style="margin-bottom: 15px;" ui-sref-active="active">
                        <a ui-sref="contact" style="font-size: 18px; color: #000000;">Контакты</a>
                    </li>
                </ul>
            </div>
            <div style="margin-left: 200px;">
                <div style="padding: 40px; min-height: 300px;">
                    @yield('content')
                </div>
            </div>
        </div>


    </div>
    <div style="background: url('img/footer-background.png') repeat-x; bottom: 0; height: 120px; position: fixed; width: 100%">
        <div class="container" style="padding-top: 60px; font-size: 16px;">
            Салтерра &copy; 2014

            <div class="pull-right text-right">
                <strong>г.Гродно, ул.Горького 91 АБК №1 2 этаж, офис 221</strong><br />
                +375 29 <strong>531 38 34</strong>, +375 29 <strong>278 69 02</strong>
            </div>
        </div>
    </div>

</body>
</html>
