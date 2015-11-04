<form>
    <br />
    <select class="article_input" id="categories" name="article[category_id]" onchange="choose_category_js()">
        <option value="all">Все категории</option>
        <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>" <?php if ($category['id'] == $_GET['category_id']):  ?> selected <?php endif;?> >
                <?php echo $category['category_name']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <a class="anchor_nav" href="<?php echo SITE_DIR; ?>cabinet/article">&nbspК добавлению новой статьи &rArr; &nbsp </a>
</form>

<br>
<?php if ($article_list): ?>
<table class="article_list" >
    <thead>
    <tr>
        <th>
            ID статьи
        </th>
        <th>
            Название статьи
        </th>
        <th>
            Категория
        </th>
        <th>
            Дата создания
        </th>
        <th>
            Редактировать
        </th>
        <th>
            Удалить
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach ($article_list as $sub_arr) {
            echo '<tr>
                      <td>
                         ' . $sub_arr['id'] . '
                      </td>
                      <td>
                         ' . $sub_arr['article_name'] . '
                      </td>
                       <td>
                        ' . $sub_arr['category_name'] . '
                      </td>
                      <td>
                         ' . substr($sub_arr['create_date'],0,10) . '
                      </td>
                      <td onclick="edit_article_js(this)">
                          <img heigth="64" width="64" src="' . SITE_DIR . 'img/edit.png">
                      </td>
                      <td onclick="delete_article_js(this)">
                          <img heigth="64" width="64" src="' . SITE_DIR . 'img/delete.png">
                      </td>
                  </tr>';
        }
    ?>
    </tbody>

</table>
    <?php else:?>
    В этом разделе пока нет статей
<?php endif; ?>