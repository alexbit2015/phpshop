<?php

/**
 * 
 *  Файл настроек
 * 
 * 
 */

//константы для обращения к контроллерам

define('PathPrefix', '/core/controllers/');
define('PathPostfix', 'Controller.php');
//<


//> используем шаблон
$template = 'default';

//пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "/core/views/{$template}/");
define ('TemplatePostfix', '.tpl');

//пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath',"/templates/{$template}/");
//< 

//>Инициализация шаблонизатора Smarty
//put full path to Smarty.class.php
require ('/core/library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('/core/tmp/smarty/templates_c');
$smarty->setCacheDir('/core/tmp/smarty/cache');
$smarty->setConfigDir('/core/library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);