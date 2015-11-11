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
        $this->view('cabinet/article');
    }
    public function article()
    {
        require_once(ROOT_DIR . 'models' . DS . 'categories_model.php');
        $categories_model = new categories_model();
        $articles_model = new model('articles');
        if (isset($_POST['article_btn'])) {
            $fields = $_POST['article'];
            $fields['create_date'] = date('Y-m-d H:i:s');
            if (isset($_GET['id'])) {
                $articles_model->update($fields, $_GET['id']);
                header('Location: ' . SITE_DIR . 'cabinet/article_list/');
            } else {
                $articles_model->insert($fields);
                header('Location: ' . SITE_DIR . 'cabinet/article/');
            }
        }
        $categories = $categories_model->get_categories();
        $this->render('categories', $categories);
        $this->view('cabinet' . DS . 'article');
    }

    public function browse_image() //ВОТ ТУТ ПОКОВЫРЯТЬ И СДЕЛАТЬ КРАСИВО
    {
        $path = ROOT_DIR . 'img' . DS . 'uploads' . DS;
        if($dir = opendir($path)) {
            echo"<script>
                    function getUrlParam(paramName)
                    {
                        var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
                        var match = window.location.search.match(reParam) ;

                        return (match && match.length > 1) ? match[1] : '' ;
                    }
                    function select_file(ths)
                    {
                        var url = ths.src;
                        var num = getUrlParam('CKEditorFuncNum');
                        window.opener.CKEDITOR.tools.callFunction(num, url);
                        self.close();

                    }
                </script>";
            while($file = readdir($dir)) {
                if(is_file($path . DS . $file)) {
                    echo '<img class="select_image" onclick="select_file(this)" style="margin: 10px; float: left; max-width: 200px; max-height: 200px;" src="' . SITE_DIR . 'img/uploads/' . $file . '">';
                }
            }
        }
    }
    public function article_list()
    {
        require_once(ROOT_DIR . 'models' . DS . 'categories_model.php');
        require_once(ROOT_DIR . 'models' . DS . 'articles_model.php');

        $categories_model = new categories_model();
        $categories = $categories_model->get_categories();
        $this->render('categories', $categories);

        $articles_model = new articles_model();
        $article_list = ((isset($_GET['category_id']))&&($_GET['category_id'] != 'all')) ? $articles_model->get_by_field('category_id', $_GET['category_id']) : $articles_model->get_all();
        rsort($article_list); //Добавить выбор типа сортировки с помощью js
        foreach ($article_list as $index=>$value) {
              $article_list[$index]['category_name'] = $categories_model->get_categories($article_list[$index]['category_id']);
        }
        $this->render('article_list', $article_list);
        $this->view('cabinet' . DS . 'article_list');
    }
}