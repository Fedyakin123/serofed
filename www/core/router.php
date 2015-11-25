<?php
//ЗАКРЫТЬ ДОСТУП К ФАЙЛОВОМУ МЕНЕДЖЕРУ ПО ПРЯМОЙ ССЫЛКЕ!!!

require_once(ROOT_DIR . 'controllers' . DS . 'error_controller.php');
require_once(ROOT_DIR . 'controllers' . DS . 'common_controller.php');

$notfound = new error_controller; // Не запихнуть ли это в общий контроллер?
$common_controller = new common_controller();

if(isset($_GET['route'])) {
    $array = explode('/', trim($_GET['route'], '/')); //режем строку ГЕТ,отбрасываем слэши
    switch ($array[0]) {
        case 'logout':
            $controller_name = 'default_controller';
            $common_controller->log_out();
            break;
        case 'cabinet':
            $controller_name = 'cabinet_controller';
            if (!$_COOKIE['auth']) $notfound->not_user();
            break;
        default:
            $controller_name = $array[0] . '_controller';
            break;
    }
}else {
    $controller_name = 'default_controller';
}

$controller_file = ROOT_DIR . 'controllers' . DS . $controller_name . '.php';

if(file_exists($controller_file)) { //Если контроллер существует - выбираем его
    require_once($controller_file);
} else {
    $notfound->page_not_found();
    exit;
}

$controller = new $controller_name;

if(isset($array[1])) {
    if(method_exists($controller, $array[1])) {
        $action = $array[1];
    } else {
        $notfound->page_not_found();
        exit;
    }
} else {
    $action = 'default_action';
}

if(isset($array[2])) {
    $notfound->page_not_found();
}

$controller->$action();
