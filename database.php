<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'blog');
function db_connect(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) 
        or die("Error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));}
    return $link;
}
?>
/* 
1. Необходимо создать Базу Данных MySQL с кодировкой utf8_General_c
2. В БД создать таблицу articles
3. Создать 4 записи в таблице:
ID int (auto)
title varchar 255
content text
date DATE
*/