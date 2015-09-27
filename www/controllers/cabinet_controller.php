<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 15.09.2015
 * Time: 21:51
 */
class cabinet_controller extends controller
{
    public function default_action()
    {
        $this->view('cabinet/cabinet_page');
    }
    public function article()
    {
        require_once(ROOT_DIR . 'models' . DS . 'categories_model.php');
        $categories_model = new categories_model();
        $articles_model = new model('articles');
        if (isset($_POST['article_btn'])) {
            $fields = $_POST['article'];
            $fields['create_date'] = date('Y-m-d H:i:s');
            $articles_model->insert($fields);
            header('Location: ' . SITE_DIR . 'cabinet/article/');

        }
        $categories = $categories_model->get_categories();
        $this->render('categories', $categories);
        $this->view('cabinet' . DS . 'article');
    }

    public function browse_image()
    {
        $path = ROOT_DIR . 'img' . DS . 'uploads' . DS;
        if($dir = opendir($path)) {
            while($file = readdir($dir)) {
                if(is_file($path . DS . $file)) {
                    echo '<img class="select_image" onclick="select_file()" style="margin: 10px; float: left; max-width: 200px; max-height: 200px;" src="' . SITE_DIR . 'img/uploads/' . $file . '">';
                }
            }
        }
    }
    public function edit_article()
    {   require_once(ROOT_DIR . 'models' . DS . 'articles_model.php');
        $model = new articles_model();
        $article_list = $model->get_all();
        $this->render('article_list', $article_list);
        $this->view('cabinet' . DS . 'edit_article');
        if (isset($_POST['delete_article_btn'])) {
            $model->delete_article('id',$value);
        }
    }
}