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

    <div class="article">
        <h3><?=$article['title']?></h3>
        <em>Опубликовано: <?=$article['date']?></em>
        <p> <?=$article['content']?> </p>
    </div>

</div>
<footer>
<p>
Блог <br>Copyrite &copy 2016;
</p>
</footer>
</div>
</body>
</html>