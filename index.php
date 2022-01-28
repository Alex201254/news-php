<?php
    require 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pages/index.css">
    <title><?php echo $config['title']; ?></title>
</head>
<body class="root">
   <div class="page">
       <header class="header">
           <div class="header__container">
               <h1 class="header__title"><?php echo $config['title']; ?></h1>
           </div>
       </header>

       <main class="content">
            <div class="news">
                <article class="news__container">
                <?php
                $view = $_GET['page'];
                $news = getNews($view);
                foreach($news as $item){
                ?>
                <div class="news__item">
                    <p class="news__date"><?php
                    $now = new DateTimeImmutable();
                    $date = $now->setTimestamp($item['idate']);
                    $dateFormat = $date->format('d.m.Y');
                    echo $dateFormat;
                    ?></p>
                    <a href="/pages/view.php?id=<?php echo $item['id']; ?>" class="news__title"><?php echo $item['title']; ?></a>
                    <p class="news__text"><?php echo $item['announce']; ?></p>
                </div>
                <?php
                }
                ?>
                </article>
            </div>
       </main>

       <footer class="footer">
           <div class="footer__container">
                <h2 class="footer__title">Страницы:</h2>
                <?php
                $allNews = getAllNews();
                $count = ceil(count($allNews) / 5);
                for($i = 1; $i <= $count; $i++){
                    if($i == 1){
                   ?>
                   <a href="index.php" class="footer__link"><button class="footer__button  <?php echo (null == $view) ? "footer__button_active" : ""; ?>"><?php echo $i; ?></button></a>
                <?php
                }else{
                    ?>
                    <a href="index.php?page=<?php echo $i; ?>" class="footer__link"><button class="footer__button  <?php echo ($i == $view) ? "footer__button_active" : ""; ?>"><?php echo $i; ?></button></a>
                <?php
                }
                }
                ?>
           </div>
       </footer>
   </div>
</body>
</html>
