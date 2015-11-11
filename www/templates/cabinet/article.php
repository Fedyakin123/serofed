<?php
$btn_val = 'Добавить новую статью';

if (isset($_GET['id'])) {
    require_once(ROOT_DIR . 'models' . DS . 'articles_model.php');
    $article_model = new articles_model();
    $article = $article_model->edit_article('id',$_GET['id']);
    $article = $article[0];
    $btn_val = 'Сохранить изменения';
}
?>

<form action="" enctype="multipart/form-data" method="post" class="add_article" onsubmit="return validate_article_js()">

    <select class="article_input" name="article[category_id]" id="select_cat" >
        <option value="non_selected" selected> Выберите категорию...</option>
        <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>"  <?php if ($category['id'] == $article['category_id']):  ?> selected <?php endif;?>>
                <?php echo $category['category_name']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <?php if ($article['id']):?>
        <a class="anchor_nav" href="<?php echo SITE_DIR; ?>cabinet/article">&nbspК добавлению новой статьи &rArr; &nbsp </a>
    <?php endif;?>

    <br /><br />

    <input class="article_input" value="<?php echo $article['article_name']; ?>" type="text" name="article[article_name]" placeholder="Заголовок статьи"  id="art_header"/>
    <input class="article_input" value="<?php if($article['article_year']){ echo $article['article_year']; } ?>" type="text" name="article[article_year]" placeholder="Год" maxlength="4">

    <br /><br />

    <textarea class="ckeditor" name="article[content]" id="article_content" > <?php echo $article['content']?> </textarea>

    <br />

    <input class="button gray" type="submit" value="<?php echo $btn_val; ?>" name="article_btn"  />

    <a class="anchor_nav" href="<?php echo SITE_DIR; ?>cabinet/article_list">&nbspК списку статей &rArr; &nbsp </a>

</form>


