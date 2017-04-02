<?php
require_once("../database.php");
require_once("../models/articles.php");
        
$link = db_connect();
$article = null;

if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

    if ($action == "add"){
        if(!empty($_POST)){
            articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        //$article = null;
        include("../admin/add.php");
    }else if ($action == "edit"){
        if (!isset($_GET['id'])){
            header("Location: index.php");
        }
        // Если не существует параметр Id, то идет перенаправление на главную страницу
        $id = (int)$_GET['id'];
        
        if(!empty($_POST) && $id > 0){
           
            articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        
        $article = article_get($link, $id);
        //include("../views/articles_admin.php");
        include("../admin/add.php");
    }else if($action == 'delete'){
        $id = $_GET['id'];
        $article = articles_delete($link, $id);
        header('Location: index.php');
    }    else{
        $articles = articles_all($link);
        include("../views/articles_admin.php");
        //include("../admin/add.php");
    }

?>