<?php

include_once 'core/config/config.php'; // settings
include_once 'core/config/db.php'; //database settings
include_once 'core/library/mainFunctions.php'; //--

//Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : Index;


//Определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action']: 'index';

loadPage($smarty, $controllerName, $actionName);
