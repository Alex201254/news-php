<?php
    require '../includes/config.php';
    $item = getItemById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title><?php echo $item['title']; ?></title>
</head>
<body>
    <main class="content">
        <div class="news">
            <article class="news__container news__container_is-opened">
                <div class="news__item news__item_is-opened">
                    <h2 class="news__title news__title_is-opened"><?php echo $item['title']; ?></h2>
                    <p class="news__text"><?php echo $item['content']; ?></p>
                </div>
            </article>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__container">
            <p class="footer__return"><a href="../index.php">Все новости >></a></p>
        </div>
    </footer>
</body>
</html>
