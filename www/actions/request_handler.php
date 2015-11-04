<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25.09.2015
 * Time: 13:32
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . DS);

require_once( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'model.php');
require_once( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'articles_model.php');
require_once( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'categories_model.php');

define('DB_USER', 'serofed');
define('DB_PASSWORD', '21091954');
define('DB_HOST', 'localhost');
define('DB_NAME', 'serofed');


$articles_model = new articles_model();
$categories_model = new categories_model();

if (isset($_POST['art_id'])) {
$articles_model->delete_article('id', $_POST['art_id']);
}

if (isset($_POST['cat_id'])) {
$name = $categories_model->get_category_name($_POST['cat_id']);
print_r($name);
return($name);
}
?>
