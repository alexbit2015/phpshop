<?php

/**
 * 
 * Инициализация подключения к БД
 * 
 */

$dblocation = "127.0.0.1";
$dbname = "phpshop";
$dbuser = "root";
$dbpassword = "";

$db = mysql_connect($dblocation, $dbuser, $dbpassword);

if(!$db){
    echo "Ошибка доступа к MySQL";
    exit();
};

mysql_set_charset('utf8');

if(!mysql_select_db($dbname, $db)) {
    echo "Ошибка доступа к базе данных: {$dbname}";
    exit();
};
