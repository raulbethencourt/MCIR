<?php

use App\DataBase;

$db = new DataBase();

$categories = ["realisations", "groupe", "valeurs"];
$result = [];

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
    <div class="container">
        <header class="container__header">
            <img src="../public/images/logo_mcir.png" alt="logo" class="header__img">
            <h1 class="header__title">nos réalisations</h1>
        </header>

        <main class="container__main">
            <section class="main__section-top">
                <?php
                foreach ($result[0] as $text) {
                    echo '<div class="section-top__container">';
                    echo    '<div class="container__img--' . $text['id'] . '"></div>';
                    echo    '<h2 class="container__title">' . $text["titre"] . '</h2>';
                    echo    '<p class="container__text">' . $text["description"] . '</p>';
                    echo    '<a href="' . $text['url'] . '"  class="container__link">en savoir plus</a>';
                    echo '</div>';
                };
                ?>
            </section>

            <section class="main__section-middle">
                <h2 class="section-middle__title">nos valeurs</h2>
                <?php
                foreach ($result[1] as $text) {
                    echo '<div class="section-middle__container">';
                    echo    '<h2 class="container__title">' . $text["titre"] . '</h2>';
                    echo    '<p class="container__text">' . $text["description"] . '</p>';
                    echo '</div>';
                };
                ?>
            </section>

            <section class="main__section-bottom">
                <?php
                foreach ($result[2] as $text) {
                    echo '<div class="section-bottom__container">';
                    echo    '<div class="container__img"></div>';
                    echo    '<h2 class="container__title">' . $text["titre"] . '</h2>';
                    echo    '<p class="container__text">' . $text["description"] . '</p>';
                    echo '</div>';
                };
                ?>
            </section>
        </main>

        <footer class="container__footer">>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
        </footer>
    </div>

    <script src="../public/js/main.js"></script>
</body>

</html>