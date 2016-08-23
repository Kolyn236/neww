<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Это первый блог</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <link rel="stylesheet" href="blog.css">
        <link rel="stylesheet" href="option.css">
    </head>
      <body class="pic">
          <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Главная</a>

        </nav>
      </div>
    </div>
        <div class="container">
              <div class="blog-header">
                <h1 class="blog-title">Интересная информация</h1>
                <p class="lead blog-description">Моя стажировочная практика с Bootstrap.</p>
                        <h3><?php foreach($articles as $a): ?></h3>
                            <div class="container">
                                 <blockquote class="quote-box">
                                     <p class="quotation-mark">
                                    <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
                                     </p>
                                
                                <p class="blog-post-bottom pull-left">
                                   Дата публикации: <?=$a['date']?></p>
                                    
                             
                                        <p class="blog-post-bottom pull-left"><?=$a['content']?></p>
                                     <p class="blog-post-bottom pull-right">
                                          <span class="badge quote-badge">896</span>  ❤
                                        </p>
                                </blockquote>

                            </div>
                            <?php endforeach ?>
                    </div>
            

    
               
                <h5 align="center"><address>
                              <strong>ДычковЪ, Inc.</strong><br>
                              Ульяновская обл. г.Ульяновск<br>
                              Радищева 10А<br>
                              <abbr title="Phone">P:</abbr> 8 987-637-0893
                            </address>

                    <address>
                      <strong>Мой адрес электронной почты:</strong><br>
                      <a href="mailto:#">kolyn236@mail.ru</a>
                    </address>
                 </h5> 

            <h5 align="right"><a href="admin" >Панель администратора</a></h5>
                
        </div>
          
 </body>




</html>