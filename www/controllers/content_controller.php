<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 01.10.2015
 * Time: 16:53
 */

class content_controller extends controller
{
    public function default_action()
    {
       $this->view('content');
    }
    public function show()
    {
        require_once(ROOT_DIR . 'models' . DS . 'articles_model.php');
        $model = new articles_model();
        $res = $model->get_by_field('id',$_GET['art_id']);
        $this->render('result', $res);
        $this->view('full_article');
    }
    public function paginate($column, $function_name, $num_on_page = 5, $resort = true)
    {
        require_once(ROOT_DIR . 'models' . DS . 'articles_model.php');
        require_once(ROOT_DIR . 'models' . DS . 'categories_model.php');
        $cat_model = new categories_model();
        $names = $cat_model->get_parent_name($_GET['cat']);
        $this->render('names', $names);

        $model = new articles_model();
        if (isset($_GET['cat']) && isset($_GET['page'])) {
            $count = count($model->$function_name($column, $_GET['cat']));
            $count_pages = ceil($count / $num_on_page);
            $full_pages = floor($count / $num_on_page);

            if (($_GET['page'] > $count_pages) && $count != 0) {
                $this->view('404');
            } elseif (($_GET['page'] > $count_pages) && $count == 0) {
                $this->view('void');
            } else {
                $kfc = (($_GET['page'] == $count_pages) && ($count_pages != $full_pages)) ? ($count / $num_on_page - $full_pages) : 1;
                $dobavka = round((1 - $kfc) * $num_on_page);
                $last = (int)$num_on_page * $kfc;
                $num = ($count - ($num_on_page * $_GET['page'])) + $dobavka;
                $limit = $num . ',' . $last;
                $res = $model->$function_name($column, $_GET['cat'], $limit); //лютая хуйня. Либо нужно извлекать весь массив, пересортировывать, и только потом рубить лишнее,что тоже гемор
                if ($resort) rsort($res);
                $this->render('result', $res);
                $this->render('count', $count_pages);
            }
        }
    }
    public function show_articles()
    {
        $this->paginate('category_id', 'get_by_field');
        $this->view('content');
    }
    public function show_articles_parent()
    {
        $this->paginate('', 'get_sibling_articles');
        $this->render('parent','_parent');
        $this->view('content');
    }
}