<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Блог</title>
        <link rel="stylesheet" href="../style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Блог на чистом PHP</h1>
            <div>
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Название</br>
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required size="100%">
                    </label></br>
                    <label>
                        Дата</br>
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label></br>
                    <label>
                        Содержимое</br>
                        <textarea class="form-item" name="content" required rows="10" cols="100%"><?=$article['content']?></textarea>
                    </label></br>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>
            <footer>
                <p>
                    Блог<br>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</hmtl>