
<?php
    require_once(ROOT_DIR . 'templates' . DS . 'paginator.php');
    $year = '';
    foreach ($result as $value) {
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
                    <div> #$value[id]   $date $names[parent_name].  $names[category_name]$value[category_name]. </div> <a href='/content/show?art_id=$value[id]'> Читать полностью &rArr;</a>
                </div>
            </div>";
    }
?>





