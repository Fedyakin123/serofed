<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo SITE_DIR; ?>img/book.jpg">
    <link href='https://fonts.googleapis.com/css?family=Kurale&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>styles/main_style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>styles/menu_style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>styles/cabinet_style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>styles/pagination_style.css">
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/libs/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/script.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/script_lib.js"></script>
<!--    <script type="text/javascript" src="--><?php //echo SITE_DIR; ?><!--js/select_image.js"></script>-->
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/libs/jquery-2.1.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('a[href]').each(function(){
                var href = $(this).text();
                var res = href.match(/\.\w{3,4}$/);
                if (res){
                    var name = href.match(/\/[^\/]*\.\w{3,4}/);
                    res += '';
                    name += '';
                    res = res.slice(1);
//                    name = decodeURI(name); // Не нужно,если не убирать транслитерацию
                    name = name.slice(1);
                    $(this).before(
                        //При необходимости - проставить флаг "download" эдементу <a>
                        '<a target="_blank" title="Открыть файл" href="'+href+'">' +
                            '<div class ="file_container">' +
                                '<div class="resize_container">' +
                                    '<img class="file_icon" src="/js/fmanager/filemanager/img/ico/' + res + '.jpg" />' +
                                '</div>' +
                                '<p>' + name + '</p>' +
                            '</div>' +
                        '</a>'
                    );
                    $(this).remove();
                }
            }); // конец each

            <?php if ($auth) require_once(ROOT_DIR . 'js' . DS . 'boss_script.js');?>
            //ВИДИМО МОЖНО ПРОСТО СЮДА ВСТАВИТЬ БЕЗ ЗАПРОСА ФАЙЛОВ

        }); //конец ready

    </script>

    <title>Архив Сегрея Федякина</title>
    <script type="text/javascript">
        var id_menu = new Array('music','litra','nauka');
        startList = function allclose() {
            for (i=0; i < id_menu.length; i++){
                //поменять < на == чтоб подменюшки не сворачивались при выборе другой и наоборот, либо то же самое в openMenu
                document.getElementById(id_menu[i]).style.display = "none";
                //Динамически менять логотипы в зависимости от положения курсора
            }
        };
        function openMenu(id){
            var parent = document.getElementById(id).parentNode;
            for (i=0; i == id_menu.length; i++){
                if (id != id_menu[i]){
                    document.getElementById(id_menu[i]).style.display = "none";
                }
            }
            if (document.getElementById(id).style.display == "block"){
                document.getElementById(id).style.display = "none";

            }else{
                document.getElementById(id).style.display = "block";
            }
        }
        window.onload=startList;
    </script>
</head>
<body>
<div id="container">
<!--    --><?// phpinfo();?>

    <div id="header" class="block">
        <div id="logo">
            <img src="<?php echo SITE_DIR; ?>img/gears.png" width="184px" height="125px" >
        </div>
        <div id="title">
            Архив Сергея Федякина
        </div>
    </div>

    <div id="sidebar" class="block">  <!-- МЕНЮ-->

        <?php if ($auth): ?>
            <div id="cabinet_block" class="block">
                <ul>
                    <li class="cab_ul"><a class="anchor_nav" href="<?php echo SITE_DIR; ?>cabinet/article"> Кабинет </a>
                        <ul id="cabinet_menu">
                            <li class=""><a href="<?php echo SITE_DIR; ?>cabinet/article">Новая статья</a></li>
                            <li class=""><a href="<?php echo SITE_DIR; ?>cabinet/article_list">Редактирование</a></li>
                        </ul>
                    </li>
                </ul>
                <a id="log_out_btn" class="anchor_nav" href="<?php echo SITE_DIR; ?>/logout/"> Выход </a>
            </div>
        <?php endif; ?>

        <div id="menu" class="block">
            <ul>
                <li class="upper">
                    <a href="<?php echo SITE_DIR; ?>content/view?view_page=placeholder" class="upper_partiton" onclick="openMenu('music');return(false)" > Музыка</a>
                    <ul class="vnav" id="music">
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=1&page=1">Рахманинов и его эпоха</a>
                            <ul  class="height9">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=2&page=1">Отзывы современников </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=3&page=1">Хроника жизни и творчества</a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=4&page=1">Музыкальная жизнь русского зарубежья</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=5&page=1">Скрябин</a>
                            <ul class="height6">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=6&page=1">Материалы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=7&page=1">Отзывы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=8&page=1">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=9&page=1">Мусоргский</a>
                            <ul class="height6">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=10&page=1">Материалы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=11&page=1">Отзывы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=12&page=1">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=13&page=1">История музыки</a>
                            <ul class="height4">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=14&page=1">Русское зарубежье </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=15&page=1">Разное </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <hr class="invisible">
                <li class="upper"> <a href="<?php echo SITE_DIR; ?>content/view?view_page=placeholder" class="upper_partiton" onclick="openMenu('litra');return(false)">Литература</a>
                    <ul class="vnav" id="litra">
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=16&page=1">Блок</a>
                            <ul class="height6">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=17&page=1">Материалы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=18&page=1">Отзывы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=19&page=1">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=20&page=1">Розанов</a>
                            <ul class="height6">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=21&page=1">Материалы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=22&page=1">Отзывы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=23&page=1">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=24&page=1">Современные записки</a>
                            <ul class="height6">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=25&page=1">Материалы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=26&page=1">Отзывы </a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=27&page=1">Выписки </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=28&page=1">Русская литература XIX века</a>
                            <ul class="height2">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=29&page=1">Материалы </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=30&page=1">История литературы</a>
                            <ul class="height2">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=31&page=1">Разное </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <hr class="invisible">
                <li class="upper"><a href="<?php echo SITE_DIR; ?>content/view?view_page=placeholder" class="upper_partiton" onclick="openMenu('nauka');return(false)">Наука и&nbspтехника </a>
                    <ul class="vnav" id="nauka">
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=32&page=1">Зацепления</a>
                            <ul class="height6">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=33&page=1" style="text-transform: none">Работы Федякина Романа Васильевича</a></li>
                                <hr>
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=34&page=1">Отклики </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=35&page=1">Математика</a>
                            <ul class="height2">
                                <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles?cat=36&page=1">Публикации </a></li>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo SITE_DIR; ?>content/show_articles_parent?cat=37&page=1">Разное</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php if (!$auth): ?>
        <div id="auth" class="block">
            <form method="post" action="">
                <input type="text" placeholder=" Login" name="user[login]"  /> <br /><br />
                <input type="password" placeholder=" Password" name="user[password]" /><br /><br />
                <input type="submit" value="Войти" name="login_btn" />
            </form>
        </div>
        <?php endif; ?>
    </div>

    <div id="content" class="block">
        <?php require_once($template . '.php'); ?>
    </div>

    <div style="clear: both"></div>

    <div id="footer" class="block">
        <a href="#">Об авторе</a>
        &nbsp|&nbsp
        <a href="#">Полезные ссылки</a>
    </div>
</div>
</body>
</html>


