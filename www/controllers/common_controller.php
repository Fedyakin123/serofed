<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 15.09.2015
 * Time: 21:10
 */

class common_controller extends controller
{
    public function __construct()
    {
        if (isset($_POST['login_btn'])) {
            if ($_POST['user']['login'] == BOSS_LOGIN && md5($_POST['user']['password']) == BOSS_PASSWORD) {
               // $_SESSION['auth'] = true;
                setcookie('auth', true, time() + 3600*24*90, '/');
                header('location:'. SITE_DIR . ltrim($_SERVER['REQUEST_URI'], '/')); //Оптимально ли перенаправил?
            }
        }

//        if(isset($_FILES['upload']))
//        {
//            if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name'])) )
//            {
//                $message = "Вы не выбрали файл";
//            } else{
//                if($_FILES['upload']['type'] != 'image/jpeg' && $_FILES['upload']['type'] != 'image/png') {
//                    $dir = 'uploaded_files/';
//                } else {
//                    $dir = 'img/uploaded_images/';
//                }
//                move_uploaded_file($_FILES['upload']['tmp_name'], $dir . $_FILES['upload']['name']);
//                $full_path = SITE_DIR . $dir . $_FILES['upload']['name'];
//                $message = "Файл ".$_FILES['upload']['name']." загружен";
//            }
//            $callback = $_REQUEST['CKEditorFuncNum'];
//            echo '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'.$callback.'", "'.$full_path.'", "'.$message.'" );</script>';
//        }
    }

    public function log_out()
    {
        setcookie('auth', true, time() - 3600*24*90, '/');
        //$_SESSION['auth'] = false;
        echo '<script> javascript:history.back() </script>';
    }

}

?>