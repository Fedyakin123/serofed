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
                $_SESSION['auth'] = true;
                setcookie('auth', true, time() + 3600*24*90, '/');
                header('location:'. SITE_DIR . ltrim($_SERVER['REQUEST_URI'], '/')); //Оптимально ли перенаправил?
            }
        }

        if(isset($_FILES['upload'])) {
            echo '<script type="text/javascript">
                window.opener.CKEDITOR.tools.callFunction(' . $_GET['CKEditorFuncNum'] . ', a.href, "" );
                self.close();
            </script>';
            $path = ROOT_DIR . 'img' . DS . 'uploads' . DS;
            move_uploaded_file($_FILES['upload']['tmp_name'], $path . $_FILES['upload']['name']);
        }
    }

    public function log_out()
    {
        setcookie('auth', true, time() - 3600*24*90, '/');
        $_SESSION['auth'] = false;
        echo '<script> javascript:history.back() </script>';
    }

}