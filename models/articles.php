<?php

function articles_all($link){
        
    $query = 'select * from articles order by id desc';
    $result = mysqli_query($link, $query) or die('Error: '.mysqli_error($link));

    while ($row = mysqli_fetch_assoc($result)){
        $articles[] = $row;
    }

    return $articles;
}

 function article_get($link, $id_article){
        $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }


    function articles_new($link, $title, $date, $content){
        // Подготовка
        $title = trim($title);
        $content = trim($content);
            
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_add = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
        
        $query = sprintf($template_add, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $content));
        
        echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;

    }


    function articles_edit($link, $id, $title, $date, $content){
        // Подготовка
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;
echo '<br>   title='.$title.'<br>   ';
          
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_update = "UPDATE articles SET title='%s', content='%s', date='%s' WHERE id='%d'";
            
        $query = sprintf($template_update, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $content),
                         mysqli_real_escape_string($link, $date),
                         $id);
        //echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }


    function articles_delete($link, $id){
        $id = (int)$id;
        // Проверка
        if ($id == 0)
            return false;
        
        // Запрос
        $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function articles_intro($text, $len = 150)
    {
        return mb_substr($text, 0, $len);        
    }


?>