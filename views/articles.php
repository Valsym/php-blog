<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Блог на чистом PHP</title>
</head>
<body>
<div>
<h1>Блог на чистом PHP</h1>
<div class="container">
<a href="admin">Панель администратора</a>
<?php foreach($articles as $a): ?>
    <div class="article">
        <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
        <em>Опубликовано: <?=$a['date']?></em>
        <p> <?=articles_intro($a['content'])?> >>> </p>
    </div>
<?php endforeach ?>

</div>
<footer>
<p>
Блог <br>Copyrite &copy 2016;
</p>
</footer>
</div>
</body>
</html>