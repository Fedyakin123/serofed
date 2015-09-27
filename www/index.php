<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 31.08.2015
 * Time: 0:00
 */
session_start();
header("Content-Type: text/html; charset=utf-8");
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . DS);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once(ROOT_DIR . 'config.php');
require_once(ROOT_DIR . 'core' . DS . 'model.php');
require_once(ROOT_DIR . 'core' . DS . 'controller.php');
require_once(ROOT_DIR . 'core' . DS . 'router.php');
