<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="../style.css">
       <link rel="stylesheet" href="../bootstrap.min.css">
    </head>
    <body class="pic">
          <div>
                <h1>Создание\Редактирование</h1>
                <div>
                    <div class="row">
                   <div class="container-fluid">
                    <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>"> 
                    <label>
                            Название
                            <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    </div>
                       </div>
                          <div class="row">
                     <div class="container-fluid">
                    <label>
                        <div class="mark">Дата</div>   
                            <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label>
                    </div>
                        </div>
                    <div class="container-fluid">
                    <label>
                            Содержимое
                            <textarea class="form-item" name="content" required><?=$article['title']?></textarea>
                    </label>
                    </div>
                        <input type="submit" value="Сохранить" class="btn">
                    </form>
                
            <footer>
                <p>Мой первый блог
                <br>Copyrihtt &copy; 2016</p>
            </footer>
                </div>
    </body>




</html>