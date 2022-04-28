<?php 
require_once 'db/db.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSU NEWS</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header__inner">
                <a href="index.php" class="nav_logo">KSU NEWS</a>
                <nav>
                    <a href="create.php" class="create_news">Опубликовать новость</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div>
            <h1>Новости</h1>
            <main>
               <?php 
                $result = mysqli_query($db, "SELECT * FROM `news`");
                if (mysqli_num_rows($result) > 0) {
                    while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                        <a href="<?= $rows['url'] ?>" class="card">
                            <img src="<?= $rows['img'] ?>" />
                            <h3><?= $rows['title'] ?></h3>
                            <p class="p"><?= $rows['text'] ?></p>
                        </a>
                        <?
                    }
                }
                ?>
            </main>
        </div>
        <div>
            <h1>Погода</h1>
            <section>
                        <div class="cards">
                            <h3 class="weather__city"></h3>
                            <p class="weather__forecast p"></p>
                        </div>
                        <div class="cards">
                            <h3 class="weather__city__voronesh"></h3>
                            <p class="weather__forecast__voronesh p"></p>
                        </div>
                        <div class="cards">
                            <h3 class="weather__city__astrahan"></h3>
                            <p class="weather__forecast__astrahan p"></p>
                        </div>
                        <div class="cards">
                            <h3 class="weather__city__sochi"></h3>
                            <p class="weather__forecast__sochi p"></p>
                        </div>
            </section>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>
