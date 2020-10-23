<?php

use App\DataBase;

$q = new DataBase();
$realisations = $q->query('SELECT * FROM realisations');
$groupe = $q->query('SELECT * FROM groupe');
$valeurs = $q->query('SELECT * FROM valeurs');
$img = 4;
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Raul Bethencourt Gonzalez">
    <meta name="description" content="Test page to practice HTML, SASS and BEM">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>My client is rich</title>
</head>

<body>
<div class="container">
    <header class="container__header">
        <img src="../public/images/logo_mcir.png" alt="logo MCIR" class="header__img">
        <h1 class="header__title">NOS RÉALISATIONS</h1>
    </header>

    <main class="container__main">
        <section class="main__realisations">
            <?php foreach ($realisations as $realisation): ?>
                <div class="realisations__container">
                    <img src="../public/images/<?= $realisation['image_url'] ?>" alt="paisage">
                    <h3><?= $realisation['titre'] ?></h3>
                    <p><?= $realisation['description'] ?></p>
                    <a href="<?= $realisation['url'] ?>">EN SAVOIR PLUS</a>
                </div>
            <?php endforeach; ?>
        </section>
        <section class="main__valeurs">
            <h2>NOS VALEURS</h2>
            <div class="valeurs__container">
                <?php foreach ($valeurs as $valeur): ?>
                    <div class="valeurs__container--<?= ++$img ?>">
                        <h3><?= $valeur['titre'] ?></h3>
                        <p><?= $valeur['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="main__group">
            <div class="group__figure">
                <h2><?= $groupe[0]['titre'] ?></h2>
                <p><?= $groupe[0]['description'] ?></p>
            </div>
        </section>
    </main>

    <footer class="container__footer">
        <section>
            <a href="#"><img src="../public/images/PNG/facebook.png" alt="logo facebook"></a>
            <a href="#"><img src="../public/images/PNG/twitter.png" alt="logo twiter"></a>
            <a href="#"><img src="../public/images/PNG/instagram.png" alt="logo instagram"></a>
        </section>
    </footer>
</div>
<script></script>
</body>
</html>
