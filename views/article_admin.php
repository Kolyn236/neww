<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="../style.css">
       <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../commentbox.css">
    </head>
    <body class="pic">
         
        <h1>Создание/редактирование статей</h1>
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
                </div>
              <div class="container">
	<div class="row">
		<h3>Status Upload Snipp</h3>
	</div>
    
    <div class="row">
    
    <div class="col-md-6">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form>
										<textarea placeholder="Пиши здесь" ></textarea>
										
										<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
        
    </div>
                  <div class="row">
    
    <div class="col-md-6">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form>
										<textarea placeholder="What are you doing right now?" ></textarea>
										<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
        
    </div>
</div>
            <footer>
                <p>Мой первый блог
                <br>Copyrihtt &copy; 2016</p>
            </footer>
                
              
    </body>




</html>