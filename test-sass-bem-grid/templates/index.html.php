<?php

use App\DataBase;

$db = new DataBase();

$categories = ["realisations", "groupe", "valeurs"];
$result = [];

/**
 * get the data from db
 */
foreach ($categories as $category) {
    $result[] = $db->query(
        "SELECT * 
        FROM $category"
    );
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Raul Bethencourt Gonzalez">
    <meta name="description" content="this is my test for CSS/HTML">
    <link rel="stylesheet" href="../dist/css/style.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>NOS REALISATIONS</title>
</head>

<body>
    <header class="header">
        <img src="../public/images/logo_mcir.png" alt="logo" class="header__img">
        <h1 class="header__title">nos réalisations</h1>
    </header>

    <main class="main">
        <section class="main__section-top">
            <?php
            foreach ($result[0] as $text) {
                $number = substr($text['image_url'], -5, 1);
                echo '<div class="section-top__container">';
                echo    '<div class="container__img--' . $number . '"></div>';
                echo    '<h2 class="container__title">' . $text["titre"] . '</h2>';
                echo    '<p class="container__text">' . $text["description"] . '</p>';
                echo    '<a href="' . $text['url'] . '"  class="container__link">en savoir plus</a>';
                echo '</div>';
            };
            ?>
        </section>

        <section class="main__section-middle">
            <?php
            $text = $result[1][0]["description"];
            $textResult = explode("Donec", $text, 2);
            echo '<div class="section-middle__container">';
            echo    '<h2 class="container__title">' . $result[1][0]["titre"] . '</h2>';
            echo    '<p class="container__text">' . $textResult[0] . '</p>';
            echo    '<p class="container__text">Donec ' . $textResult[1] . '</p>';
            echo '</div>';
            ?>
        </section>

        <section class="main__section-bottom">
            <h2 class="section-bottom__title">nos valeurs</h2>
            <div class="section-bottom__container">
                <?php
                foreach ($result[2] as $text) {
                    $number = substr($text['image_url'], -5, 1);
                    echo '<div class="container__block--' . $number . '">';
                    echo    '<h2 class="block__title">' . $text["titre"] . '</h2>';
                    echo    '<p class="block__text">' . $text["description"] . '</p>';
                    echo '</div>';
                };
                ?>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__container">
            <i class="fab fa-facebook-f icon"></i>
            <i class="fab fa-twitter icon"></i>
            <i class="fab fa-instagram icon"></i>
        </div>
    </footer>

    <script src="../public/js/main.js"></script>
</body>

</html>