<?php

//echo "Hello world!";
//$a=$_GET['a'];
//$b=$_GET['b'];

//echo "a+b=".($a+$b);

    require_once("database.php");
    require_once("models/articles.php");

    $link=db_connect();
    
    $articles = articles_all($link);
    include("views/articles.php")
    
?>