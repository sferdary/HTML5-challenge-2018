<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/12/2018
 * Time: 07:44
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Scissor magic</title>
    <link href="style.css" rel="stylesheet">
    <link href="style/tablestyle.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,700" rel="stylesheet">
</head>
<body>
<header>
    <a href="index.php"><img src="../content/img/scissor-magic-logo.jpg" alt="Logo" </a>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pages/salons/salons.php">Salons</a></li>
            <li><a href="pages/producten/producten.php">Producten</a></li>
            <li><a href="pages/openingstijden/openingstijden.php">Openingstijden</a></li>
        </ul>
    </nav>
</header>
<main>
    <div>
        <?php require '../content/elements/prijzen_table.php'; ?>
    </div>
    <div>
        <h3>Onze specialiteiten</h3>
        <a href="pages/rasta/rasta.php"><img src="../content/img/dreadlocks/300x300/wiz_khalifa300x300.jpg" alt="rasta"> </a>
        <img src="../content/img/andere%20haarstijlen/300x300/Corey_Layzell300x300.jpg" alt="curls">
        <img src="../content/img/andere%20haarstijlen/300x300/Wild__red_hair300x300.jpg" alt="wild">
    </div>
</main>
<footer>

</footer>
</body>
</html>
