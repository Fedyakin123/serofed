<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo SITE_DIR; ?>img/book.jpg">
    <link href='https://fonts.googleapis.com/css?family=Kurale&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>styles/main_style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>styles/menu_style.css">
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/libs/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/libs/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/script.js"></script>
    <title>Архив Сегрея Федякина</title>
</head>
<body>
<div id="container">

    <div id="header" class="block">
        <div id="logo">
            <img src="<?php echo SITE_DIR; ?>img/gears.png" width="184px" height="125px">
        </div>
        <div id="title">
            Архив Сергея Федякина
        </div>
    </div>

    <div id="sidebar" class="block">  <!-- МЕНЮ-->
        <div id="menu" class="block">
            <ul>
                <li class="upper"><a href="#" class="upper_partiton"> Музыка</a>
                    <ul id="vnav">
                        <li class=""><a href="#">Рахманинов</a>
                            <ul  class="height35">
                                <li class=""><a href="#">Материалы и исследования </a></li>
                                <li class=""><a href="#">Отзывы </a></li>
                                <li class=""><a href="#">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">Скрябин</a>
                            <ul class="height35">
                                <li class=""><a href="#">Материалы </a></li>
                                <li class=""><a href="#">Отзывы </a></li>
                                <li class=""><a href="#">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">Мусоргский</a>
                            <ul class="height35">
                                <li class=""><a href="#">Материалы </a></li>
                                <li class=""><a href="#">Отзывы </a></li>
                                <li class=""><a href="#">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">История музыки</a>
                            <ul class="height25">
                                <li class=""><a href="#">Русское зарубежье </a></li>
                                <li class=""><a href="#">Разное </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="litra"> <a href="#" class="upper_partiton">Литература</a>
                    <ul id="vnav">
                        <li class=""><a href="#">Блок</a>
                            <ul class="height35">
                                <li class=""><a href="#">Материалы </a></li>
                                <li class=""><a href="#">Отзывы </a></li>
                                <li class=""><a href="#">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">Розанов</a>
                            <ul class="height35">
                                <li class=""><a href="#">Материалы </a></li>
                                <li class=""><a href="#">Отзывы </a></li>
                                <li class=""><a href="#">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">Современные записки</a>
                            <ul class="height35">
                                <li class=""><a href="#">Материалы </a></li>
                                <li class=""><a href="#">Отзывы </a></li>
                                <li class=""><a href="#">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">Русская литература XIX века</a>
                            <ul class="height15">
                                <li class=""><a href="#">Материалы </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">История литературы</a>
                            <ul class="height15">
                                <li class=""><a href="#">Разное </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="upper"><a href="#" class="upper_partiton">Наука и&nbspтехника</a>
                    <ul id="vnav">
                        <li class=""><a href="#">Зацепления</a>
                            <ul class="height25">
                                <li class=""><a href="#">Публикации </a></li>
                                <li class=""><a href="#">Отклики </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">Математика</a>
                            <ul class="height15">
                                <li class=""><a href="#">Публикации </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">Разное</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="auth" class="block">
            <form method="post" action="">
                <input type="text" placeholder="Login" name="user[login]" /> <br /><br />
                <input type="password" placeholder="Password" name="user[password]" /><br /><br />
                <input type="submit" value="save" name="login_btn" />
            </form>
        </div>
    </div>

    <div id="content" class="block">
        <?php require_once($template . '.php'); ?>
    </div>

    <div style="clear: both"></div>

    <div id="footer" class="block">
        <?php if ($auth): ?>
            <a href="<?php echo SITE_DIR; ?>cabinet/"> Кабинет </a> <br />
            <a href="<?php echo SITE_DIR; ?>logout/"> Выход </a>
        <?php endif; ?>
    </div>
</div>
</body>
</html>