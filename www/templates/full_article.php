<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 02.10.2015
 * Time: 19:24
 */

$value = $result[0];
$year = '';

if ($value['article_year']) {
    $year = '&nbsp(' . $value['article_year'] . 'г.)';
}

echo
"<div>
                <div class='article_block_header_full'>
                    <a href='$_SERVER[HTTP_REFERER]' title='Назад'> &nbsp $value[article_name] $year </a>
                    <hr align='left'>
                </div>

                <div class='article_block_content_full'>
                    $value[content]
                </div>
</div>";
