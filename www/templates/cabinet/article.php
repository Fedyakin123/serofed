
<form action="" enctype="multipart/form-data" method="post">
    <input type="text" name="article[article_name]" /><br /><br />
    <select name="article[category_id]">
        <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>">
                <?php echo $category['category_name']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <textarea class="ckeditor" name="article[content]" ></textarea>
    <input type="submit" value="Сохранить" name="article_btn" />
</form>
