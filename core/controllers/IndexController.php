<?php

// подключаем модели
include_once '/core/models/CategoriesModel.php';

function testAction() {
    echo 'IndexController > testAction';
};

/*
 * 
 * Формирование главной страницы
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty) {
    
    $rsCategories = getAllMainCatsWithChildren();
    
    
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
        
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
};
