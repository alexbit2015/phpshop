<?php
/**
 * 
 * Основаные функции
 * 
 */


/**
 * Формирование запрашиваемой страницы
 * 
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки контроллера
 * 
 */
function loadPage($smarty, $controllerName, $actionName = 'index') {
   
include_once PathPrefix . $controllerName. PathPostfix;

$function = $actionName.'Action';
$function($smarty);
};

/**
 * Функция загрузки шаблона используя шаблонизатор Smarty
 * 
 * @param type $smarty
 * @param type $templateName
 */
function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TemplatePostfix);
    
};

/**
 * Отладочная функция
 * 
 * @param type $value
 * @param type $die
 */
function d($value = null, $die = 1) {
    echo 'Debug: <br/><pre>';
    print_r($value);
    echo'</pre>';
    if($die) die;
};


/**
 * 
 * Преобразование результата работы выборки в ассоциативный массив
 * 
 * @param type $rs
 * @return boolean
 */

function createSmartyRsArray($rs) {
    
       
    if(! $rs) return false;
    $smartyRs = array();
    while($row = mysql_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
  
    return $smartyRs;
}