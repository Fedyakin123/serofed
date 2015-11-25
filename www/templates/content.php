
<?php
    require_once(ROOT_DIR . 'templates' . DS . 'paginator.php');

    foreach ($result as $value) {
        $year = '';
        if ($value['article_year']) {
            $year = '&nbsp(' . $value['article_year'] . 'г.)';
        }
        $date = substr($value['create_date'],0,10);
        echo
            "<div class='article_block'>
                <div class='article_block_header'>
                    <a href='/content/show?art_id=$value[id]' title='Читать полностью'> &nbsp $value[article_name] $year </a>
                </div>

                <div class='article_block_content'>
                    $value[content]
                </div>
                <div class='article_block_bottom'>
                    <div> #$value[id]   $date $names[parent_name].  $names[category_name]$value[category_name]. </div>


                    <a href='/content/show?art_id=$value[id]'> Читать полностью &rArr;</a>
                     <a class='boss_button hidden_button' href='" . SITE_DIR . "cabinet/article?id=$value[id]'>Редактировать &rArr;</a>
                     <a class='boss_button hidden_button'  onclick='delete_article_js(this,$value[id])' href='#'>Удалить &rArr;</a>
                </div>
            </div>";
    }
?>


<a >

