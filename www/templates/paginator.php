<?php

if ($count > 1) {
    $next = $_GET['page'] + 1;
    $after_next = $next + 1;
    $prev = $_GET['page'] - 1;
    $before_prev = $prev - 1;

    echo "<div id='paginator'>";
    if ($_GET['page'] > 3 && $count > 5) {
        echo "<a href='show_articles$parent?cat=$_GET[cat]&page=1' class='page pagi_nav' title='Перейти к первой странице'><<</a>";
    } else {
        echo "<a href='' class='page' style='visibility: hidden'><<</a>";

    }
    if ($_GET['page'] != 1 ) {
        echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$prev' class='page pagi_nav' title='Предыдущая страница'>Пред.</a>";
    } else {
        echo "<a href='' class='page' style='visibility: hidden'>Пред.</a>";

    }
    echo "<a href='#' class='page'>Стр. $_GET[page] из $count</a>";
    switch ($count) {
        case ($count < 5):
            for ($i = 1; $i <= $count; $i++) {
                if ($_GET['page'] == $i) {
                    echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$i' class='page active'>$i</a>";
                } else {
                    echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$i' class='page'>$i</a>";
                }
            }
            break;
        case ($count) >= 5 && ($_GET['page'] <= 3):
            for ($i = 1; $i <= 5; $i++) {
                if ($_GET['page'] == $i) {
                    echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$i' class='page active'>$i</a>";
                } else {
                    echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$i' class='page'>$i</a>";
                }
            }
            break;
        case ($count >= 5) && ($_GET['page'] < ($count - 2)) && ($_GET['page'] > 2):
            echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$before_prev' class='page'>$before_prev</a>";
            echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$prev' class='page'>$prev</a>";
            echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$_GET[page]' class='page active'>$_GET[page]</a>";
            echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$next' class='page'>$next</a>";
            echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$after_next' class='page'>$after_next</a>";
            break;
        case ($count >= 5) && ($_GET['page'] >= ($count - 2)):
            for ($i = ($count - 4); $i <= $count; $i++) {
                if ($_GET['page'] == $i) {
                    echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$i' class='page active'>$i</a>";
                } else {
                    echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$i' class='page'>$i</a>";
                }
            }
            break;
    }
    if ($_GET['page'] != $count) {
        echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$next' class='page pagi_nav' title='Следующая страница'>След.</a>";
    } else {
        echo "<a href='' class='page' style='visibility: hidden'>След.</a>";

    }
    if ($_GET['page'] < ($count - 2) && $count >=5) {
        echo "<a href='show_articles$parent?cat=$_GET[cat]&page=$count' class='page pagi_nav' title='Перейти к последней странице'>>></a>";
    } else {
        echo "<a href='' class='page' style='visibility: hidden' >>></a>";
    }
    echo "</div>";
}

?>