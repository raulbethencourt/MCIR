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
var_dump($result);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOS REALISATIONS</title>
</head>

<body>
    <header>
        <img src="../public/images/logo_mcir.png" alt="">
        <h1>nos réalisations</h1>
    </header>
    <main>
        <section>
            <?php
            foreach ($result[0] as $text) {
                echo "<h2>" . $text["titre"] . "</h2>";
                echo "<p>" . $text["description"] . "</p>";
            };
            ?>
        </section>
        <section></section>
        <section></section>
    </main>
    <footer>
        <i></i>
        <i></i>
        <i></i>
    </footer>
</body>

</html>