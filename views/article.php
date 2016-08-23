<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="pic">
         <div class="container">
              <div class="blog-header">
                <h1 class="blog-title">Интересная информация</h1>
                <p class="lead blog-description">Моя стажировочная практика с Bootstrap.</p>
             </div>
        </div>
        <div class="container">
            
                <h3>Заголовок<?=$article['title']?></h3>
                <em>Опубликовано:<?=$article['date']?></em>
                    <p><?=$article['content']?></p>
        
           
            <footer>
                <p>Мой первый блог
                <br>Copyrihtt &copy; 2016</p>
            </footer>
        </div>
    </body>




</html>