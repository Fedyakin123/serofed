<?php
class controller
{
    public $vars = [];
    public $auth;

    public function __construct()
    {
        $this->check_auth();
    }
    public function render($key, $value)
    {
        $this->vars[$key] = $value;
    }
    public function view($template = '404')
    {
        foreach($this->vars as $key => $value) {
            $$key = $value;
        }
        if ((isset($_GET['view_page'])) && $template == '404') {
            $template = $_GET['view_page'];
        }
        if (file_exists(ROOT_DIR . 'templates' . DS . $template . '.php')) {
            require_once(ROOT_DIR . 'templates' . DS . 'main.php');
        }
    }
    private function check_auth()
    {
        if ($_COOKIE['auth']) {
            $this->auth = true;
            $this->render('auth', true); //не нужно ли ее сбросить?
        }
    }
}
